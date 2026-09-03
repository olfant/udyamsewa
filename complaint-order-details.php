<?php
include_once ('vendor/autoload.php');
use Olfant\CrmOlfantSdk\Database\Connection;
session_start();
include "./config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaint Page | Submit Your Queries and Issues</title>
    <meta name="description" content="Have a complaint or query? Reach out to us at UdyamGov.com. Submit your concerns regarding MSME services, our support team will assist you promptly.">
    <meta name="keywords" content="Complaint Page, UdyamGov Complaints, Submit Udyam Queries, Udyam Registration Issues, MSME Service Complaints, Register Udyam Support, Report Udyam Problems, Contact Udyam Team, Udyam Assistance, Resolve Udyam Certificate Issues">
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="canonical" href="https://udyamgov.com/complaint-order-details.php" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Complaint Page | Submit Your Queries and Issues" />
      <meta property="og:description" content="Have a complaint or query? Reach out to us at UdyamGov.com. Submit your concerns regarding MSME services, our support team will assist you promptly." />
      <meta property="og:url" content="https://udyamgov.com/complaint-order-details.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="https://udyamgov.com/assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
         {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Complaint Page | Submit Your Queries and Issues",
         "description": "Have a complaint or query? Reach out to us at UdyamGov.com. Submit your concerns regarding MSME services, our support team will assist you promptly.",
         
"sameAs": [
    "https://www.facebook.com/profile.php?id=61571904965348",
    "https://x.com/UdyamGov",
    "https://www.instagram.com/udyamgov.offical/",
    "https://www.youtube.com/@UdyamGov"
],
"mainEntity": {
            "@type": "Service",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov"
            },
            "areaServed": {
               "@type": "Country",
               "name": "India"
            },
            "audience": {
               "@type": "Audience",
               "geographicArea": {
               "@type": "AdministrativeArea",
               "name": "India"
               }
            }
         }
         }
        </script>
</head>
<body>

<?php include_once('components/header.php') ?>

<div class="container-fluid fcs-form-container">
        <div class="row">
            <div class="col-sm-8 col-lg-6" style="margin: auto">
            <h1>Submit Your Queries and Issues </h1>
            <p>Submit your concerns regarding MSME services, our support team will assist you promptly.</p>
                <form class="container" action="complaint-order-details.php" method="GET"><br><br>
                    <div class="card">
   <div class="card-header">
      <h3>Message</h3>
   </div>
   <div class="card-body">
       <?php
                           $web = "UDYAMGOV.COM";
                    $crmConn = new Connection();
                    // to crm db
                    $connect = $crmConn->connection;
                    if ($connect->connect_error) {
                      die("Connection failed: " . $connect->connect_error);
                    }

                    $sql = "SELECT * FROM `forms` WHERE ( `payment_id` = '".$_GET['payment_id']."' OR `order_id` = '".$_GET['payment_id']."' ) AND `web` = '$web' AND `status` = 'Paid'";
                    $result = $connect->query($sql);
                    if ($result->num_rows == 0) { print('<div class="text-danger">Wrong Order Id / Payment Id</div>'); } else {
                        ?>
      <div class="row form-square">
         <div class="col-md-12">

                <?php

                    
                    
                                        
                    if((isset($_GET['payment_id'])) && ($_GET['payment_id'] != '') && (isset($_GET['Send'])) && (isset($_GET['msg'])) && ($_GET['msg'] != '') && ($_GET['msg'] != ' ')){
                        //message insert
                        $connect->query("INSERT INTO `message` (`mobile`, `message`, `type`, `route`) VALUES ('".$result->fetch_assoc()['number']."','".mysqli_real_escape_string($connect,$_GET['msg'])."','complaint','1')");
                        header('Location : complaint-order-details.php?payment_id='.$_GET['payment_id']);
                        
                        
                    }
                        
                    $sql = "SELECT * FROM `message` WHERE mobile = '".$result->fetch_assoc()['number']."' AND `type` = 'complaint';";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0 ) {
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div class="my-2 d-flex" <?php if($row['route'] == 1){ ?> style="flex-direction: row-reverse;" <?php } ?>> <div class="alert alert-<?php if($row['route'] == 1){ ?>success <?php } else { ?>dark <?php } ?>"><?php echo $row['message']; ?></div> </div>
                        
                           <div class"">
                               
                           </div>
                        
                <?php
                    }
                    }
                    
                ?>
                
            <input type="text"  name="msg" class="form-control" id="msg_id" placeholder="Message.." required="">
            <input type="hidden"  name="payment_id" value="<?php echo $_GET['payment_id'] ?>" required="">
         </div>
         <input type="submit" class="btn mt-4 ml-2 btn-green blink" id="formsubmit" name="Send" value="Send">
         <?php } ?>
      </div>
   </div>
   </div>
                </form>
            </div>
        </div>
    </div>
<?php include_once('components/footer.php') ?>
</body>
</html>
