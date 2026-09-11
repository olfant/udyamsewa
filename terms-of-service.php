<?php require_once __DIR__ . '/config.php'; ?>
<?php header("HTTP/1.1 301 Moved Permanently"); 
header("Location: <?php echo $baseUrl; ?>terms-and-condition.php"); header("Connection: close"); ?>