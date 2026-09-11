<?php
session_start();
require_once 'vendor/autoload.php';
require_once './config.php';
include_once('./validate-special.php'); //form validations

use Olfant\CrmOlfantSdk\FormAction;

if (defined('PAYMENT_GATEWAY')) { //atom
    $orderId = 'order_' . (rand(10000000000, 99999999999));
}
if (defined('PAYMENT_GATEWAY')) {
    function generate($length = 7)
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $token = '';
        while (strlen($token) < $length) {
            $token .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return 'ORDER_' . $token;
    }
    $orderId = generate(13);
} else {
    $orderId = '';
}

$applicant_name = $_POST['applicant_name'];
$mobile_number  = $_POST['mobile_number'];
$email_id       = $_POST['email_id'];

//state//
if (isset($_POST['state'])) {
    $state = urlencode($_POST['state']);
} elseif (isset($_POST['office_state'])) {
    $state = urlencode($_POST['office_state']);
} else {
    $state = '-';
}

$crm_website = 'UDYAMSEWA.COM';
$url1        = $_SERVER['SERVER_NAME'];
$webpath     = pathinfo($url1, PATHINFO_FILENAME);
$website     = strtoupper($webpath);
$table       = 'msme_form';

$formAction = new FormAction;
// ==========================================
//All Udyam New & Re Forms
if (isset($_POST['form_type']) && ($_POST['form_type'] == "MSME Registration")) {
    include_once('uploads.php');

    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];

    $sql = "INSERT INTO $table (form_name, applicant_name, mobile_number, email_id, office_address, office_pincode,
     annual_turnover, social_category, aadhaar_number, gst_avl, pan_card_number, bank_account_number,
      ifsc_code, business_name, date_of_commencement_of_business, type_of_organisation, additional_details_about_business,
       persons_employed_total, investment_in_plant_and_machinery, upload_aadhaar_card_front, upload_aadhaar_card_back,
        upload_pan_card_front, total_amount, payment_status, order_id, office_state, office_district, gender,
         physically_handicapped, main_business_activity_of_enterprise, persons_employed_female, persons_employed_male,
          persons_employed_other, bank_name, terms_of_service)
        VALUES ('" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "', 
        '" . $_POST["email_id"] . "', '" . $_POST["office_address"] . "', '" . $_POST["office_pincode"] . "', '"
        . $_POST["annual_turnover"] . "', '" . $_POST["social_category"] . "', '" . $_POST["aadhaar_number"] . "',
         '" . $_POST["gst_avl"] . "', '" . $_POST["pan_card_number"] . "',
          '" . $_POST["bank_account_number"] . "', '" . $_POST["ifsc_code"] . "', '" . $_POST["business_name"] . "',
           '" . $_POST["date_of_commencement_of_business"] . "', '" . $_POST["type_of_organisation"] . "', 
           '" . $_POST["additional_details_about_business"] . "', '" . $_POST["persons_employed_total"] . "',
            '" . $_POST["investment_in_plant_and_machinery"] . "', '" . $link_1 . "', '" . $link_2 . "', 
            '" . $link_3 . "', '" . $product_price . "', '" . $payment_status . "', '" . $orderId . "', '" . $_POST["office_state"] . "',
            '" . $_POST["office_district"] . "', '" . $_POST["gender"] . "', '" . $_POST["physically_handicapped"] . "', '" . $_POST["main_business_activity_of_enterprise"] . "', 
            '" . $_POST["persons_employed_female"] . "', '" . $_POST["persons_employed_male"] . "', '" . $_POST["persons_employed_other"] . "', '" . $_POST["bank_name"] . "', 'Checked' )";


    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if (isset($_POST['form_type']) && ($_POST['form_type'] == "MSME Cancel")) {
    include_once('uploads.php');

    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    // $product_price        = $row["product_price"];
    if ($_POST['udyam_uam_payment'] == "Udyam Number") {
        $product_price = 649;
    } elseif ($_POST['udyam_uam_payment'] == "Udyog Aadhar") {
        $product_price = 1349;
    }

    $sql = "INSERT INTO msme_form (form_name,applicant_name,mobile_number,email_id,udyam_number,business_name,total_amount,payment_status,terms_of_service,cancel_reason)     
     VALUES ('" . $_POST["form_name"] . "','" . $_POST["applicant_name"] . "','" . $_POST["mobile_number"] . "', '" . $_POST["email_id"] . "','" . $_POST["udyam_number"] . "','" . $_POST["business_name"] . "', 
          '" . $product_price . "',    '" . $payment_status . "','Checked','" . $_POST["udyam_uam_payment"]. "')";
    
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id']) && $_POST['form_id'] == 'print_udyam_application')) {
    include_once('uploads.php');

    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    // $product_price        = $row["product_price"];
    if ($_POST['udyam_uam_payment'] == "Udyam Number") {
        $product_price = 649;
    } elseif ($_POST['udyam_uam_payment'] == "Udyog Aadhar") {
        $product_price = 1349;
    }

    $sql = "INSERT INTO $table (form_name, udyam_number, applicant_name, mobile_number, email_id, opt_selected, upload_aadhaar_card_front, certificate_type,
        total_amount, payment_status, order_id, terms_of_service)
        VALUES ('" . $_POST["form_name"] . "','" . $_POST["udyam_number"] . "','" . $_POST["applicant_name"] . "',
        '" . $_POST["mobile_number"] . "','" . $_POST["email_id"] . "','" . $_POST["udyam_uam_payment"] . "','" . $link_1 . "','" . $_POST["certificate_type"] . "','" . $product_price . "','" . $payment_status . "','" . $orderId . "','Checked')";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id']) && $_POST['form_id'] == 'annexture_udyam_application')) {
    include_once('uploads.php');

    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];

    $sql = "INSERT INTO $table (form_name, udyam_number, applicant_name, mobile_number, email_id, upload_aadhaar_card_front, total_amount, payment_status, order_id, terms_of_service)
        VALUES ('" . $_POST["form_name"] . "', '" . $_POST["udyam_number"] . "', '" . $_POST["applicant_name"] . "', 
        '" . $_POST["mobile_number"] . "','" . $_POST["email_id"] . "','" . $link_1 . "','" . $product_price . "','" . $payment_status . "','" . $orderId . "','Checked')";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id']) && $_POST['form_id'] == 'update_udyam_certificate')) {
    include_once('uploads.php');
    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    $sql                  = " INSERT INTO $table (form_name, udyam_number, applicant_name, mobile_number, email_id, 
            upload_aadhaar_card_front, updated_details, total_amount, payment_status, order_id, terms_of_service)

            VALUES ('" . $_POST["form_name"] . "','" . $_POST["udyam_number"] . "','" . $_POST["applicant_name"] . "',
            '" . $_POST["mobile_number"] . "','" . $_POST["email_id"] . "','" . $link_1 . "',
            '" . $_POST["updated_details"] . "','" . $product_price . "','" . $payment_status . "','" . $orderId . "','Checked')
        ";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id'])) && ($_POST['form_id'] == 'print_udyam_registration')) {
    include_once('uploads.php');
    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    $sql                  = "INSERT INTO $table (form_name, applicant_name, mobile_number, email_id, uam_number, aadhaar_number,
     total_amount, payment_status,order_id, terms_of_service, office_state)

            VALUES ( '" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "',
             '" . $_POST["email_id"] . "', '" . $_POST["uam_number"] . "', '" . $_POST["aadhaar_number"] . "', '" . $product_price . "', '" . $payment_status . "',
             '" . $orderId . "', 'Checked', '" . $_POST["office_state"] . "' )
        ";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}

