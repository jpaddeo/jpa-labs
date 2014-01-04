<?php
require_once "includes/config/config.php";

global $db;

$res = array();
$r = $db->select("SELECT tg_valor, tg_descripcion FROM tipos_gastos");
while ($row=$db->get_row($r, 'MYSQL_ASSOC')) {
    $res[] = $row;
}

return json_encode($res);
?>
