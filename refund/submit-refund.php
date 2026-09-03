<?php
require_once '../vendor/autoload.php';
include_once("../config.php");
session_start();

use Olfant\CrmOlfantSdk\FormAction;

$user_captcha = strtolower(trim($_POST['captcha']));
$session_captcha = strtolower($_SESSION['vercode']);

function clean($data)
{
    return htmlspecialchars(trim($data));
}

if ($user_captcha !== $session_captcha) {

    echo json_encode([
        "status" => "error",
        "message" => "Invalid captcha"
    ]);
    exit;
}

$applicant_name = clean($_POST['applicant_name']);
$email = clean($_POST['email']);
$mobile_number = clean($_POST['mobile_number']);
$contact_number = clean($_POST['contact_number']);
$applied_for = clean($_POST['applied_for']);
$refund_reason = clean($_POST['refund_reason']);
$form_filling_datetime = clean($_POST['form_filling_datetime']);
$refund_description = clean($_POST['refund_description']);
$udyam_number = clean($_POST['udyam_number']);
$account_number = clean($_POST['account_number']);
$account_holder_name = clean($_POST['account_holder_name']);
$ifsc = clean($_POST['ifsc']);
$bank_name = clean($_POST['bank_name']);
$branch_address = clean($_POST['branch_address']);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

if (!preg_match('/^[0-9]{10}$/', $mobile_number)) {
    die("Invalid mobile number");
}

if ($_POST['submit_type'] == 'first_submit') {
    $date = new DateTime($form_filling_datetime, new DateTimeZone('Asia/Kolkata'));
    $date->setTimezone(new DateTimeZone('UTC'));

    $formatted_datetime = $date->format("Y-m-d H:i");

    $sql = "SELECT * FROM `msme_form` WHERE applicant_name = '$applicant_name' AND mobile_number = $mobile_number AND email_id = '$email' AND form_name = '$applied_for' AND DATE_FORMAT(form_created_on, '%Y-%m-%d %H:%i') = '$formatted_datetime' AND payment_status = 'Paid'";

    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {

        $data = $result->fetch_assoc();

        echo json_encode([
            "status" => "Found",
            "message" => "Record found",
            "submit_type" => "Final_submit"
        ]);
    } else {

        echo json_encode([
            "status" => "NotFound",
            "message" => "Your details are not matching to our records please enter correct information."
        ]);
    }
    exit;
}


if ($_POST['submit_type'] == 'Final_submit') {

    $required = [
        'applicant_name',
        'email',
        'mobile_number',
        'account_number',
        'account_holder_name',
        'ifsc'
    ];

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            die("Error: $field is required");
        }
    }

    // file upload
    if ((isset($_FILES["payment_proof"]["name"])) && ($_FILES["payment_proof"]["name"] != '')) {
        $payment_proof             = urlencode($_FILES["payment_proof"]["name"]);
        if (pathinfo($payment_proof, PATHINFO_EXTENSION) == 'pdf') {
            $_SESSION['payment_proof'] = rand('000000000000000', '999999999999999') . '.pdf';
        } else {
            $_SESSION['payment_proof'] = rand('000000000000000', '999999999999999') . '.jpeg';
        }
        $payment_proof_tmp         = $_FILES["payment_proof"]["tmp_name"];
        move_uploaded_file($payment_proof_tmp, "../uploads/msme/" . $_SESSION['payment_proof'] . "");
        $file_path = '' . $cur_url . '/uploads/msme/' . $_SESSION["payment_proof"] . '';
    } else {
        $file_path = '';
    }


    $form_name = "Refund Request Form";

    // INSERT QUERY
    $sql = "INSERT INTO msme_form (
        form_name,
        applicant_name,email_id,contacted_person_number,mobile_number,service_type,
        refund_reason,udyam_number,refund_description,form_filling_datetime,payment_proof,
        account_holder_name,bank_account_number,bank_name,bank_branch_address,ifsc_code
    ) VALUES (
        '$form_name',
        '$applicant_name','$email','$contact_number','$mobile_number','$applied_for',
        '$refund_reason','$udyam_number','$refund_description','$form_filling_datetime','$file_path',
        '$account_holder_name','$account_number','$bank_name','$branch_address','$ifsc'
    )";

    if (!$result = $conn->query($sql)) {
        die('There was an error running the query [' . $conn->error . ']');
    } else {
        $_SESSION["form_id"] = $conn->insert_id;

        //crm api
        $formAction = new FormAction();
        $response = $formAction->formToCRM("MSME", $form_name, $applicant_name, $mobile_number, $email, "Unpaid", 0, $_SESSION["form_id"], null, null);
    }

    if ($result) {
        echo json_encode([
            "status" => "success",
            "message" => "Form submitted successfully",
            "form_id" => $form_id
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => $conn->error
        ]);
    }
}

$conn->close();
exit;
