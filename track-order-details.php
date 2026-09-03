<?php
include_once ('vendor/autoload.php');
use Olfant\CrmOlfantSdk\Database\Connection;
session_start();
include "./config.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Status - Udyam Registration</title>
    <meta name="description" content="Check the status of your Udyam Registration application online. Easily track your application progress and stay updated with real-time status updates on UdyamGov.com.">
    <link rel="canonical" href="https://udyamgov.com/track-order-details.php" />
    <meta name="keywords" content="Application Status, Udyam Registration Status, Check Udyam Application Status, Track Udyam Registration, MSME Application Status, Udyam Status Online, Registration Progress, Application Tracking, Udyam Certificate Status, MSME Registration Update">
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
<meta name="theme-color" content="#385067">
         <meta property="og:title" content="Application Status - Udyam Registration">
         <meta property="og:description" content="Check the status of your Udyam Registration application online. Easily track your application progress and stay updated with real-time status updates on UdyamGov.com.">
         <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png" />
         <meta property="og:url" content="https://udyamgov.com/track-order-details.php">
         <meta property="og:type" content="website">
         <script type="application/ld+json">
         {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Application Status - Udyam Registration",
         "description": "Check the status of your Udyam Registration application online. Easily track your application progress and stay updated with real-time status updates on UdyamGov.com.",
         "url": "https://udyamgov.com/track-order-details.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - udyamgov.com Private Consultancy",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "https://udyamgov.com/track-order-details.php"
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
            "name": "MSME/Udyam Service - udyamgov.com Private Consultancy",
            "serviceType": "Business Private Consultancy",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "https://udyamgov.com/track-order-details.php"
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
            "additionalType": "https://udyamgov.com/track-order-details.php"
         }
         }
      </script>
</head>
<body>

<?php include_once('components/header.php') ?>

<div class="container-fluid fcs-form-container">
        <div class="row">
            <div class="col-sm-8 col-lg-6" style="margin: auto">
                <?php
                    $web = "UDYAMGOV.COM";
                    $crmConn = new Connection();
                    // to crm db
                    $connect = $crmConn->connection;
                    if ($connect->connect_error) {
                      die("Connection failed: " . $connect->connect_error);
                    }
                    
                    $sql = "SELECT * FROM `forms` WHERE ( `payment_id` = '".$_POST['payment_id']."' OR `order_id` = '".$_POST['payment_id']."' ) AND `web` = '$web' AND `status` = 'Paid'";
                    $result = $connect->query($sql);
                    if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    
                    // $sql_editable = "SELECT * FROM `editable_link` WHERE `pannel_form_id` = '".$row['id']."' LIMIT 1";
                    // $result_editable = $connect->query($sql_editable);
                    // if ($result_editable->num_rows == 1) {
                    // $row_editable = $result_editable->fetch_assoc();
                    // $editable_link = $row_editable['full_link'];
                    // }else{
                    //     $editable_link = '/';
                    // }
                    
                    }
                    if($row['status']!='Paid') {
                        print("<div class=' mt-4 alert alert-danger'><div class='text-danger'>Wrong Payment Id / Order Id</div></div>"); 
                    }else{
                        ?>
                        <br>
                        <form>
                            <table class="table table-bordered" id="fcs-fee-table">
                                <thead class="text-success">
                                    <tr>
                                        <th scope="col">ORDER DETAILS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>APPLICANT NAME</td>
                                        <td><?php echo $row['name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL ID</td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>MOBILE NUMBER</td>
                                        <td><?php echo $row['number']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>SERVICE NAME</td>
                                        <td><?php echo $row['form_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>AMOUNT PAID</td>
                                        <td><?php echo $row['price']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>PAYMENT ID</td>
                                        <td><?php echo $row['payment_id']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>ORDER ID</td>
                                        <td><?php echo $row['order_id']; ?></td>
                                    </tr>
                                    <!-- <tr>
                                        <td>UPDATE FORM LINK</td>
                                        <td><a href="" > Here</a></td>
                                    </tr> -->
                                    <?php if($row['status']!='Paid') { ?>
                                    <tr>
                                        <td>PAYMENT LINK</td>
                                        <td><a href="/late-pay.php?id=<?php echo $row['id']; ?>&table=msme_form" > Here</a></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>PAYMENT STATUS</td>
                                        <td  class="text-success"><?php echo $row['status']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>TRACKING PROCESS</td>
                                        <?php
                                        if(empty($row['tracking_details']) || $row['tracking_details'] == ''){
                                            $tracking_details_txt = 'Processing';
                                        } else {
                                            if(strtoupper($row['tracking_details']) == 'DONE' || strtoupper($row['tracking_details']) == 'delivered'){
                                                $tracking_details_txt = 'Delivered';
                                            } else {
                                                 $tracking_details_txt = $row['tracking_details'];
                                            }
                                        }
                                        ?>
                                        <td  class="text-success"><b><?php echo $tracking_details_txt; ?></b></td>
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
<?php include_once('components/footer.php') ?>
</body>
</html>
