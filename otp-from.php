<?php
require 'vendor/autoload.php';

use Olfant\CrmOlfantSdk\OTP;
use Olfant\CrmOlfantSdk\Database\Connection;

$otp_req = false;
$otp = new OTP;
include "./config.php";

if ((isset($_GET['req'])) && ($_GET['req'] == 'true')) {
  $otp_req = true;
  $otp->OTP('', $_POST['form_id']);
}

if (isset($_GET['id'])) {
  $crmConn = new Connection();
  // to crm db
  $connect = $crmConn->connection;
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  $id = $_GET['id'];
  $sql = "SELECT `number` FROM `forms` WHERE `id` = '$id'";
  $result = $connect->query($sql);
  if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
      $form_name = $row['form_name'];
      $name = $row['name'];
      $number = $row['number'];
      $email = $row['email'];
      $price = $row['price'];
      $form_id = $row['form_id'];
    }
  } else {
    die("error 404");
  }
}

//REquested
if ((isset($_POST['req_otp'])) && (isset($_POST['form_id']))) {
  if ($otp->OTP('REQUEST', $_POST['form_id'])) {

    header('Location: otp-from.php?id=' . $_POST['form_id'] . '&req=true');
  }
}
//submited otp
if ((isset($_POST['otp'])) && (isset($_POST['form_id']))) {
  if ($otp->OTP($_POST['otp'], $_POST['form_id'])) {

    header('Location: otp-from-submited.php');
  }
}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Enter OTP for Verification</title>
  <meta name="description" content="Enter the one-time password (OTP) sent to your mobile number or email to verify your identity and continue.">
  <meta name="keywords" content="OTP Submitted" />
  <link rel="canonical" href="<?php echo $baseUrl; ?>otp-from.php" />
  <link rel="icon" href="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <style media="screen">
    @media (max-width: 480px) {
      .rescon {
        max-width: 100% !important;
      }

    }
  </style>
  <meta name="author" content="UdyamGov">
  <meta name="robots" content="noindex, nofollow">
  <meta name="theme-color" content="#385067">
  <meta property="og:title" content="Enter OTP for Verification" />
  <meta property="og:description" content="Enter the one-time password (OTP) sent to your mobile number or email to verify your identity and continue." />
  <meta property="og:url" content="<?php echo $baseUrl; ?>otp-from.php" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" />
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Enter OTP for Verification",
      "description": "Enter the one-time password (OTP) sent to your mobile number or email to verify your identity and continue.",
      url ": "
      https: //udyamsewa.com/otp-from.php", 
        "potentialAction": {
          "@type": "Action",
          "name": "MSME/Udyam/Udyog Aadhaar - Verification",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "<?php echo $baseUrl; ?>otp-from.php"
          }
        },

      "sameAs": [
        "https://www.facebook.com/profile.php?id=61571904965348",
        "https://x.com/UdyamGov",
        "https://www.instagram.com/udyamgov.offical/",
        "https://www.youtube.com/@UdyamGov"
      ],
      "mainEntity": {
        "@type": "Service",
        "name": "MSME/Udyam Registration Service - Verification",
        "serviceType": "Business Registration - Verification",
        "provider": {
          "@type": "Organization",
          "name": "UdyamGov",
          "url": "<?php echo $baseUrl; ?>otp-from.php"
        },
        "areaServed": {
          "@type": "Country",
          "name": "India"
        },
        "audience": {
          "@type": "Audience",
          "audienceType": "Small Business Owners",
          "geographicArea": {
            "@type": "AdministrativeArea",
            "name": "India"
          }
        },
        "additionalType": "<?php echo $baseUrl; ?>otp-from.php"
      }
    }
  </script>
</head>

<body>

  <?php include_once('components/header.php') ?>
  <div class="container">

    <p></p>
    <p></p>

    <div class="container p-0 rescon" style=" max-width: 32.2222222%;     box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2),0 5px 10px 0 rgba(0,0,0,0.2) !important;">
      <h5 class="fchd text-center text-white" style="background: #75c496;    position: relative;  width: 100%;  padding-right: 0 !important;padding-left: 0 !important;padding-top: 10px;padding-bottom: 10px;"><?php if ($otp_req) { ?>SUBMIT VERIFICATION CODE<?php } else { ?> UDYAM VERIFICATION <?php } ?></h5>
      <?php if ($otp_req) { ?>
        <form action="" id="otpForm" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="" style="    margin-bottom: 25px;">
        <?php } else { ?>
          <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="" style="    margin-bottom: 25px;">
          <?php } ?>
          <br>
          <div class="form-group col-lg-12 txt">
            <?php if ($otp_req) { ?>
              <label>Enter the received verification code and submit <span class="required">*</span> </label>
            <?php } ?>
            <?php if (!$otp_req) { ?>
              <p style="font-size: 14px;color: #555;">A verification code will be sent to your registered mobile number or e-mail ID.</p>
              <input type="hidden" name="req_otp" value="<?php echo $number; ?>" class="form-control" required="">
            <?php } else { ?>
              <input type="tel" id="otp" name="otp" value="" class="form-control" required minlength="6" maxlength="6" pattern="[0-9]{6}" oninput="allowOnlyNumbers(this)" placeholder="Enter the correct 6-digit verification code">
            <?php } ?>
            <!-- Error message -->
            <small id="otpError" style="color:red;display:none;">
              Please enter a correct 6-digit Verification Code.
            </small>
          </div>
          <input type="hidden" name="form_id" value="<?php echo $_GET['id']; ?>" class="form-control" required="">
          <button type="submit" class="btn btn-green m-2 mb-4" style="background-color:#225643;color:#fff;transition: background-color 0.3s ease-in!important;" name="submit"><?php if ($otp_req) { ?> SUBMIT<?php } else { ?>GET VERIFICATION CODE<?php } ?></button>
          </form>
    </div>
  </div>

    <script>
    const form = document.getElementById('otpForm');
    const otpInput = document.getElementById('otp');
    const otpError = document.getElementById('otpError');

    // allow only numbers while typing
    otpInput.addEventListener('input', function() {
      this.value = this.value.replace(/[^0-9]/g, '');
      otpError.style.display = 'none';
    });

    // validate on submit
    form.addEventListener('submit', function(e) {
      if (!/^[0-9]{6}$/.test(otpInput.value)) {
        e.preventDefault();
        otpError.style.display = 'block'; // show red message
        otpInput.focus();
      }
    });
  </script>
  <?php include_once('components/footer.php') ?>
</body>

</html>