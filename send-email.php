<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // Mailer
// $mail = new PHPMailer(true);
// try
// {
//     $mail->isSMTP();
//     $mail->Host = $mailHost;
//     $mail->SMTPAuth = true;
//     $mail->Username = $mailAddress;
//     $mail->Password = $mailPassword;
//     $mail->SMTPSecure = 'tls';
//     $mail->Port = 587;
//     $mail->setFrom($mailAddress, $website);
//     $mail->addAddress("admin@".$website);
//     //cc
//     $mail->AddCC('souravmaity091@gmail.com');
//     $mail->isHTML(true);
//     $mail->Subject = "New " . $_POST["form_name"] . " Form Submitted";
//     $mail->Body = "
//         APPLICANT NAME: " . $_POST["applicant_name"] . "<br>
//         MOBILE NUMBER: " . $_POST['mobile_number'] . "<br>
//         EMAIL ID: " . $_POST['email_id'] . "<br>
//         PLANT ADDRESS: " . $_POST['business_address'] . "<br>
//         PLANT STATE: " . $_POST['plant_state'] . "<br>
//         PLANT DISTRICT: " . $_POST['plant_district'] . "<br>
//         PLANT PINCODE: " . $_POST['plant_pincode'] . "<br>
//         OFFICE ADDRESS: " . $_POST['office_address'] . "<br>
//         OFFICE STATE: " . $_POST['office_state'] . "<br>
//         OFFICE DISTRICT: " . $_POST['office_district'] . "<br>
//         OFFICE PINCODE: " . $_POST['office_pincode'] . "<br>
//         ANNUAL TURNOVER: " . $_POST['annual_turnover'] . "<br>
//         GENDER: " . $_POST['gender'] . "<br>
//         SOCIAL CATEGORY: " . $_POST['social_category'] . "<br>
//         PHYSICALLY HANDICAPPED: " . $_POST['physically_handicapped'] . "<br>
//         AADHAAR NUMBER: " . $_POST["aadhaar_number"] . "<br>
//         UAM NUMBER: " . $_POST["uam_number"] . "<br>
//         GSTIN NUMBER: " . $_POST["gstin_number"] . "<br>
//         PAN CARD NUMBER: " . $_POST['pan_card_number'] . "<br>
//         BANK ACCOUNT NUMBER: " . $_POST['bank_account_number'] . "<br>
//         IFSC CODE: " . $_POST['ifsc_code'] . "<br>
//         BUSINESS NAME: " . $_POST['business_name'] . "<br>
//         DATE OF COMMENCEMENT OF BUSINESS: " . $_POST['date_of_commencement_of_business'] . "<br>
//         TYPE OF ORGANISATION: " . $_POST['type_of_organisation'] . "<br>
//         MAIN BUSINESS ACTIVITY OF ENTERPRISE: " . $_POST['main_business_activity_of_enterprise'] . "<br>
//         ADDITIONAL DETAILS ABOUT BUSINESS: " . $_POST['additional_details_about_business'] . "<br>
//         PERSONS EMPLOYED (MALE): " . $_POST['persons_employed_male'] . "<br>
//         PERSONS EMPLOYED (FEMALE): " . $_POST['persons_employed_female'] . "<br>
//         PERSONS EMPLOYED (OTHER): " . $_POST['persons_employed_other'] . "<br>
//         PERSONS EMPLOYED (TOTAL): " . $_POST['persons_employed_total'] . "<br>
//         INVESTMENT IN PLANT AND MACHINERY (AMOUNT IN LACS): " . $_POST['investment_in_plant_and_machinery'] . "<br>
//         AADHAAR CARD - FRONT SIDE: " . $link_1 . "<br>
//         AADHAAR CARD - BACK SIDE: " . $link_2 . "<br>
//         PAN CARD - FRONT SIDE: " . $link_3 . "
//         ";
//     $mail->send();
// }
// catch(Exception $e)
// {
//     // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
?>
