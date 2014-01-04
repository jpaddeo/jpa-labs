<?php
include_once('config/config.php');

global $primary_db, $encrypter;

$id_barrio = $encrypter->decode($_GET['bar']);
$id_comida = $encrypter->decode($_GET['com']);

//TODO: cambiar el 4 por un COUNT a comentarios
$r = $primary_db->select("SELECT RES.* FROM mob_restaurantes_comidas RESCOM
                          LEFT JOIN mob_restaurantes RES ON (RESCOM.id_restaurant = RES.id)
                          LEFT JOIN mob_barrios_restaurantes RESBAR ON (RESBAR.id_restaurant = RES.id)
                          WHERE RESBAR.id_barrio = $id_barrio
                          AND RESCOM.id_comida = $id_comida");

while ($row = $primary_db->get_row($r, 'MYSQL_ASSOC')) { 
    echo "<li>";
        echo "<a href = 'restaurant.php&res=". $encrypter->encode($row['id']) ."' data-transition = 'slidedown'>";
            echo "<img src='css/images/" . $row['imagen'] . "'/>";
            echo "<h2>". $row['nombre'] . "</h2>";
            echo "<p class='";
            $str_class_estrellas = "";            
            switch ($row['cant_estrellas']) {
                case "1":
                    $str_class_estrellas = "classement one";
                    break;
                case "2":
                    $str_class_estrellas = "classement two";
                    break;
                case "3":
                    $str_class_estrellas = "classement three";
                    break;
                case "4":
                    $str_class_estrellas = "classement four";
                    break;
                default:
                    $str_class_estrellas = "classement five";
                    break;
            }
            echo $str_class_estrellas;
            echo "'>" . $row['cant_estrellas'] . "estrellas </p>";
        echo "</a>";
    echo "</li>";
}
?>