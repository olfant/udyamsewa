<?php
session_start();
include "./config.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Succcess - Register Udyam</title>
    <meta name="description" content="Your payment was successfully paid. Please check your email for the payment receipt">
    <link rel="canonical" href="https://udyamgov.com/success.php" />
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/assets/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Payment Succcess - Register Udyam" />
      <meta property="og:description" content="Your payment was successfully paid. Please check your email for the payment receipt." />
      <meta property="og:url" content="https://udyamgov.com/success.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Payment Succcess - Register Udyam",
         "description": "Your payment was successfully paid. Please check your email for the payment receipt.",
         url": "https://udyamgov.com/success.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Payment success",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "https://udyamgov.com/success.php"
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
            "name": "Payment success - Register Udyam",
            "serviceType": "Business Registration - Payment success",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "https://udyamgov.com/success.php"
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
            "additionalType": "https://udyamgov.com/success.php"
         }
         }
      </script>
</head>
<body>

<?php include_once ('components/header.php') ?>


<div class="container-fluid fcs-form-container">
        <div class="row">
            <div class="col-sm-8 col-lg-6" style="margin: auto">
                    <?php
                    $sql = "SELECT * FROM msme_form WHERE order_id = '" . $_SESSION['orderId'] . "'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $id = $row['id'];
                    $authId = $row['authId'];
                    $mobile = $row['mobile_number'];
                    $formName = 'MSME Forms';
                    if ($row['payment_status'] != 'Paid')
                    {
                        echo "<script>setTimeout(\"location.href = './';\",100);</script>";
                    }
                else
                {
                ?>
                        <script>
                            setTimeout(function() {
                                trackConversionEvent('UDYAMGOV.COM',<?php echo $id;?>) 
                            }, 100);
                        </script>
                        <br>
                        <section>
                            <h1>Payment Successful</h1>
                            <p class="font-weight-bold">Thank you for your purchase! Your payment has been successfully processed.</p>
                        </section>
                        <form>
                          <div class="alert alert-secondary" role="alert">
                            <div class="row">
                            <div class="col-sm-9">
                        <img src="assets/image/msme-thank-you.png" class="mr-4">PAYMENT SUCCESSFUL
                            </div>
                        </div>
                            </div>
                            <table class="table table-bordered" id="fcs-fee-table">
                                <thead style="color:var(--hightlight-color)!important;" class="text-brown">
                                    <tr>
                                        <th scope="col">ORDER DETAILS</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>APPLICANT NAME</td>
                                        <td><?php echo $row['applicant_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL ID</td>
                                        <td><?php echo $row['email_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>MOBILE NUMBER</td>
                                        <td><?php echo $row['mobile_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>AMOUNT PAID</td>
                                        <td><?php echo $row['total_amount']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>PAYMENT ID</td>
                                        <td><?php echo $row['payment_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ORDER ID</td>
                                        <td><?php echo $row['order_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>PAYMENT STATUS</td>
                                        <td><?php echo $row['payment_status']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php include_once ('components/footer.php') ?>
</body>
</html>