if ((isset($_POST['form_id']) && ($_POST['form_id'] == 'trace_udyam_registration'))) {
    //Retrive Product Price According To Product Name(form_id)
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    $sql                  = " INSERT INTO $table ( form_name, applicant_name, mobile_number, email_id, uam_number, aadhaar_number,  total_amount,
     payment_status,order_id, terms_of_service, office_state)

            VALUES ( '" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "', '" . $_POST["email_id"] . "',
             '" . $_POST["uam_number"] . "', '" . $_POST["aadhaar_number"] . "', '" . $product_price . "', '" . $payment_status . "','" . $orderId . "',
              'Checked', '" . $_POST["office_state"] . "' )
        ";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id']) && $_POST['form_id'] == 'update_certificate')) {
    include_once('uploads.php');
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    $sql                  = " INSERT INTO $table ( form_name, applicant_name, mobile_number, email_id, uam_number, upload_aadhaar_card_front, updated_details,
     total_amount, payment_status,order_id, terms_of_service, office_state )
            VALUES ( '" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "', '" . $_POST["email_id"] . "', 
            '" . $_POST["uam_number"] . "', '" . $link_1 . "', '" . $_POST["updated_details"] . "', '" . $product_price . "', '" . $payment_status . "', 
            '" . $orderId . "','Checked', '" . $_POST["office_state"] . "' )
        ";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if ((isset($_POST['form_id']) && $_POST['form_id'] == 'forgot_udyam_registration')) {
    include_once('uploads.php');
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    // $product_price        = $row["product_price"];
    if ($_POST['udyam_uam_payment'] == "Udyam Number") {
        $product_price = 649;
    } elseif ($_POST['udyam_uam_payment'] == "Udyog Aadhar") {
        $product_price = 1349;
    }
    $sql = " INSERT INTO $table ( form_name, applicant_name, mobile_number, email_id,total_amount, payment_status,order_id, terms_of_service )
            VALUES ( '" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "', '" . $_POST["email_id"] . "','" . $product_price . "', '" . $payment_status . "', '" . $orderId . "','Checked')
        ";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;
        $form_name           = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}

