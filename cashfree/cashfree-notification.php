<?php
session_start();
include_once('../config.php');
include_once('../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Olfant\CrmOlfantSdk\SuccessPaidClient;

function generate($length = 7) {
    $chars = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $token = '';
    while(strlen($token) < $length) {
        $token .= $chars[mt_rand(0, strlen($chars)-1)];
    }
    return 'SAVE_NOTIFICATION_' . strtoupper($token);
}

$response = file_get_contents('php://input');
file_put_contents('./cashfree-log/'.generate(13), $response);
$data = explode('&', urldecode($response));

$secretKey = CASHFREE_KEY_SECRET;
if (isset($_GET["orderId"])) {
    $orderId = $_GET["orderId"];
    
    $sql = "SELECT * FROM msme_form WHERE order_id = '".$orderId."'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $referenceId = $row['payment_id'];
        $x_api_version = "2022-09-01";
        
        \Cashfree\Cashfree::$XClientId = CASHFREE_APP_ID;
        \Cashfree\Cashfree::$XClientSecret = CASHFREE_KEY_SECRET;
            if(strtoupper(ENVIROMENT) == 'PRODUCTION') {
        \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$PRODUCTION;
    } else {
        \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;
    }
        
        $cashfree = new \Cashfree\Cashfree();
        
        try {
            $result = $cashfree->PGFetchOrder($x_api_version, $referenceId, null, null, null);
            $res = json_decode($result[0]);
        } catch (Exception $e) {
            echo 'Exception when calling PGFetchOrder: ', $e->getMessage(), PHP_EOL;
        }
        
        $orderAmount = $res->order_amount;
        
        if ($res->order_status == 'PAID') {
        
            $post = [
                "account_id" => CASHFREE_APP_ID,
                "event" => "Success",
                "payment_id" => $referenceId,
                "order_id" => $orderId,
                "amount" => $orderAmount,
                "email" => $row['email_id'],
                "mobile" => $row['mobile_number']
            ];
        
        
                $ch = curl_init('https://crm.olfant.com/api/cashfree-notification.php');
            
            
            $sql_select_form = "select `id` from msme_form where order_id = '$orderId'";
            $result_select_form = $conn->query($sql_select_form);
            if($result_select_form->num_rows == 1){
                $row_select_form = $result_select_form->fetch_assoc();
                $successPaidClient = new SuccessPaidClient;
                $successPaidClient->formToPaid($row_select_form['id'], $orderId, $referenceId,  $orderAmount + 0,  $secretKey);
            }

            $sql =
            "
            UPDATE msme_form
            SET payment_id = '".$referenceId."',
            payment_status = 'Paid'
            WHERE order_id = '".$orderId."'
            ";
            $result = $conn->query($sql);
            die('true');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_GETFIELDS, $post);
            $response = curl_exec($ch);
            curl_close($ch);
            $response;
        }
    }
}


?>
