<?php
include_once('config.php');

// Here put your all migration raw mysql query😀
$sql = " 
show tables;
";

if (!$result = $conn->query($sql)) {
    die('There was an error running the migration [' . $conn->error . ']');
} else {
    die('migrated successfully 😁');
}
?>