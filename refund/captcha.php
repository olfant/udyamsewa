<?php
session_start();

$width = 140;
$height = 45;

$image = imagecreate($width, $height);

/* Colors */
$bg = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$line_color = imagecolorallocate($image, 100, 120, 180);
$dot_color = imagecolorallocate($image, 180, 180, 180);

/* Generate random captcha code */
$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789@#$%&*';
$captcha = '';

for ($i = 0; $i < 6; $i++) {
    $captcha .= $chars[rand(0, strlen($chars) - 1)];
}

$_SESSION['vercode'] = $captcha;

/* Add random lines */
for ($i = 0; $i < 6; $i++) {
    imageline(
        $image,
        rand(0, $width),
        rand(0, $height),
        rand(0, $width),
        rand(0, $height),
        $line_color
    );
}

/* Add random dots */
for ($i = 0; $i < 200; $i++) {
    imagesetpixel(
        $image,
        rand(0, $width),
        rand(0, $height),
        $dot_color
    );
}

/* Write captcha text */
$font_size = 5;
$x = 15;

for ($i = 0; $i < strlen($captcha); $i++) {

    $y = rand(10,20);

    imagestring(
        $image,
        $font_size,
        $x,
        $y,
        $captcha[$i],
        $text_color
    );

    $x += 20;
}

/* Output image */
header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);
?>