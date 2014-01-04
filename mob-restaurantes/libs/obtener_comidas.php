<?php

include_once('config/config.php');
include_once('libs/geo/coordinates.php');

global $primary_db, $encrypter;

$r = $primary_db->select("SELECT id, nombre, imagen FROM mob_comidas ORDER BY nombre ASC");

while ($row = $primary_db->get_row($r, 'MYSQL_ASSOC')) {
    echo "<li>";
        echo "<a href = 'seleccionar_barrio.php?com=". $encrypter->encode($row['id']) ."' data-transition = 'slidedown'>";
            echo "<img src='css/images/" . $row['imagen'] . "' /><h3>". $row['nombre'] ."</h3>";
        echo "</a>";
    echo "</li>";
}
?>
