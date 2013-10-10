<?php
//require_once '/var/www/buscaneo_new/libs/config/config.php';
require_once HOME_PATH.'/inc/db/class.mysql.db.php';

$db_connection_string = array(
	"db_host" => "localhost",
    "db_user" => "root",
    "db_pass" => "root",
    "db_name" => "dataclubing",
    "db_persistant" => false
);

global $primary_db;

$primary_db = new MySqlDbClass();
$con = $primary_db->connect($db_connection_string["db_host"], $db_connection_string["db_user"], $db_connection_string["db_pass"], $db_connection_string["db_name"], $db_connection_string["db_persistant"]);

if (!$con) {
    $primary_db->print_last_error(false);
    die;
}