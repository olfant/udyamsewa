<?php
session_start();
include_once ('../config.php');
include_once ('../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Olfant\CrmOlfantSdk\SuccessPaidClient;
$postdata = $_POST;
$msg = '';
$salt = SALT;

if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	$udf5				=   $postdata['udf5'];	
	$status				= 	$postdata['status'];
	$resphash			= 	$postdata['hash'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString)); //hash without additionalcharges
	
	//check for presence of additionalcharges parameter in response.
	$additionalCharges  = 	"";
	
	If (isset($postdata["additionalCharges"])) {
       $additionalCharges=$postdata["additionalCharges"];
	   //hash with additionalcharges
	   $CalcHashString 	= 	strtolower(hash('sha512', $additionalCharges.'|'.$salt.'|'.$status.'|'.$reverseKeyString));
	}
	//Comapre status and hash. Hash verification is mandatory.
	if ($status == 'success'  && $resphash == $CalcHashString) {
		$msg = "Transaction Successful, Hash Verified...<br />";
		//Do success order processing here...
		//Additional step - Use verify payment api to double check payment.
		if(verifyPayment($key,$salt,$txnid,$status)){
			$sql = "
			UPDATE msme_form
			SET payment_id = '" . $txnid . "',
			payment_status = 'Paid'
			WHERE order_id = '" . $txnid . "'
			";
			$result = $conn->query($sql);
			$_SESSION['orderId'] = $txnid;

			$sql = "SELECT * FROM msme_form WHERE order_id = '" . $_SESSION['orderId'] . "'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();

			$successPaidClient = new SuccessPaidClient;
			$successPaidClient->formToPaid($row['id'], $_SESSION['orderId'], $row["payment_id"],  $row['total_amount'] + 0,  $salt);

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
				//cc
				$mail->AddCC('souravmaity091@gmail.com');
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


			$auth_id = "db32d31bebf0423d8875f7b37dfe2065";
			$whatsapp_msg = 'Dear '.strtoupper($row['applicant_name']).',

			Your '.$row['form_name'].' Application and its payment is Successfully Completed

			Your order details are as follows:
			
			APPLICANT NAME: '.strtoupper($row['applicant_name']).'
			EMAIL ID: '.strtoupper($row['email_id']).'
			MOBILE NUMBER: '.strtoupper($row['mobile_number']).'
			AMOUNT PAID: '.strtoupper($row['total_amount']).'
			PAYMENT ID: '.strtoupper($row['payment_id']).'
			ORDER ID: '.strtoupper($row['order_id']).'
			PAYMENT STATUS: PAID
			
			This message is reference to MSME/ Udyog Aadhar / Udyam Registration. Your '.$row["form_name"] .' is under prosses. If you have any futher enquiry please give a messsage.
			
			';

			$curl_handle_whatsapp = curl_init();
            $url_whatsapp_api = "https://messagesapi.co.in/chat/sendMessageFile?id=".urlencode($auth_id)."&phone=".urlencode('91'.$row['mobile_number'])."&message=".urlencode($whatsapp_msg)."";
            curl_setopt($curl_handle_whatsapp, CURLOPT_URL, $url_whatsapp_api);
            curl_setopt($curl_handle_whatsapp, CURLOPT_RETURNTRANSFER, true);
            $curl_data_whatsapp = curl_exec($curl_handle_whatsapp);
            curl_close($curl_handle_whatsapp);

			header('location: ../success.php');
		}
		else
			$msg = "Transaction Successful, Hash Verified...Payment Verification failed...";
	}
	else {
		//tampered or failed
		$msg = "Payment failed for Hash not verified...";
	} 
}
else {
 print_r($_POST); exit;
 header('location: ../failure.php');
}


//This function is used to double check payment
function verifyPayment($key,$salt,$txnid,$status)
{
	$command = "verify_payment"; //mandatory parameter
	$hash_str = $key  . '|' . $command . '|' . $txnid . '|' . $salt ;
	$hash = strtolower(hash('sha512', $hash_str)); //generate hash for verify payment request
    $r = array('key' => $key , 'hash' =>$hash , 'var1' => $txnid, 'command' => $command);
    $qs= http_build_query($r);
	$wsUrl = WSURL;
	
	try 
	{		
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $wsUrl);
		curl_setopt($c, CURLOPT_POST, 1);
		curl_setopt($c, CURLOPT_POSTFIELDS, $qs);
		curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_SSLVERSION, 6); //TLS 1.2 mandatory
		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		$o = curl_exec($c);
		if (curl_errno($c)) {
			$sad = curl_error($c);
			throw new Exception($sad);
		}
		curl_close($c);
		$response = json_decode($o,true);
		
		if(isset($response['status']))
		{
			// response is in Json format. Use the transaction_detailspart for status
			$response = $response['transaction_details'];
			$response = $response[$txnid];
			
			if($response['status'] == $status) //payment response status and verify status matched
				return true;
			else
				return false;
		}
		else {
			return false;
		}
	}
	catch (Exception $e){
		return false;	
	}
}
?>