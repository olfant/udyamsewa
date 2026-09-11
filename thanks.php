<?php
session_start();
include_once('./config.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You | Register Udyam</title>
    <meta name="description" content="Your submission has been received successfully. We appreciate your effort in reaching out to us">
    <link rel="canonical" href="<?php echo $baseUrl; ?>thanks.php" />
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/assets/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Thank You | Register Udyam" />
      <meta property="og:description" content="Your submission has been received successfully. We appreciate your effort in reaching out to us" />
      <meta property="og:url" content="<?php echo $baseUrl; ?>thanks.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Thank You | Register Udyam",
         "description": "Your submission has been received successfully. We appreciate your effort in reaching out to us",
         url": "<?php echo $baseUrl; ?>thanks.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Thank you",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "<?php echo $baseUrl; ?>thanks.php"
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
            "name": "MSME/Udyam Registration Service - Thank you",
            "serviceType": "Business Registration - Thank you",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "<?php echo $baseUrl; ?>thanks.php"
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
            "additionalType": "<?php echo $baseUrl; ?>thanks.php"
         }
         }
      </script>
</head>
<body>

<?php include_once('components/header.php') ?>
       <style>
    </style>
    <div class="container-fluid fcs-form-container">
        <div class="row">
            <div class="col-sm-8 col-lg-6" style="margin: auto">
                        <br>
                        <form>
                          <div class="alert alert-success" role="alert">
                             <img src="assets/image/msme-thank-you.png" >
                             <h1>Successfully Submited!</h1>
                           Successful Submission Of Your Enquiry Application, On Our Website.
                           </img>
                            </div>
            </div>
        </div>
    </div>
<?php include_once('components/footer.php') ?>
</body>
</html>
