<?php
include_once ('vendor/autoload.php');

use Olfant\CrmOlfantSdk\Database\Connection;        
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


  $id = $_REQUEST['id'];
  $table = $_REQUEST['table'];
  $web = "UDYAMSEWA.COM";
  $crmConn = new Connection();
  // to crm db
  $connect =  $crmConn->connection;
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  
  $sql = "SELECT * FROM `forms` WHERE `id` = '$id' AND `web` = '$web'";
  $result = $connect->query($sql);
  if ($result->num_rows == 1) {
    while($row = $result->fetch_assoc()) {
      $form_name = $row['form_name']; $name = $row['name']; $number = $row['number']; $email = $row['email']; $price = $row['price']; $form_id = $row['form_id'];
    }
  } else {
    die("error 404");
  }
  require_once("config.php");
    if((isset($_GET['id']))&&(isset($_GET['table']))) {

    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Additional Document | MSME - REGSISTRATION</title>
    <link rel="icon" href="./assets/img/favicon-msme-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/main.css">
    <meta name="description" content="Submit your additional documents for verification. Please upload the required files to complete your registration or application.">
    <meta name="keywords" content="Additional Document - MSME/Udyam" />
    <link type="text/css" rel="stylesheet" href="/assets/css/checkout-form.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="additional Document | MSME - REGISTRATION" />
      <meta property="og:description" content="Submit your additional documents for verification. Please upload the required files to complete your registration or application." />
      <meta property="og:url" content="<?php echo $baseUrl; ?>additional-document.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "additional Document | MSME - REGISTRATION",
         "description": "Submit your additional documents for verification. Please upload the required files to complete your registration or application.",
         url": "<?php echo $baseUrl; ?>additional-document.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Additional Document",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "<?php echo $baseUrl; ?>additional-document.php"
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
            "name": "MSME/Udyam Registration Service - Additional Document",
            "serviceType": "Business Registration - Additional Documentnt",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "<?php echo $baseUrl; ?>additional-document.php"
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
            "additionalType": "<?php echo $baseUrl; ?>additional-document.php"
         }
         }
      </script>
</head>
<body>
<div class="card mt-50 mb-50" style="height: fit-content;">
<div class="card-title mx-auto"> 
<div class="row"> <div class="col-sm-2 d-flex"> <img src="/assets/image/register-udyam-logo.svg" alt="Udyam Registration Portal Logo"  width="80px" alt="msme logo" class="mx-auto"> </div> <div class="col-sm-10 d-flex text-center"> <div class="my-auto"> MSME / UDYAM REGISTRATION DOCUMENT UPLOAD </div> </div></div>
</div>
<div class="nav">
    <ul class="mx-auto">
        <li class="active"><a><h1>Additional Document</h1></a></li>
    </ul>
</div>
<form id="pay" action="additional-document.php" method="post"  enctype="multipart/form-data">
  <span id="card-header">Upload Document:</span>
  </span>
   <span id="card-header">Your Details:</span>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Applicant name</span> </div>
        <div class="row row-2"> <input type="text" name="applicant_name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>" readonly> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Email id</span> </div>
        <div class="row row-2"> <input type="email" name="email_id" value="<?php echo $email; ?>"  placeholder="<?php echo $email; ?>" readonly> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Mobile Number</span> </div>
        <div class="row row-2"> <input type="tel"  name="number" value="<?php echo $number; ?>"  placeholder="<?php echo $number; ?>" readonly> </div>
    </div>

    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Aadhar Card front - Upload <span class="text-success">( optional )</span> </div>
        <div class="row row-2"> <input type="file" name="upload_aadhaar_card_back" placeholder="Attact File (eg. Adhaar, PAN)" > </div>
    </div>

    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Aadhar Card back - Upload <span class="text-success">( optional )</span> </div>
        <div class="row row-2"> <input type="file" name="upload_aadhaar_card_front1" placeholder="Attact File (eg. Adhaar, PAN)" > </div>
    </div>

    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">PAN Card - Upload <span class="text-success">( optional )</span> </div>
        <div class="row row-2"> <input type="file" name="upload_pan_card_front" placeholder="Attact File (eg. Adhaar, PAN)" > </div>
    </div>
    <input name="id" type="hidden" value="<?php echo $_GET['id'];  ?>" >
     <input name="table" type="hidden" value="<?php echo $_GET['table'];  ?>" >
    <button class="btn d-flex mx-auto  btn-primary b-0 fcs-submit-button" style="background: var(--base-color);
    border-radius: 0px !important; border:none" type="submit">
        Submit
    </button>
</form>
</div>
    <!-- <form  >

         <input id="submit" name="submit" type="submit" value="submit" style="display:none;">
    </form> -->
    <!-- <script>
         document.getElementById("submit").click();
    </script> -->
