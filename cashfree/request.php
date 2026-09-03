<?php
error_reporting(0); // production
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('display_errors', 0);


// post data
$customerName = $_POST['applicant_name'];
$customerPhone = $_POST['mobile_number'];
$customerEmail = $_POST['email_id'];
$orderAmount = $product_price;
$orderCurrency = "INR";
$_SESSION['orderId'] = $orderId;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link rel="icon" href="/assets/img/favicon-udyam-registration.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4a90e2;
            --secondary-color: #f8f9fa;
            --border-color: #e1e1e1;
            --text-color: #333;
            --success-color: #28a745;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--text-color);
            line-height: 1.6;
        }

        .loading-message {
            text-align: center;
            color: gray;
            padding: 20px;
            font-size: 24px;
            font-weight: 500;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .checkout-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 1000px;
        }

        .checkout-container h3 {
            color: var(--text-color);
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        .checkout-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 40px;
        }

        .checkout-form {
            padding-right: 40px;
            border-right: 1px solid var(--border-color);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            background-color: var(--secondary-color);
        }

        .form-group input:disabled {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }

        .price-details {
            background-color: var(--secondary-color);
            padding: 30px;
            border-radius: 15px;
        }

        .price-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .price-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
            font-weight: bold;
            font-size: 18px;
        }

        .pay-button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: var(--success-color);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .pay-button:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }

            .checkout-form {
                padding-right: 0;
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding-bottom: 30px;
            }

            .checkout-container {
                padding: 20px;
            }
        }

        /* Warning Box */
        .warning-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 100%;
            position: relative;
            animation: fadeIn 0.5s ease-in-out;
        }

        /* Warning Icon */
        .warning-icon {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
            animation: shake 1s infinite alternate;
        }

        /* Message Text */
        .warning-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }

        /* Home Button */
        .home-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: gray;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Shake Animation */
        @keyframes shake {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-5deg);
            }

            50% {
                transform: rotate(5deg);
            }

            75% {
                transform: rotate(-3deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

<body>
<h1 style="color:orange"> Please Wait Redirecting to Payment ... </h1>
    <div class="flex">
        <div class="checkout-container">
            <?php if (isset($_POST['applicant_name']) && isset($_POST['mobile_number']) && isset($_POST['email_id']) && isset($product_price)) { ?>
                <h3>ORDER DETAILS</h3>
                <div class="checkout-grid">
                    <!-- Form Section -->
                    <form class="checkout-form">
                        <div class="form-group">
                            <label for="applicant-name">NAME OF THE APPLICANT / आवेदक का नाम *</label>
                            <input type="text" id="applicant-name" name="applicant_name" value="<?php echo $customerName; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mobile-number">MOBILE NUMBER OF APPLICANT / आवेदक का मोबाइल नंबर *</label>
                            <input type="text" id="mobile-number" name="mobile_number" value="<?php echo $customerPhone; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">EMAIL ID OF APPLICANT / आवेदक की ईमेल आईडी *</label>
                            <input type="email" id="email" name="email" value="<?php echo $customerEmail; ?>" disabled>
                        </div>
                        <input type="hidden" name="form_type" value="Enquiry">
                    </form>
                    <!-- Price Section -->
                    <div class="price-details">
                        <h3>Price Details</h3>
                        <div class="price-item">
                            <span>Amount Paid:</span>
                            <span><?php echo $orderAmount; ?></span>
                        </div>
                        <div class="price-item">
                            <span>Total:</span>
                            <span><?php echo $orderAmount; ?></span>
                        </div>
                        <button id="payButton" class="pay-button">
                            Proceed to Pay
                        </button>
                    </div>
                </div>
            <?php } else { ?>
                <div class="warning-box">
                    <svg class="warning-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M4.93 19h14.14a2 2 0 0 0 1.732-3l-7.07-12.14a2 2 0 0 0-3.464 0L3.2 16a2 2 0 0 0 1.732 3z" stroke="#ff6b00" />
                    </svg>

                    <!-- Warning Message -->
                    <h2 class="warning-heading">Service Required Before Checkout</h2>
                    <p class="warning-text">
                        To proceed with your certificate registration, please add a service before checkout.
                        Select the required service from the available options.
                    </p>

                    <button class="home-button" onclick="window.location.href='https://udyamgov.com/'">Go to Home</button>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>

<script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
<?php
\Cashfree\Cashfree::$XClientId = CASHFREE_APP_ID;
\Cashfree\Cashfree::$XClientSecret = CASHFREE_KEY_SECRET;
if (strtoupper(ENVIROMENT) == 'PRODUCTION') {
    \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$PRODUCTION;
} else {
    \Cashfree\Cashfree::$XEnvironment = Cashfree\Cashfree::$SANDBOX;
}

$cashfree = new \Cashfree\Cashfree();

$x_api_version = "2022-09-01";
$create_orders_request = new \Cashfree\Model\CreateOrderRequest();
$create_orders_request->setOrderAmount($orderAmount);
$create_orders_request->setOrderCurrency("INR");

$order_meta = new \Cashfree\Model\OrderMeta();
$order_meta->setReturnUrl(RETURN_URL . '?orderId=' . $orderId);
$order_meta->setNotifyUrl(NOTIFY_URL . '?orderId=' . $orderId);
$create_orders_request->setOrderMeta($order_meta);


$customer_details = new \Cashfree\Model\CustomerDetails();
$customer_details->setCustomerId($orderId);
$customer_details->setCustomerPhone($customerPhone);

$create_orders_request->setCustomerDetails($customer_details);

try {
    $result = $cashfree->PGCreateOrder($x_api_version, $create_orders_request);
    $res = json_decode($result[0]);
} catch (Exception $e) {
    echo 'Exception when calling PGCreateOrder: ', $e->getMessage(), PHP_EOL;
}

$sql_update_msme_form = 'UPDATE msme_form SET order_id = "' . $orderId . '", payment_id = "' . $res->order_id . '" WHERE id = "' . $_SESSION['form_id'] . '"';
$result_update_msme_form = $conn->query($sql_update_msme_form);
?>
<script>
    const cashfree = Cashfree({
        mode: "<?php echo strtolower(ENVIROMENT); ?>" //or production
    });

    let checkoutOptions = {
        paymentSessionId: "<?php echo $res->payment_session_id; ?>",
        redirectTarget: "_modal"
    };
</script>

<script>

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