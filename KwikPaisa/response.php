<?php 
session_start();
include_once ('../config.php');
include_once ('../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$orderId = $_POST['midorderid'];
$orderAmount = $_POST["txn_amount"];
$referenceId = $_POST["txn_id"];
$txStatus = $_POST["txStatus"];
$paymentMode = $_POST["mode"];
$txTime = $_POST["txn_time"];

if ($txStatus == 'SUCCESS')
{

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

        $mail->addAddress($mailAddress);
        $mail->isHTML(true);
        $mail->Subject = "Payment Received For " . $row["form_name"] . "";
        $mail->Body = "
                        APPLICANT NAME: " . $row["applicant_name"] . "<br>
                        EMAIL ID: " . $row['email_id'] . "<br>
                        MOBILE NUMBER: " . $row['mobile_number'] . "<br>
                        AMOUNT PAID: " . $row['total_amount'] . "<br>
                        PAYMENT ID: " . $row["payment_id"] . "<br>
                        ORDER ID: " . $row['order_id'] . "<br>
                        PAYMENT STATUS: Paid
                        ";

        $mail->send();

    }
    catch(Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header('location: ../success.php');
}
else
{
    echo 'Payment Failed';
}
?>

