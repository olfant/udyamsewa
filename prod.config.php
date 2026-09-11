<?php
/**
 * [...]
 * Author Email souravmaity091@gmail.com
 * MSME Resgistration Website
 * Summary.
 * 
 * @author  Sourav Maity
 * @version 0.99, 01/06/2022
 * @package php
 * @since   1.00
 * @link https://udyamsewa.com
 */

if (!defined('PAYMENT_GATEWAY'))
{
    define('PAYMENT_GATEWAY', 'PAYU');
}

// for localhost
if($_SERVER['HTTP_HOST'] != 'localhost')
{
    $webName = 'udyamsewa.com';
    $webNumber = '7970788665';
    $webNameUpperCase = strtoupper($webName);
    $appKey = 'terigf1Number#';
    $mailPassword = 'skill@0Rs';
    $mailHost = 'smtp.hostinger.in';
    $mailAddress = 'care@' .$webName. '';

    // live database
    $host = "localhost";
    $userName = "udyamapply";
    $password = "skill@0Rs";
    $dbName = "udyamapply";
    $socket = null;
        
    //Cashfree Production
    // define('PAYMENT_GATEWAY', 'CASHFREE');
    // define('CASHFREE_APP_ID', '632587f4278b88c2963e2d4cc85236');
    // define('CASHFREE_KEY_SECRET', '477d8fce486a600d860c07a559c8bceb5ec24fd1');
    // define('RETURN_URL', 'https://' . $webName . '/cashfree/cashfree-response.php');
    // define('NOTIFY_URL', 'https://' . $webName . '/cashfree/cashfree-notification.php');
    // define('REQUEST_URL', 'https://test.cashfree.com/billpay/checkout/post/submit');

    // // Kwikpaisa Production
    // define('PAYMENT_GATEWAY', 'KWIKPAISA');
    // define ('KP_ENVIRONMENT', 'LIVE'); //CHANGE HERE WHICH TYPE OF TXN YOU DONE.
    // define('KPMID', 'YOUR_MID_KEY');//CHANGE THIS MID RECEIVED FROM KWIKPAISA.
    // define('KPMIDKEY', 'YOUR_MID_SALT_KEY');//CHANGE MIDKEY RECEIVED FROM KWIKPAISA.
    // define('TXN_CURRENCY', 'INR');//CHANGE TXN_CURRENCY AS TXN_CURRENCY NEEDED, DEFAULT IS INR.
    // define('KP_REFUND_URL', '');
    // define('KP_STATUS_QUERY_URL', 'https://pispp.kwikpaisa.com/CheckOut/Status');
    // define('KP_TXN_URL', 'https://pispp.kwikpaisa.com/CheckOut/TxnProcess');
    // define('CALLBACK_URL', 'https://' . $webName . '/cashfree/cashfree-response.php');
    
    // // PayU Money Production
    // define('PAYMENT_GATEWAY', 'PAYU');
    define('KEY', 'c8deWYpg');
    define('SALT', 'tfiEm9CLq2');
    define('TXN_CURRENCY', 'INR');
    define('PAYU_BASE_URL', 'https://secure.payu.in');
    define('WSURL', 'https://secure.payu.in/merchant/postservice.php?form=2');
    define('PAYU_ACTION_URL', PAYU_BASE_URL.'/_payment');
    define('CALLBACK_URL', 'https://' . $webName . '/payu/response.php');

    // define('PAYMENT_GATEWAY', 'RAZORPAY');
    // $keyId = 'rzp_test_2yfhfyvVNb9FtQ';
    // $keySecret = 'U0UkmtXiMlKDNdKfpGESvisD';
    // $displayCurrency = 'INR';
    
} else {

    $webName = 'udyamsewa.com';
    $webNumber = '7970788665';
    $webNameUpperCase = strtoupper($webName);
    $appKey = 'terigf1Number#';
    $mailPassword = 'skill@0Rs';
    $mailHost = 'smtp.hostinger.in';
    $mailAddress = 'care@' .$webName. '';

    // local db
    $host = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "msme_registrar";
    $socket = null;

    //Cashfree Test
    // define('PAYMENT_GATEWAY', 'CASHFREE');
    // define('CASHFREE_APP_ID', '632587f4278b88c2963e2d4cc85236');
    // define('CASHFREE_KEY_SECRET', '477d8fce486a600d860c07a559c8bceb5ec24fd1');
    // define('RETURN_URL', 'http://localhost/cashfree/cashfree-response.php');
    // define('NOTIFY_URL', 'http://localhost/cashfree/cashfree-notification.php');
    // define('REQUEST_URL', 'https://test.cashfree.com/billpay/checkout/post/submit');
    
    // Kwikpaisa Test
    // define('PAYMENT_GATEWAY', 'KWIKPAISA');
    // define ('KP_ENVIRONMENT', 'LIVE'); //CHANGE HERE WHICH TYPE OF TXN YOU DONE.
    // define('KPMID', 'YOUR_MID_KEY');//CHANGE THIS MID RECEIVED FROM KWIKPAISA.
    // define('KPMIDKEY', 'YOUR_MID_SALT_KEY');//CHANGE MIDKEY RECEIVED FROM KWIKPAISA.
    // define('TXN_CURRENCY', 'INR');//CHANGE TXN_CURRENCY AS TXN_CURRENCY NEEDED, DEFAULT IS INR.
    // define('KP_REFUND_URL', '');
    // define('KP_STATUS_QUERY_URL', 'https://pispp.kwikpaisa.com/CheckOut/Status');
    // define('KP_TXN_URL', 'https://pispp.kwikpaisa.com/CheckOut/TxnProcess');
    // define('CALLBACK_URL', 'http://localhost/cashfree/cashfree-response.php');

        
    // // PayU Money Test
    // define('PAYMENT_GATEWAY', 'PAYU');
    define('KEY', 'gzemsh');
    define('SALT', 'iZspKOPu');
    define('TXN_CURRENCY', 'INR');
    define('PAYU_BASE_URL', 'https://test.payu.in');
    define('WSURL', 'https://test.payu.in/merchant/postservice.php?form=2');
    define('PAYU_ACTION_URL', PAYU_BASE_URL.'/_payment');
    define('CALLBACK_URL', 'http://' . 'localhost' . '/payu/response.php');
    
}


// Create database connection
$conn = new mysqli($host, $userName, $password,$dbName,null,$socket);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

error_reporting(E_ALL);
?>

