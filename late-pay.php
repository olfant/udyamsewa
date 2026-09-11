<?php
    require 'vendor/autoload.php';
    use Olfant\CrmOlfantSdk\InfoClient;
  $id = $_REQUEST['id'];
  $table = $_REQUEST['table'];
  $infoClient = new InfoClient;
  $infoClientData = $infoClient->info($id); if (!$infoClientData['form_name']) {
    die('404 error');
   }
  $form_name = $infoClientData['form_name']; $name = $infoClientData['name']; $number = $infoClientData['number']; $email = $infoClientData['email']; $price = $infoClientData['price']; $form_id = $infoClientData['form_id'];
  require_once("config.php");
if((isset($_GET['id']))&&(isset($_GET['table']))) {


    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout | UdyamGov</title>
    <meta name="description" content="Checkout, Please pay to process Udyam - UdyamGov">
      <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/css/checkout-form.css">
    <meta name="author" content="UdyamGov">
      <meta name="robots" content="noindex, nofollow">
      <meta name="theme-color" content="#385067">
      <meta property="og:title" content="Checkout Form | Payment gateway  - Register Udyam" />
      <meta property="og:description" content="Checkout Form - Payment gateway, Please pay our fee to process further - Register Udyam" />
      <meta property="og:url" content="<?php echo $baseUrl; ?>late-pay.php" />
      <meta property="og:type" content="website" />
      <meta property="og:image" content="<?php echo $baseUrl; ?>assets/img/favicon-msme-registration.png" />
      <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "name": "Checkout | UdyamGov",
         "description": "Checkout, Please pay to process Udyam - UdyamGov",
         url": "<?php echo $baseUrl; ?>late-pay.php", 
         "potentialAction": {
            "@type": "Action",
            "name": "MSME/Udyam/Udyog Aadhaar - Payment",
            "target": {
               "@type": "EntryPoint",
               "urlTemplate": "<?php echo $baseUrl; ?>late-pay.php"
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
            "name": "MSME/Udyam Registration Service - Payment",
            "serviceType": "Business Registration - Payment",
            "provider": {
               "@type": "Organization",
               "name": "UdyamGov",
               "url": "<?php echo $baseUrl; ?>late-pay.php"
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
            "additionalType": "<?php echo $baseUrl; ?>late-pay.php"
         }
         }
      </script>
    <!-- Event snippet for CRM form conversion page --> <script src="https://crm.olfant.com/assets/js/crm-convertion.js" defer></script>
</head>
<body>
<div class="card mt-50 mb-50" style="height: fit-content;">
  <div class="ribbon check" style="--color: #41ca7f;">
  <div class="content" style="width: 80px; height: 113px;">
    <img src="/assets/img/discount.png" width="85px" alt="msme logo" class="mx-auto">
    <!-- <svg width="24px" height="60px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
    </svg> -->
  </div>
</div>
<div class="card-title mx-auto"> 
<div class="row"> <div class="col-sm-2 d-flex"> <img src="/assets/img/msme-logo.svg" width="80px" alt="msme logo" class="mx-auto"> </div> <div class="col-sm-10 d-flex text-center"> <div class="my-auto"> MSME / UDYAM REGISTRATION FEE PAYMENT </div> </div></div>
</div>
<div class="nav">
    <ul class="mx-auto">
        <li class="active"><a>Payment Page</a></li>
    </ul>
</div>

<div class="discount-header">
🎉 ₹1000 Off on Your Payment! 🎉
<h1>
Checkout
</h1>
</div>
<form id="pay" action="late-pay.php" method="post">
  <span id="card-header">Payment For:</span>
    <div class="row row-1">
        <div class="col-2"><img class="img-fluid" src="/assets/img/card-logo.webp" /></div>
        <div class="col-10"> <input type="text" placeholder="MSME REGISTRATION FEE" disabled> </div>
    </div>
  </span>
   <span id="card-header">Your Details:</span>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Applicant name</span> </div>
        <div class="row row-2"> <input type="text" placeholder="<?php echo $infoClient->name; ?>" disabled> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Email id</span> </div>
        <div class="row row-2"> <input type="email" placeholder="<?php echo $infoClient->email; ?>" disabled> </div>
    </div>
    <div class="row-1">
        <div class="row row-2"> <span id="card-inner">Mobile Number</span> </div>
        <div class="row row-2"> <input type="tel" placeholder="<?php echo $infoClient->number; ?>" disabled> </div>
    </div>
    <input name="id" type="hidden" value="<?php echo $_GET['id'];  ?>" >
     <input name="table" type="hidden" value="<?php echo $_GET['table'];  ?>" >
    <button class="btn d-flex mx-auto" type="submit"><b>
        <span class="discounted-price"><?php echo "₹".$infoClient->price; ?></span> 
        Make Payment >> </b>
    </button>
</form>
<img src="/assets/img/visa-master-icon.jpg" /></img>
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
  session_start();
  date_default_timezone_set('Asia/Kolkata');
  $date=date('d-m-Y H:i:s');



  $_SESSION['table_id'] = $table;
  $_SESSION["form_id"] = $form_id;

    function generate($length = 7) {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $token = '';
    while(strlen($token) < $length) {
    $token .= $chars[mt_rand(0, strlen($chars) - 1)];
    }
    return 'ORDER_' . $token;
    }
    $_SESSION["orderId"] = $orderId = generate(13);

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/autoload.php';
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Checkout Form</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/main.css">
  </head>
  <style>
  .flex {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
  }
  
  .checkout-container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 900px;
      padding: 20px;
  }
  
  h2 {
      text-align: center;
      margin-bottom: 20px;
  }
  
  .checkout-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
  }
  
  .checkout-form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
  }
  
  .form-group {
      display: flex;
      flex-direction: column;
      grid-column: span 2;
  }
  
  .form-group label {
      font-weight: bold;
      margin-bottom: 5px;
      font-size: 14px;
      color: #333;
  }
  
  .form-group input, 
  .form-group select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #f9f9f9;
      font-size: 14px;
      color: #555;
      cursor: not-allowed;
  }
  
  .price-details {
      background-color: #f2f2f2;
      border-radius: 8px;
      padding: 20px;
  }
  
  .price-details h3 {
      margin-bottom: 20px;
      color: #333;
  }
  
  .price-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
  }
  
  .price-item span {
      font-weight: bold;
      color: #555;
  }
  button.btn {
      border: 0;
      padding: 12px;
      color: #555555;
      border-radius: 4px;
  }
  @media (max-width: 768px) {
      .checkout-grid {
          grid-template-columns: 1fr;
      }
  
      .checkout-form {
          grid-template-columns: 1fr;
      }
  }
  
  </style>
  <body>
  <h3 style="color:orange"> Please Wait Redirecting to Payment</h3>
  <div class="flex">
      <div class="checkout-container">
          <h2>ORDER DETAILS</h2>
          <div class="checkout-grid">
              <!-- Form Section -->
              <form class="checkout-form">
                  <div class="form-group">
                      <label for="applicant-name">NAME OF THE APPLICANT / आवेदक का नाम *</label>
                      <input type="text" id="applicant-name" name="applicant_name" value="<?php echo $name; ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="mobile-number">MOBILE NUMBER OF APPLICANT / आवेदक का मोबाइल नंबर *</label>
                      <input type="text" id="mobile-number" name="mobile_number" value="<?php echo $number; ?>" disabled>
                  </div>
                  <div class="form-group">
                      <label for="email">EMAIL ID OF APPLICANT / आवेदक की ईमेल आईडी *</label>
                      <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
                  </div>
                  <input type="hidden" name="form_type" value="Enquiry">
              </form>
              <!-- Price Section -->
              <div class="price-details">
                  <h3>Price Details</h3>
                  <div class="price-item">
                      <span>Amount Paid:</span>
                      <span><?php echo $price; ?></span>
                  </div>
                  <div class="price-item">
                      <span>Total:</span>
                      <span><?php echo $price; ?></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php include_once('components/footer.php') ?>
  </body>
  </html>
  
  <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
  <?php
    \Cashfree\Cashfree::$XClientId = CASHFREE_APP_ID;
    \Cashfree\Cashfree::$XClientSecret = CASHFREE_KEY_SECRET;
        if(strtoupper(ENVIROMENT) == 'PRODUCTION') {
        \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$PRODUCTION;
    } else {
        \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;
    }
  
    $cashfree = new \Cashfree\Cashfree();
  
    $x_api_version = "2022-09-01";
    $create_orders_request = new \Cashfree\Model\CreateOrderRequest();
    $create_orders_request->setOrderAmount($price);
    $create_orders_request->setOrderCurrency("INR");
  
    $order_meta = new \Cashfree\Model\OrderMeta();
    $order_meta->setReturnUrl(RETURN_URL.'?orderId='.$orderId);
    $order_meta->setNotifyUrl(NOTIFY_URL.'?orderId='.$orderId);
    $create_orders_request->setOrderMeta($order_meta);
  
  
    $customer_details = new \Cashfree\Model\CustomerDetails();
    $customer_details->setCustomerId($orderId);
    $customer_details->setCustomerPhone($number);
  
    $create_orders_request->setCustomerDetails($customer_details);
  
    try {
        $result = $cashfree->PGCreateOrder($x_api_version, $create_orders_request);
        $res = json_decode($result[0]);
    } catch (Exception $e) {
        echo 'Exception when calling PGCreateOrder: ', $e->getMessage(), PHP_EOL;
    }
  
  
              $sql_update_msme_form = 'UPDATE msme_form SET order_id = "'.$orderId.'",payment_id = "'.$res->order_id.'"  WHERE id = "'.$_SESSION['form_id'].'"';
              $result_update_msme_form = $conn->query($sql_update_msme_form);
  ?>
  <script>
  const cashfree = Cashfree({
      mode:"<?php echo strtolower(ENVIROMENT); ?>" //or production
  });
  
  let checkoutOptions = {
      paymentSessionId: "<?php echo $res->payment_session_id; ?>",
      redirectTarget: "_modal"
  };
  
  cashfree.checkout(checkoutOptions).then((result) => {
      if(result.error){
          window.location. href = '/failed.php'
      }
      if(result.redirect){
          alert('Something Went Wrong');
          window.location. href = '/failed.php'
      }
      if(result.paymentDetails){
          window.location. href = '<?php echo $res->order_meta->return_url; ?>';
      }
  });
  </script>
  </html>
  
  