</body>
</html>

    <?php
    exit;}

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        date_default_timezone_set('Asia/Kolkata');
        $date=date('d-m-Y H:i:s');
        
        $_SESSION['table_id'] = $table;
        $_SESSION["form_id"] = $form_id;
        
        if(
            (isset($_FILES["upload_aadhaar_card_back"]["name"])&&($_FILES["upload_aadhaar_card_back"]["name"]!=''))&&
            (isset($_FILES["upload_aadhaar_card_back"]["tmp_name"])&&($_FILES["upload_aadhaar_card_back"]["tmp_name"]!=''))
        ){
        
            $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
            "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;
        
            $upload_aadhaar_card_back             = urlencode($_FILES["upload_aadhaar_card_back"]["name"]);
            $_SESSION['upload_aadhaar_card_back'] = rand().'_'.$upload_aadhaar_card_back;
            $upload_aadhaar_card_back_tmp         = $_FILES["upload_aadhaar_card_back"]["tmp_name"];
            move_uploaded_file($upload_aadhaar_card_back_tmp, "uploads/msme/".$_SESSION['upload_aadhaar_card_back']."");
        
            $sql = '
            UPDATE msme_form set
            upload_aadhaar_card_back =      "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_back"].'"
        
        
            WHERE id = "'.$form_id.'"';
        
            if(!$result = $conn->query($sql)){
                die('There was an error running the query [' . $conn->error . ']');
            }
        }   

        if(
            (isset($_FILES["upload_aadhaar_card_front1"]["name"])&&($_FILES["upload_aadhaar_card_front1"]["name"]!=''))&&
            (isset($_FILES["upload_aadhaar_card_front1"]["tmp_name"])&&($_FILES["upload_aadhaar_card_front1"]["tmp_name"]!=''))
        ){
        
            $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
            "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;
        
            $upload_aadhaar_card_front1             = urlencode($_FILES["upload_aadhaar_card_front1"]["name"]);
            $_SESSION['upload_aadhaar_card_front1'] = rand().'_'.$upload_aadhaar_card_front1;
            $upload_aadhaar_card_front1_tmp         = $_FILES["upload_aadhaar_card_front1"]["tmp_name"];
            move_uploaded_file($upload_aadhaar_card_front1_tmp, "uploads/msme/".$_SESSION['upload_aadhaar_card_front1']."");
        
            $sql = '
            UPDATE msme_form set
            upload_aadhaar_card_front =      "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_front1"].'"
        
        
            WHERE id = "'.$form_id.'"';
        
            if(!$result = $conn->query($sql)){
                die('There was an error running the query [' . $conn->error . ']');
            }
        }   

        if(
            (isset($_FILES["upload_pan_card_front"]["name"])&&($_FILES["upload_pan_card_front"]["name"]!=''))&&
            (isset($_FILES["upload_pan_card_front"]["tmp_name"])&&($_FILES["upload_pan_card_front"]["tmp_name"]!=''))
        ){
        
            $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
            "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;
        
            $upload_pan_card_front             = urlencode($_FILES["upload_pan_card_front"]["name"]);
            $_SESSION['upload_pan_card_front'] = rand().'_'.$upload_pan_card_front;
            $upload_pan_card_front_tmp         = $_FILES["upload_pan_card_front"]["tmp_name"];
            move_uploaded_file($upload_pan_card_front_tmp, "uploads/msme/".$_SESSION['upload_pan_card_front']."");
        
            $sql = '
            UPDATE msme_form set
            upload_pan_card_front =      "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_pan_card_front"].'"
        
        
            WHERE id = "'.$form_id.'"';
        
            if(!$result = $conn->query($sql)){
                die('There was an error running the query [' . $conn->error . ']');
            }
        }   

            
                    
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@'.$webName.'';
        $mail->Password   = 'skill@0Rs';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom('info@'.$webName.'', "$webName");
        $mail->addAddress("".$_POST["email_id"]."");
        $mail->isHTML(true);
        $mail->Subject = "Your Additional Document Submitted Successfully";
        $mail->Body    = "
                        Dear <strong>".$_POST["applicant_name"]."</strong>,
                        <br><br>
                        Thank you for submitting your additional document on our website.
                        <br><br>
                        This mail is an acknowledgement of successful submission of your additional document, on our website.
                        <br><br>
                        Regards,<br>
                        Team Processing,<br>
                        For Order Status: order@".$webName."
                        ";

        $mail->send();

        $mail->ClearAllRecipients();

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Submission </title>
            <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
            <meta name="description" content="Submit your additional documents for verification. Please upload the required files to complete your registration or application.">
            <meta name="keywords" content="Additional Document - MSME/Udyam" />
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
            <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#051547">
      <meta property="og:title" content="additional Document | MSME - REGISTRATION" />
      <meta property="og:description" content="Submit your additional documents for verification. Please upload the required files to complete your registration or application." />
      <meta property="og:url" content="<?php echo $baseUrl; ?>additional-document.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-udyam-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "additional Document | MSME - REGISTRATION",
         "description": "Submit your additional documents for verification. Please upload the required files to complete your registration or application.",
         url": "<?php echo $baseUrl; ?>additional-document.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Additional Document",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "<?php echo $baseUrl; ?>additional-document.php"
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
            "name": "MSME/Udyam Registration Service - Additional Document",
            "serviceType": "Business Registration - Additional Documentnt",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "<?php echo $baseUrl; ?>additional-document.php"
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
            "additionalType": "<?php echo $baseUrl; ?>additional-document.php"
         }
         }
      </script>
        </head>
        <body>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Form Submitted</h4>
                        </div>
                        <div class="card-body text-center">
                            <div class="alert alert-success" role="alert">
                                Your form has been successfully submitted!
                            </div>
                            <a href="/" class="btn btn-dark">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </body>
        </html>
        <?php
        
        
    }

?>