if ((isset($_POST['form_id']) && $_POST['form_id'] == 'trace_certificate')) {
    include_once('uploads.php');
    $_SESSION['table_id'] = 'msme_form';
    $payment_status       = 'Unpaid';
    $sql                  = "SELECT product_price FROM product_lists WHERE product_name = '" . $_POST["form_id"] . "'";
    $result               = $conn->query($sql);
    $row                  = $result->fetch_assoc();
    $product_price        = $row["product_price"];
    $sql                  = " INSERT INTO $table ( form_name, applicant_name, mobile_number, email_id, uam_number,total_amount, payment_status,order_id,
     terms_of_service, office_state )
            VALUES ( '" . $_POST["form_name"] . "', '" . $_POST["applicant_name"] . "', '" . $_POST["mobile_number"] . "', '" . $_POST["email_id"] . "',
             '" . $_POST["uam_number"] . "','" . $product_price . "', '" . $payment_status . "', '" . $orderId . "','Checked', '" . $_POST["office_state"] . "' )";
    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"]         = $conn->insert_id;
        $form_name                   = $_POST["form_name"];
        //

        //crm api
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email_id, "Unpaid", (int)$product_price, $_SESSION["form_id"], null, null);

        // $ch = curl_init('https://crm.webinfinix.com/api/registration-form-submission.php?formId='.$_SESSION["form_id"].'&vendor=TTG&business=MSME&website='.$crm_website.'&amount='.$product_price.'&status=Unpaid&name='.$applicant_name.'&mobile='.$mobile_number.'&email='.$email_id.'&state='.$state.'&formName='.$form_name.'');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
        $_SESSION["panel_form_id_2"] = $response;
        $_SESSION["panel_form_id_2"] = $response;

        //Payment Gateway Redirection
        if (defined('PAYMENT_GATEWAY')) {
            if (PAYMENT_GATEWAY == 'KWIKPAISA') {
                include_once('./KwikPaisa/request.php');
            } else if (PAYMENT_GATEWAY == 'CASHFREE') {
                include_once('./cashfree/request.php');
            } else if (PAYMENT_GATEWAY == 'PAYU') {
                include_once('./payu/request.php');
            } else {
                include_once('request.php');
            }
        } else {
            include_once('request.php');
        }
        require_once './send-email.php';
    }
}
if (isset($_POST['form_id'])) {

    include_once('./client-email.php');
}
// if (isset($_SESSION["panel_form_id_2"])) {

//     // include_once('editable/submit-form.php');
// }
