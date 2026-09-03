<?php
session_start();

if(isset($_POST['captcha']))
{
    if($_POST['captcha'] == $_SESSION['vercode'])
    {
        echo "success";
    }
    else
    {
        echo "error";
    }
}
?>