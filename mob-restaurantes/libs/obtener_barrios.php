<?php
include_once('config/config.php');

global $primary_db, $encrypter;

$id_comida = $encrypter->decode($_GET['com']);
//TODO: Ver cómo le paso el id de la comida, dado que ahora falla.
$r = $primary_db->select("SELECT BAR.id,BAR.nombre,COUNT(*) as cant_restos FROM mob_barrios_restaurantes BARRES
                          LEFT JOIN mob_restaurantes_comidas RESCOM ON BARRES.id_restaurant = RESCOM.id_restaurant
                          LEFT JOIN mob_barrios BAR ON BARRES.id_barrio = BAR.id
                          WHERE RESCOM.id_comida = $id_comida");

while ($row = $primary_db->get_row($r, 'MYSQL_ASSOC')) {
    echo "<li>";
        echo "<a href = 'seleccionar_resto.php?bar=". $encrypter->encode($row['id']) . "&com=" . $encrypter->encode($id_comida) . "' data-transition = 'slidedown'>";
            echo $row['nombre'];
            echo "<span class='ui-li-count'>" . $row['cant_restos'] . "</span>";
        echo "</a>";
    echo "</li>";
}
?>
