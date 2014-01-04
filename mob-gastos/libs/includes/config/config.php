<?php

include_once ('/../phpmailer/class.phpmailer.php');
require_once ('/../db/class.dbhandler.php');

global $db;
$db = new DBHandler();

if (!$db->connect('localhost', 'root', '', 'gastos_db', true))
    $db->print_last_error(false);

?>