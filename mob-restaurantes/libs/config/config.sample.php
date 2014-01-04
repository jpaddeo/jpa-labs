<?php
require_once('/../db/class.mysql.db.php');
require_once('/../encrypt/class.encrypt.php');

define ("ENCRYPT_KEY", "KEY_TO_ENCRYPTER");

$db_connection_string = array (
    "db_host" => "XXXXXXXXX",
    "db_user" => "XXXXXXXXXX",
    "db_pass" => "XXXXXXXXXX",
    "db_name" => "XXXXXXXXXX",
    "db_persistant" => true
);

global $primary_db, $encrypter;

$primary_db = new MySqlDbClass();
$con = $primary_db->connect($db_connection_string["db_host"],
                            $db_connection_string["db_user"],
                            $db_connection_string["db_pass"],
                            $db_connection_string["db_name"],
                            $db_connection_string["db_persistant"]);

$encrypter = new Encryption(ENCRYPT_KEY);
//$encrypter->setKey(ENCRYPT_KEY);

if (!$con) {
    $primary_db->print_last_error(false); die;
}
?>
