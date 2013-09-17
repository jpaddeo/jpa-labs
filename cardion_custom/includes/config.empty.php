<?php

define("WEB_PATH","/cardion");
define("WEB_HOST","http://".$_SERVER['HTTP_HOST']);
define("HOME_PATH",'/var/www/cardion');

define("LOG_PATH", HOME_PATH . "/logs/");

define("ENCRYPT_KEY", "_CARIDON_2013");
define('VERSION', '1.0.0');
define('NUMERO', '20130629');

require_once 'class.logger.php';
global $prim_log;
$prim_log = new Logger(LOG_PATH,  'app_error','log');
require_once 'config.sql.php';

error_reporting(E_ALL ^ E_NOTICE);