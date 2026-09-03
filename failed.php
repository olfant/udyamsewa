<?php
session_start();
include_once('./config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Failed - Register Udyam</title>
    <meta name="description" content="Your payment was unsuccessful. Please try again or contact support for assistance with your transaction.">
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Payment Failed - Register Udyam" />
      <meta property="og:description" content="Your payment was unsuccessful. Please try again or contact support for assistance with your transaction." />
      <meta property="og:url" content="https://udyamgov.com/failed.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Payment Failed - Register Udyam",
         "description": "Your payment was unsuccessful. Please try again or contact support for assistance with your transaction.",
         url": "https://udyamgov.com/failed.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Payment failed",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "https://udyamgov.com/failed.php"
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
            "name": "Payment Failed - Register Udyam",
            "serviceType": "Business Registration - Payment failed",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "https://udyamgov.com/failed.php"
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
            "additionalType": "https://udyamgov.com/failed.php"
         }
         }
      </script>
</head>
<body>

<?php include_once('components/header.php') ?>
<div class="container-fluid fcs-form-container">
<h1>Payment Failed</h1>
<p>We’re sorry, but your payment could not be processed at this time. This may be due to an issue with your payment method or a technical error.</p>
        <div class="row">
            <div class="col-sm-8 col-lg-6" style="margin: auto">
                <?php
                    $sql = "SELECT * FROM msme_form WHERE order_id = '".$_SESSION['orderId']."'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $id= $row['id'];
                    $authId = $row['authId'];
                    $mobile = $row['mobile_number'];
                    $formName = 'MSME Forms';
                    if($row['payment_status']!='Paid') {
                        ?>
                        <br>
                        <form>
                          <div class="alert alert-danger" role="alert">
                            <div class="row">
                                <div class="col-sm-9 ">
                                    Something Went Wrong ! PAYMENT FAILED 
                                </div>
                            </div>
                        </form>
                <?php
                    }
                ?>
            </div>
                </div>
        </div>
    </div>
<?php include_once('components/footer.php') ?>
</body>
</html>
