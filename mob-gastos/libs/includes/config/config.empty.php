<?php

include_once ('phpmailer/class.phpmailer.php');
require_once ('db/dbhandler.class.php');

global $db;
$db = new DBHandler();

if (!$db->connect('hostname', 'user', 'password', 'dbname', true))
    $db->print_last_error(false);


?>