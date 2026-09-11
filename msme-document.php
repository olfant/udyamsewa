<?php require_once __DIR__ . '/config.php'; ?>
<?php header("HTTP/1.1 301 Moved Permanently"); 
header("Location: <?php echo $baseUrl; ?>msme-sample-certificate.php"); header("Connection: close"); ?>