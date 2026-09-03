<?php
    $cur_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] ;
    if ((isset($_FILES["upload_aadhaar_card_front"]["name"])) && ($_FILES["upload_aadhaar_card_front"]["name"] != '')) {
    $upload_aadhaar_card_front             = urlencode($_FILES["upload_aadhaar_card_front"]["name"]);
    if (pathinfo($upload_aadhaar_card_front, PATHINFO_EXTENSION)=='pdf') {
    $_SESSION['upload_aadhaar_card_front'] = rand('000000000000000','999999999999999').'.pdf';
    }
    else{
      $_SESSION['upload_aadhaar_card_front'] = rand('000000000000000','999999999999999').'.jpeg';
    }
    $upload_aadhaar_card_front_tmp         = $_FILES["upload_aadhaar_card_front"]["tmp_name"];
    move_uploaded_file($upload_aadhaar_card_front_tmp, "uploads/msme/".$_SESSION['upload_aadhaar_card_front']."");
    $link_1 = ''.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_front"].'';
    } else {
        $link_1 = '';
    }

    if ((isset($_FILES["upload_aadhaar_card_back"]["name"])) && ($_FILES["upload_aadhaar_card_back"]["name"] != '')) {
    $upload_aadhaar_card_back             = urlencode($_FILES["upload_aadhaar_card_back"]["name"]);
    if (pathinfo($upload_aadhaar_card_back, PATHINFO_EXTENSION)=='pdf') {
    $_SESSION['upload_aadhaar_card_back'] = rand('000000000000000','999999999999999').'.pdf';
    }
    else{
      $_SESSION['upload_aadhaar_card_back'] = rand('000000000000000','999999999999999').'.jpeg';
    }
    $upload_aadhaar_card_back_tmp         = $_FILES["upload_aadhaar_card_back"]["tmp_name"];
    move_uploaded_file($upload_aadhaar_card_back_tmp, "uploads/msme/".$_SESSION['upload_aadhaar_card_back']."");
    $link_2 = ''.$cur_url.'/uploads/msme/'.$_SESSION["upload_aadhaar_card_back"].'';
    } else {
        $link_2 = '';
    }


    if ((isset($_FILES["upload_pan_card_front"]["name"])) && ($_FILES["upload_pan_card_front"]["name"] != '')) {
    $upload_pan_card_front             = urlencode($_FILES["upload_pan_card_front"]["name"]);
    if (pathinfo($upload_pan_card_front, PATHINFO_EXTENSION)=='pdf') {
    $_SESSION['upload_pan_card_front'] = rand('000000000000000','999999999999999').'.pdf';
    }
    else{
      $_SESSION['upload_pan_card_front'] = rand('000000000000000','999999999999999').'.jpeg';
    }
    $upload_pan_card_front_tmp         = $_FILES["upload_pan_card_front"]["tmp_name"];
    move_uploaded_file($upload_pan_card_front_tmp, "uploads/msme/".$_SESSION['upload_pan_card_front']."");
    $link_3 = ''.$cur_url.'/uploads/msme/'.$_SESSION["upload_pan_card_front"].'';
    } else {
        $link_3 = '';
    }
?>
