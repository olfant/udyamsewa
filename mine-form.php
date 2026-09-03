<?php
require 'vendor/autoload.php';
use Olfant\CrmOlfantSdk\InfoClientCampaign;
  include('block-user.php');
  $id = $_REQUEST['id'];
  $table = $_REQUEST['table'];
 
        setcookie('token_function', 'BULK_DATA_CAMPN', time() + (86400 * 30), "/");
   
        $infoClientCampaign = new InfoClientCampaign;
        $infoClientCampaignData = $infoClientCampaign->info($id);



    ?>
    <?php include "./config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment | MSME - REGSISTRATION</title>
    <meta name="description" content="msme-registration portal PAYMENT">
    <!-- meta keyword	 -->
    <meta name="keyword" content="udyam certificate, udyog aadhar registration, udyog aadhar, msme certificate, aadhar udyog, 
    aadhar udyog registration, udyam certificate registration, udyog aadhar certificate, msme certificate registration, 
    msme online registration, aadhar udyam, udyam portal, udyog aadhar update, udyog aadhaar, msme udyam, msme udyog aadhar, 
    udyog aadhar registration online, apply for msme certificate, msme new registration, udyam online registration">
    <link rel="icon" href="./assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/checkout-form.css">
    <!-- Event snippet for CRM form conversion page --> <script src="https://crm.olfant.com/assets/js/crm-convertion.js" defer></script>
</head>
<body>
<div class="card mt-50 mb-50" style="height: fit-content;">
  <div class="ribbon check" style="--color: #41ca7f;">
  <div class="content">
    <svg width="24px" height="60px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
    </svg>
  </div>
</div>
<div class="card-title mx-auto">
<div class="row"> <div class="col-sm-2 d-flex"> <img src="/assets/img/msme-logo.svg" width="100" alt="msme logo" class="mx-auto"> </div> <div class="col-sm-10 d-flex text-center"> <div class="my-auto"> MSME / UDYAM REGISTRATION FEE PAYMENT </div> </div></div>
</div>
<div class="nav">
    <ul class="mx-auto">
        <li class="active"><a>Payment Page</a></li>
    </ul>
</div>
<form id="pay" action="submit.php" method="post">
  <span id="card-header">Payment For:</span>
    <div class="row row-1">
        <div class="col-2"><img class="img-fluid" src="/assets/img/card-logo.webp" /></div>
        <div class="col-10"> <input type="text" placeholder="MSME REGISTRATION FEE" disabled> </div>
    </div>
  </span>
   <span id="card-header">Your Details:</span>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Applicant name</span> </div>
        <div class="row row-2"> <input type="text" name="applicant_name" value="<?php echo $infoClientCampaignData->name; ?>" required> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Email id</span> </div>
        <div class="row row-2"> <input type="email" name="email_id" value="<?php echo $infoClientCampaignData->email; ?>" required> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Mobile Number</span> </div>
        <div class="row row-2"> <input type="tel" value="<?php echo $infoClientCampaignData->number; ?>" name="mobile_number" minlength="10" maxlength="10" required> </div>
    </div>
 <input type="hidden" name="form_type" value="MSME Registration">
 <input type="hidden" name="form_name" value="UDYAM Registration">
 <input type="hidden" name="form_id" value="udyam_online">
    <button class="btn d-flex mx-auto" type="submit"><b>Make Payment >> </b></button>
</form>
<img src="/assets/img/visa-master-icon.jpg" /></img>
</div>
</body>
</html>
<?php

?>
