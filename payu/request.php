<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
#remove below if you have latest version of php,it will not show warnings
error_reporting(E_ERROR | E_PARSE);

//This function is for dynamically generating callback url to be postd to payment gateway. Payment response will be
//posted back to this url. 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return CALLBACK_URL;
}

$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$firstname = $_POST['applicant_name'];
$email = $_POST['email_id'];
$productinfo = "MSME";
$udf1 = $_POST['mobile_number'];
$udf2 = $_POST["office_address"] ?? 'N/A';
$udf3 = $_POST["office_city"] ??'N/A';
$udf4 = $_POST["office_pincode"] ?? 'N/A';
$udf5 = 'India';



# Set params as follows
$params = array("txnid"=>$txnid,"amount"=>$product_price,"productinfo"=>$productinfo,"firstname"=>$firstname,"email"=>$email,"udf1"=>$udf1,"udf2"=>$udf2,"udf3"=>$udf3,"udf4"=>$udf4,"udf5"=>$udf5);

# you can generate payment hash as follows:
$payment_hash = $hash=hash('sha512',KEY.'|'.$txnid.'|'.$product_price.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'||||||'.SALT);
$sql_update_msme_form = 'UPDATE msme_form SET order_id = "'.$txnid.'" WHERE id = "'.$_SESSION['form_id'].'"';
$result_update_msme_form = $conn->query($sql_update_msme_form);
?>

<form action="<?php echo PAYU_ACTION_URL; ?>"  name="payuform" id="payment_form_submit" method="post">

  <input type="hidden" name="key" value="<?php echo KEY ?>" />
  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
  <input type="hidden" name="amount" value="<?php echo $product_price ?>" />
  <input type="hidden" name="firstname" value="<?php echo $firstname ?>" />
  <input type="hidden" name="email" value="<?php echo $email ?>"/>
  <input type="hidden" name="productinfo" value="<?php echo $productinfo ?>" />
  <input type="hidden" name="hash" value="<?php echo $payment_hash ?>"/>
  <input type="hidden" name="surl" value="<?php echo CALLBACK_URL?>" />   <!--Please change this parameter value with your success page absolute url like http://mywebsite.com/response.php. -->
  <input type="hidden" name="furl" value="<?php echo CALLBACK_URL?>" /><!--Please change this parameter value with your failure page absolute url like http://mywebsite.com/response.php. -->
  <input name="curl" input type= "hidden" value="<?php echo CALLBACK_URL?>" />
  <input name="udf5" input type= "hidden" value="<?php echo $udf5 ?>" />
</form>
<script type="text/javascript">
  document.getElementById("payment_form_submit").submit();	
</script>