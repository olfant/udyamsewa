<?php
session_start();
include_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Track order | Udyam Sewa - MSME Portal</title>
   <meta name="description" content="Check your Udyam/MSME Registration status online. Enter your payment or order details below to check real-time updates.">
   <meta name="keywords" content="Track Order, Udyam Registration Status, Order Status Udyam Registration, Track Udyam Application, Udyam Payment ID, Check Udyam Registration Progress, MSME Registration Order Tracking, Udyam Certificate Tracking, Order Status MSME Registration, Payment ID Tracking">
   <link rel="canonical" href="https://udyamgov.com/track-order.php" />
   <link rel="icon" href="https://udyamgov.com/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="./assets/css/main.css">
   <meta name="robots" content="index, follow">
   <meta name="theme-color" content="#385067">
   <meta property="og:title" content="Track order | Udyam Sewa - MSME Portal">
   <meta property="og:description" content="Check your Udyam/MSME Registration status online. Enter your payment or order details below to check real-time updates.">
   <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-udyam-registration.png"/>
   <meta property="og:url" content="https://udyamgov.com/track-order.php">
   <meta property="og:type" content="website">

   <script type="application/ld+json">
         {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Track order | Udyam Sewa - MSME Portal",
         "description": "Check your Udyam/MSME Registration status online. Enter your payment or order details below to check real-time updates.",
         "url": "https://udyamgov.com/track-order.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - udyamgov.com Private Consultancy",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "https://udyamgov.com/track-order.php"
            }
         },
         
         "sameAs": [
            "https://www.facebook.com/profile.php?id=61591439595616",
            "https://x.com/UdyamGov",
            "https://www.instagram.com/udyam_gov/"
         ],
         "mainEntity": {
            "@type": "Service",
            "name": "MSME/Udyam Service - udyamgov.com Private Consultancy",
            "serviceType": "Business Private Consultancy",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "https://udyamgov.com/track-order.php"
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
            "additionalType": "https://udyamgov.com/track-order.php"
         }
         }
   </script>
   <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement": [{
         "@type": "ListItem",
         "position": 1,
         "name": "Udyam Registration",
         "item": "https://udyamgov.com"
         },
         {
         "@type": "ListItem",
         "position": 2,
         "name": "Track Order",
         "item": "https://udyamgov.com/track-order.php"
         }]
      }
    </script>
    <style>
        .content-page-wrapper {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 15px;
            color: #3d4f61;
            font-family: 'Inter', sans-serif;
            line-height: 1.8;
            font-size: 16px;
        }
        .content-page-header {
            text-align: center;
            margin-bottom: 50px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }
        .content-page-header h1 {
            font-size: 42px;
            font-weight: 800;
            color: #0B1E59;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }
        .content-page-header p.subtitle {
            font-size: 18px;
            color: #64748b;
            font-weight: 500;
            max-width: 600px;
            margin: 0 auto;
        }
        .content-page-wrapper h2 {
            font-size: 24px;
            font-weight: 700;
            color: #2a9d46;
            margin-top: 40px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f5f9;
        }
        .content-page-wrapper h3 {
            font-size: 20px;
            font-weight: 600;
            color: #0B1E59;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .content-page-wrapper p {
            margin-bottom: 20px;
        }
        .content-page-wrapper ol, .content-page-wrapper ul {
            margin-bottom: 25px;
            padding-left: 25px;
        }
        .content-page-wrapper ol li, .content-page-wrapper ul li {
            margin-bottom: 10px;
            position: relative;
        }
        .content-page-wrapper ul li::marker {
            color: #ff7f00;
            font-weight: bold;
        }
        .content-page-wrapper ol li::marker {
            color: #ff7f00;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php include_once('components/header.php') ?>
<!--content -->
<div class="container content-page-wrapper mb-5">
    <div class="content-page-header">
        <h1 class="font-weight-bold">Track your order</h1>
        <p class="subtitle font-weight-bold">Track the status of your UDYAM/MSME registration. Enter your Payment or Order details in the form below to get the current updates on your registration process</p>
    </div>

    <form action="/track-order-details.php" method="POST">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 col-md-10">
                <div class="card premium-card">
                    <div class="card-header premium-header bg-green text-center">
                        <h2 style="color:#fff; font-size: 22px; font-weight: bold; margin: 0;">Track Order</h2>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-group mb-4">
                            <label for="payment_id" style="font-weight: 600; color: #0B1E59;">Enter Payment ID Or Order Id <span class="text-danger">(*)</span></label>
                            <p class="form-help text-muted small mb-2">Payment ID Or Order ID As On Payment Success Mail</p>
                            <input type="text" maxlength="40" name="payment_id" class="form-control" id="payment_id" placeholder="Payment ID / Order ID" required="">
                        </div>
                        <div class="text-center mt-4">
                            <input type="submit" class="btn fcs-submit-button" id="formsubmit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <section class="mt-5">
        <article>
            <h2>Ways that You can Track Your Order</h2>
            <p>To keep track of your order, do these easy steps:</p>
            <ul>
                <li>In the area below, type your Order ID or Payment ID.</li>
                <li>Click "Submit" to see the status of your order.</li>
            </ul>
            <p>
                Once your information has been submitted, the order's current status will be shown. 
                If there are any problems or hold-ups with your registration, our team members will keep you informed.
            </p>

            <p><strong>Still have questions?</strong> Visit our <a href="/enquiry.php" style="color: var(--theme-orange); font-weight: 600;">Enquiry Page</a> for more help.</p>
        </article>
    </section>
</div>


<?php include_once('components/footer.php') ?>
</body>
</html>
