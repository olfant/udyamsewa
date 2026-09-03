<?php 
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
//Fetch Value from Form Submitted
$custname=$_POST['applicant_name'];
$custemail= $_POST['email_id'];
$custmobile= $_POST['mobile_number'];
$custaddressline1= $_POST["office_address"] ?? 'N/A';
$custaddressline2= 'N/A';
$custaddresscity= $_POST["office_city"] ??'N/A';
$custaddressstate= $_POST["office_state"] ?? 'N/A';
$custaddresscountry='India';
$custaddresspostalcode= $_POST["office_pincode"] ?? 'N/A';
$orderid=$orderId;
$ordervalue=$product_price;
$paramList = array();
$paramList["KP_ENVIRONMENT"] = KP_ENVIRONMENT;
$paramList["KPMID"] = KPMID;
$paramList["KPMIDKEY"] = KPMIDKEY;
$paramList["TXN_CURRENCY"] = TXN_CURRENCY;
///Create Customer From API Pass Customer Parameters to https://pispp.kwikpaisa.com/API/v1/CreateCustomer
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pispp.kwikpaisa.com/API/v1/CreateCustomer',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('KP_ENVIRONMENT' => $paramList["KP_ENVIRONMENT"],'KPMID' => $paramList["KPMID"],'KPMIDKEY' => $paramList["KPMIDKEY"],'CUST_NAME' => $custname,'CUST_EMAIL' => $custemail,'CUST_MOBILE' => $custmobile,'CUST_ADDRESS_LINE1' => $custaddressline1,'CUST_ADDRESS_LINE2' => $custaddressline2,'CUST_ADDRESS_CITY' => $custaddresscity,'CUST_ADDRESS_STATE' => $custaddressstate,'CUST_ADDRESS_COUNTRY' => $custaddresscountry,'CUST_ADDRESS_POSTAL_CODE' => $custaddresspostalcode),
));
$response = curl_exec($curl);
curl_close($curl);
$response;
//Make Variable of Customer ID Received From API Call
$customerId=json_decode(($response),true);
$CustomerAPIStatus=$customerId["status"];
if ($CustomerAPIStatus == 'success') {$customerIdvalue=$customerId["CUST_KP_ID"];} else {echo $response; exit();}


///Now Create Order ID and Payment Token By Passing Parameters To https://pispp.kwikpaisa.com/API/v1/Order
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pispp.kwikpaisa.com/API/v1/Order',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('KP_ENVIRONMENT' => $paramList["KP_ENVIRONMENT"],'KPMID' => $paramList["KPMID"],'KPMIDKEY' => $paramList["KPMIDKEY"],'CUST_KP_ID' => $customerIdvalue,'TXN_CURRENCY' => $paramList["TXN_CURRENCY"],'TXN_AMOUNT' => $ordervalue,'ORDER_ID' => $orderid),
));
$responseOrder = curl_exec($curl);
curl_close($curl);
//Make Variable of Customer ID Received From API Call
$OrderDetails=json_decode(($responseOrder),true);
$OrderAPIStatus=$OrderDetails["status"]; 
if ($OrderAPIStatus == 'success') 
{$KP_Txn_OrderID=$OrderDetails["KP_Txn_OrderID"];
$KP_Txn_Signature=$OrderDetails["KP_Txn_Signature"];
$KP_Txn_Token=$OrderDetails["KP_Txn_Token"];} else {echo $responseOrder; exit();}

$sql_update_msme_form = 'UPDATE msme_form SET order_id = "'.$orderId.'" WHERE id = "'.$_SESSION['form_id'].'"';
$result_update_msme_form = $conn->query($sql_update_msme_form);
?>
<title>Just Passing Main paramList to KP Gateway Log</title><body>
<center><h1>Please do not refresh and close this page/window...</h1></center>
<form id="paymentform" method="post" action="<?php echo KP_TXN_URL ?>"  name="<?php if ($OrderAPIStatus || $CustomerAPIStatus == 'success') {echo 'f1';} else {}?>">
    <input type="hidden" name="KPMID" value="<?php echo KPMID ?>"/>
    <input type="hidden" name="CUST_KP_ID" value="<?php echo $customerIdvalue ?>"/>
    <input type="hidden" name="KP_Txn_OrderID" value="<?php echo $KP_Txn_OrderID ?>"/>
    <input type="hidden" name="KP_Txn_Signature" value="<?php echo $KP_Txn_Signature ?>"/>
    <input type="hidden" name="KP_Txn_Token" value="<?php echo $KP_Txn_Token ?>"/>
    <input type="hidden" name="KP_Return_URL" value="<?php echo CALLBACK_URL ?>"/>
    <script type="text/javascript">document.f1.submit();</script>
</form>