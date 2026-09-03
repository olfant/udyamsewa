<?php
// require("config.php");
// session_start();
// include_once("editable/data-form.php");

// if (isset($_POST['cid']) && $_POST['cid'] != '') {
//     $sql_select_cid = 'SELECT * FROM cid WHERE cid = "'.$_POST["cid"].'"';
//     $result_select_cid = $conn->query($sql_select_cid);

//     if ($result_select_cid) {
//         $row_select_cid = $result_select_cid->fetch_assoc();

//         $uid        = $row_select_cid['uid'];
//         $table_name = $row_select_cid['table_name'];
//         $form_name  = $row_select_cid['form_name'];

//         $form_link  = array($form_data)[0][$form_name]['form_link'];
//         $full_link  = $current_link . $form_link;

//         $sql_select_form    = 'SELECT * FROM '.$table_name.' WHERE id = "'.$uid.'"';
//         $result_select_form = $conn->query($sql_select_form);
//         $row_select_form    = $result_select_form->fetch_assoc();
//         $form_fields        = array($form_data)[0][$form_name]['form_fields'];
        
//         $sql_update_fields  = ''; 
//         foreach ($form_fields as $form_field=>$form_field_value) {
//             $sql_update_fields .= $form_field_value . ' = ' . "'$_POST[$form_field_value]'";
//             if (next($form_fields) == true) {
//                 $sql_update_fields .= ',' ;
//             }
//         }

//         $sql_update_form = 'UPDATE '.$table_name.' SET '.$sql_update_fields.' WHERE id = "'.$uid.'"';
//         $result_update_form = $conn->query($sql_update_form);

//         if ($result_update_form) {

//                  if(
//                   (isset($_FILES["upload_aadhaar_card_front"]["name"])&&($_FILES["upload_aadhaar_card_front"]["name"]!=''))&&
//                   (isset($_FILES["upload_aadhaar_card_front"]["tmp_name"])&&($_FILES["upload_aadhaar_card_front"]["tmp_name"]!=''))){
          

//                  $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;

//                 $upload_aadhaar_card_front             = urlencode($_FILES["upload_aadhaar_card_front"]["name"]);
//                 $_SESSION['upload_aadhaar_card_front'] = rand().'_'.$upload_aadhaar_card_front;
//                 $upload_aadhaar_card_front_tmp         = $_FILES["upload_aadhaar_card_front"]["tmp_name"];
//                 move_uploaded_file($upload_aadhaar_card_front_tmp, "../uploads/msme/".$_SESSION['upload_aadhaar_card_front']."");

               

//                  $sql = '
//                 UPDATE '.$table_name.'
//                 SET upload_aadhaar_card_front = "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_front"].'"

            
//                 WHERE id = "'.$uid.'"';

//                    if(!$result = $conn->query($sql)){
//                         die('There was an error running the query [' . $conn->error . ']');
//                     }



//             }

//               if(
//                   (isset($_FILES["upload_aadhaar_card_front1"]["name"])&&($_FILES["upload_aadhaar_card_front1"]["name"]!=''))&&
//                   (isset($_FILES["upload_aadhaar_card_front1"]["tmp_name"])&&($_FILES["upload_aadhaar_card_front1"]["tmp_name"]!=''))&&
//                   (isset($_FILES["upload_aadhaar_card_back"]["name"])&&($_FILES["upload_aadhaar_card_back"]["name"]!=''))&&
//                   (isset($_FILES["upload_aadhaar_card_back"]["tmp_name"])&&($_FILES["upload_aadhaar_card_back"]["tmp_name"]!=''))){

//                  $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
//                 "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;

//                 $upload_aadhaar_card_front1             = urlencode($_FILES["upload_aadhaar_card_front1"]["name"]);
//                 $_SESSION['upload_aadhaar_card_front1'] = rand().'_'.$upload_aadhaar_card_front1;
//                 $upload_aadhaar_card_front_tmp         = $_FILES["upload_aadhaar_card_front1"]["tmp_name"];
//                 move_uploaded_file($upload_aadhaar_card_front1_tmp, "../uploads/msme/".$_SESSION['upload_aadhaar_card_front1']."");

//                $upload_aadhaar_card_back             = urlencode($_FILES["upload_aadhaar_card_back"]["name"]);
//                 $_SESSION['upload_aadhaar_card_back'] = rand().'_'.$upload_aadhaar_card_back;
//                 $upload_aadhaar_card_back_tmp         = $_FILES["upload_aadhaar_card_back"]["tmp_name"];
//                 move_uploaded_file($upload_aadhaar_card_back_tmp, "../uploads/msme/".$_SESSION['upload_aadhaar_card_back']."");

//                  $sql = '
//                 UPDATE '.$table_name.'
//                 SET upload_aadhaar_card_front = "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_front1"].'",
//                 upload_aadhaar_card_back =      "'.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_back"].'"

            
//                 WHERE id = "'.$uid.'"';

//                 if(!$result = $conn->query($sql)){
//                 die('There was an error running the query [' . $conn->error . ']');
//             }



//             }
//             //     if ($_SERVER['HTTP_HOST'] == 'localhost') {
//             //         $url = 'http://localhost/crm.webinfinix.com/api/set-update-link.php?link='.$full_link.'?cid='.$_POST["cid"].'';
//             // }   else {
//             //         $url = 'https://crm.webinfinix.com/api/set-update-link.php?link='.$full_link.'?cid='.$_POST["cid"].'';
//             // }

//             //         $ch = curl_init();   
//             //         curl_setopt($ch, CURLOPT_URL, $url);
//             //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//             //         $response = curl_exec($ch);

//             //     if ($_SERVER['HTTP_HOST'] == 'localhost') {
//             //     $url = 'http://localhost/crm.webinfinix.com/api/set-update-link.php?link='.$full_link.'?cid='.$_POST["cid"].'';
//             // }       else {
//             //     $url = 'https://crm.webinfinix.com/api/set-update-link.php?link='.$full_link.'?cid='.$_POST["cid"].'';
//             // }

//                     // $ch = curl_init();   
//                     // curl_setopt($ch, CURLOPT_URL, $url);
//                     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//                     // $response = curl_exec($ch);
//             // echo $response;
//             header('Location: /editable-from-submited.php');
           
//         }

//     }
// }

?>