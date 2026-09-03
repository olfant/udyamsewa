<?php
    // include_once("./editable/data-form.php");

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // require 'vendor/autoload.php';

    // function generateToken($length = 7) {
    //     $chars = 'abcdefghijklmnopqrstuvwxyz1234567890';
    //     $token = '';
    //     while(strlen($token) < $length) {
    //         $token .= $chars[mt_rand(0, strlen($chars)-1)];
    //     }
    //     return $token;
    // }
    // $cid = generateToken(16);

    // $form_name    = $_POST['form_name'];
    // $form_link    = array($form_data)[0][$form_name]['form_link'];
    // $table_name   = array($form_data)[0][$form_name]['table_name'];

    // $full_link = $current_link . $form_link . '?cid=' . $cid.'';

    // $sql_insert_cid = 'INSERT INTO cid (cid, uid, table_name, form_name) VALUES ("'.$cid.'", "'.$_SESSION["form_id"].'", "'.$table_name.'", "'.$form_name.'")';
    // $result_insert_id = $conn->query($sql_insert_cid);

    // if ($result_insert_id) {
    //     $sql_select_user = 'SELECT * FROM '.$table_name.' WHERE id = "'.$_SESSION["form_id"].'"';
    //     $result_select_user = $conn->query($sql_select_user);
    //     $row_select_user = $result_select_user->fetch_assoc();

    //     $user_name_array = array($form_data)[0][$form_name]['user_name'];
    //     $user_email_array = array($form_data)[0][$form_name]['user_email'];

    //     $user_name = $row_select_user[$user_name_array];
    //     $user_email = $row_select_user[$user_email_array];


    //     $ch = curl_init('https://crm.olfant.com/api/edit-form-link.php?pannel_form_id='.$_SESSION["panel_form_id_2"].'&formId='.$_SESSION["form_id"].'&fulllink='.$full_link.'');
    //           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //           $response = curl_exec($ch);
    //           curl_close($ch);
    // }

?>