<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Olfant\CrmOlfantSdk\Database\Connection;

require 'vendor/autoload.php';

$web = $webNameUpperCase;
$web = "UDYAMSEWA.COM";
$crmConn = new Connection();
// to crm db
$connect = $crmConn->connection;
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

 $sql = "SELECT `id` FROM `forms` WHERE `form_id` = '".$_SESSION["form_id"]."' AND `web` = '$web' AND `status` = 'Unpaid'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $client_id = $row['id'];
  }
}

// for live
if($_SERVER['HTTP_HOST'] != 'localhost')
{

  $payment_link = 'http://udyamsewa.com/late-pay.php?id='.$client_id.'&table=msme_form';
      
  $invoiceBase = 'https://crm.olfant.com/api/fetch-invoice.php?id='.$client_id.'&web='.$web.'&limit=1&download=true'; 
} else {
    
  $payment_link = 'http://localhost/late-pay.php?id='.$client_id.'&table=msme_form';
      
  $invoiceBase = 'https://crm.olfant.com/api/fetch-invoice.php?id='.$client_id.'&web='.$web.'&limit=1&download=true'; 
}



// Mailer
$host_name = $webName;
$website_name = strtoupper($host_name);

$mail = new PHPMailer(true);
try
{
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = $mailHost;
    $mail->SMTPAuth = true;
    $mail->Username = $mailAddress;
    $mail->Password = $mailPassword;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom($mailAddress, 'MSME Registration');
    $mail->addAddress($_POST["email_id"]);
    $mail->isHTML(true);
    $mail->Subject = "Your " . $_POST['form_name'] . " Form Submitted Sucessfully";
    $mail->Body = '
    <section style="width:100%;font-family: \'Poppins\', sans-serif;">
    <div style="background-color:#5f6368;align-items: center;text-align:center; padding:20px 8px;color:#fff;border-bottom:10px solid #ddd;"><div style="font-size: 31px;font-weight: 700;">Form Submitted Sucessful For ' . $_POST['form_name'] . '</div></div>
    <br>
    <span>Dear ' . $_POST['applicant_name'] . ',</span><br><br>
    <span>Greeting of the Day</span><br><br>

    <div id="container">
    This mail is an acknowledgement of successful submission of your application, on our website. This mail does not confirm the
    payment status against the submitted application.
    </center>
    <br><br>
    If you have already made payment, then please sit back and relax, your order will be processed and acknowledgement of the same will be sent on your registered email address.
    <br><br>
    If you have not yet made the payment, processing of your application will not be done unless you make the payment. Click on the link below to make payment.
    <br>
    <a href="'.$payment_link.'&method=latepay" style="background: #1b61a5;border-radius: 8px;color:#ffffff;text-decoration:none;padding:10px;margin-top:20px;display:inline-flex;">Pay Here</a>
    <br>
    <br>
    (Save <a href="'.$invoiceBase.'&method=latepay" style="display:inline-flex;">Your Quotation</a> for future)
    <br>
    <br>
    </div>
    <span>Regards</span><br>
    <span>Team Processing</span><br>
    For Order Status: ' . $mailAddress . '<br><br>
    </section>
    ';
    $mail->send();
    // unlink($tempFilePath);
}
catch(Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
