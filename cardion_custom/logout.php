<?php
require_once 'includes/config.php'; 
session_start();
session_destroy();
header("Location: " . WEB_HOST . WEB_PATH . "/index.php");
exit;
?>
