
<?php
//upload image poster
$target_dir = $_SERVER['DOCUMENT_ROOT']."/blog/image/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check = getimagesize($_FILES["img"]["tmp_name"]);
if ($check !== false) {
    $uploadOk = 1;
} else {
    $uploadOk = 0;
}
if ($uploadOk == 0) {
 die("error");
}
if ($uploadOk == 1) {
    if (!move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        die('error');
    }
} else {
    echo 'success';
}
?>