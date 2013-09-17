<?php

function getReplace($buscar, $reemplazar, $datos) {
    return str_replace($buscar, $reemplazar, $datos);
}

function escapeString($cadena) {
    $cadena = mysql_escape_string($cadena);

    $cadena = str_replace(" or ", "", $cadena);
    $cadena = str_replace("order by", "", $cadena);
    $cadena = str_replace("union all", "", $cadena);
    $cadena = str_replace(" all ", "", $cadena);
    $cadena = str_replace("all ", "", $cadena);
    $cadena = str_replace(" all", "", $cadena);
    $cadena = str_replace(" and ", "", $cadena);
    $cadena = str_replace("select", "", $cadena);
    $cadena = str_replace("delete", "", $cadena);
    $cadena = str_replace("concat ", "", $cadena);
    $cadena = str_replace(" concat", "", $cadena);
    $cadena = str_replace("from ", "", $cadena);
    $cadena = str_replace("schema", "", $cadena);
    $cadena = str_replace("distinct", "", $cadena);
    $cadena = str_replace("load", "", $cadena);
    $cadena = str_replace("table_name", "", $cadena);
    $cadena = str_replace("group_concat", "", $cadena);
    $cadena = str_replace("replace", "", $cadena);
    $cadena = str_replace("ascii", "", $cadena);
    $cadena = str_replace("substring", "", $cadena);

    $cadena = str_replace("script", "", $cadena);

    return $cadena;
}

?>
