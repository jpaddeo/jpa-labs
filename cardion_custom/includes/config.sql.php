<?php
require_once HOME_PATH.'/includes/class.mysql.db.php';

$db_connection_string = array(
    "db_host" => "localhost",
    "db_user" => "root",
    "db_pass" => "",
    "db_name" => "cardion",
    "db_persistant" => false
);


global $primary_db;

$primary_db = new MySqlDbClass();
$con = $primary_db->connect($db_connection_string["db_host"], $db_connection_string["db_user"], $db_connection_string["db_pass"], $db_connection_string["db_name"], $db_connection_string["db_persistant"]);

//$encrypter = new Encryption(ENCRYPT_KEY);
//$encrypter->setKey(ENCRYPT_KEY);

if (!$con) {
    $primary_db->print_last_error(false);
    die;
}