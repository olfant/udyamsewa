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
$web = "UDYAMGOV.COM";
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

        $sql = "
        UPDATE msme_form
        SET payment_id = '" . $referenceId . "',
        payment_status = 'Paid'
        WHERE order_id = '" . $orderId . "'
        ";
        $result = $conn->query($sql);
        $_SESSION['orderId'] = $orderId;

        $sql = "SELECT * FROM msme_form WHERE order_id = '" . $_SESSION['orderId'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $successPaidClient = new SuccessPaidClient;
        $successPaidClient->formToPaid($row['id'], $orderId, $referenceId,  $orderAmount + 0,  $secretKey);

        $editable_link_btn = '';
        // if ((isset($_COOKIE['token_function']))&&($_COOKIE['token_function'] == 'BULK_DATA_CAMPN')){
        // $cid_editable_sql = "SELECT * FROM `cid` WHERE `uid` = '".$row['id']."'";
        // $result_id_editable = $conn->query($cid_editable_sql);
        //     if ($result_id_editable->num_rows == 1) {
        //         include('../editable/data-form.php');
        //         while($row_id_editable = $result_id_editable->fetch_assoc()) {
        //         $editable_link_full = $current_link.$form_data[$row_id_editable['form_name']]['form_link'].'?cid='.$row_id_editable['cid'].'&token_function=BULK_DATA_CAMPN';
                
        //         $editable_link_btn = '
        //         <br>
        //         <span style="color:yellow;"><b>Please Upload Document For Next Proccess :-----</b></span><br>
        //         <a href="'.$editable_link_full.'" style="background: #1b61a5;border-radius: 8px;color:#ffffff;text-decoration:none;padding:10px;margin-top:20px;display:inline-flex;"><b>Click Here For Upload Document</b></a>';
                
        //         }
        //     }
        // } 

            // for live
            if($_SERVER['HTTP_HOST'] != 'localhost')
            {
                
            $invoiceBase = 'https://crm.olfant.com/api/fetch-paid-invoice.php?id='.$client_id.'&web='.$web.'&limit=1&download=true'; 
            } else {
                
            $invoiceBase = 'https://crm.olfant.com/api/fetch-paid-invoice.php?id='.$client_id.'&web='.$web.'&limit=1&download=true'; 
            }

        $tz = 'Asia/Kolkata';
        date_default_timezone_set($tz);
        $time = date('H:i:s');
        $CURRENT_TIME = "19:00:00"; // 7:00 PM

        $mail = new PHPMailer(true);
        try
        {
            $mail->isSMTP();
            $mail->Host = $mailHost;
            $mail->SMTPAuth = true;
            $mail->Username = $mailAddress;
            $mail->Password = $mailPassword;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Check if payment is after 7 PM
            $afterHoursMessage = "";
            if ($time > $CURRENT_TIME) {
                $afterHoursMessage = '<p style="color: #cc0c0c; font-weight: bold; font-size: 16px;">Service unavailable at this time. Processing will resume tomorrow.</p>';
            }

            $mail->setFrom($mailAddress, "MSME Registration");
            $mail->addAddress("" . $row['email_id'] . "");
            $mail->isHTML(true);
            $mail->Subject = "Payment Successful For " . $row['form_name'] . "";

            $mail->Body = '
            <section style="width:100%;font-family: \'Poppins\', sans-serif;">
        <div style="background-color:#5f6368;align-items: center;text-align:center; padding:20px 8px;color:#fff;border-bottom:10px solid #ddd;"><div style="font-size: 31px;font-weight: 700;">Payment Done Sucessful  For ' . $row['form_name'] . '</div></div>
        <br>
        <center><img src="https://' . $webName . '/assets/image/msme-thank-you.png" /></center><br>
        <span>Dear ' . $row['applicant_name'] . ',</span><br><br>
        <span>Greeting of the Day</span><br><br>
        ' . $afterHoursMessage . ' <!-- Display message if after 7 PM -->
        <div id="container">
        <p style="font-weight: 700; display: flex;">NOTE : Final Certificate will be delivered within 2-3 working days.
        </p>
        <h1 style="color:#5f6368;;">Your order details are as follows:</h1>

        <table style="  border-collapse: collapse;">
        <tbody>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">APPLICANT NAME: </td><td style="padding: 8px;">' . strtoupper($row["applicant_name"]) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">EMAIL ID: </td><td style="padding: 8px;">' . strtoupper($row['email_id']) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">MOBILE NUMBER: </td><td style="padding: 8px;">' . strtoupper($row['mobile_number']) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">AMOUNT PAID: </td><td style="padding: 8px;">' . strtoupper($row['total_amount']) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">PAYMENT ID: </td><td style="padding: 8px;">' . strtoupper($row["payment_id"]) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">ORDER ID: </td><td style="padding: 8px;">' . strtoupper($row['order_id']) . '</td></tr>
        <tr style="font-weight:800; color:#5f6368;border-bottom: 1px solid #fff;"><td style="padding: 8px;">PAYMENT STATUS: </td><td style="padding: 8px;">PAID</td></tr>
        </tbody>
        </table>
        <br>
        <p style="font-weight: 700;">Your MSME Registration Number will be generated within next 12 Hrs.  and the same will be sent on your registered email address.</p>
        <br><br>
        <h4>Note:</h4>
        1) Your application along with payment has been received and the same will be processed by our experts in next 24 - 48 working hours.<br>
        <strong>2) At the time of processing, one link will be sent to you for OTP collection. We collect OTP only through system generated automatic links, linked to clients application to reduce human intervention.</strong><br>
        3) Normally certificate generation takes 10 - 15 working days. However due to restrictions placed by COVID-19, this may take longer than usual.
        <br>
        <Br>
        </div>
    <br>
    <br>
    (Save <a href="'.$invoiceBase.'&method=latepay" style="display:inline-flex;">Your Invoice</a> for future)
    <br>
    <br>

        <br>
        Due to system upgradation on account of financial year change, processing of certificates will be delayed.
        <br>
        Your application has been queued up for processing and the final certificate will be sent on your registered email address
        within 7 - 10 working days.
        <br>
        We expect your cooperation for the same.
        <br>

            <span>Regards</span><br>
        <span>Team Processing</span><br>
        <span>Mail Us: <a href="mailto:' . $mailAddress . '">' . $mailAddress . '</a></span><br>
        </section>
     ';

            $mail->send();

            $mail->ClearAllRecipients();

            // $mail->addAddress($mailAddress);
            // //cc
            // $mail->AddCC('souravmaity091@gmail.com');
            // $mail->AddCC('ajitkumae23@gmail.com');
            // $mail->isHTML(true);
            // $mail->Subject = "Payment Received For " . $row["form_name"] . "";
            // $mail->Body = "
            //                 APPLICANT NAME: " . $row["applicant_name"] . "<br>
            //                 EMAIL ID: " . $row['email_id'] . "<br>
            //                 MOBILE NUMBER: " . $row['mobile_number'] . "<br>
            //                 AMOUNT PAID: " . $row['total_amount'] . "<br>
            //                 PAYMENT ID: " . $row["payment_id"] . "<br>
            //                 ORDER ID: " . $row['order_id'] . "<br>
            //                 PAYMENT STATUS: Paid
            //                 ";

            // $mail->send();

        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
header ('location: ../success.php');
} else {
header ('location: ../failed.php');
}
} else {
header ('location: ../failed.php');
}
} else {
header ('location: ../failed.php');
}

?>
