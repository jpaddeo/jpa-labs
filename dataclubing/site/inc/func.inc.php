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

function crearID() {
    $id = md5(mt_rand());
    if (!isset($_SESSION['url_id'])) {
        $_SESSION['url_id'] = array();
    }
    while (array_key_exists($id, $_SESSION['url_id']) == true) {
        $id = md5(mt_rand());
    }
    return $id;
}

function getOptionsBanderasPaises() {
    $dir = HOME_PATH . "/img/iso";
    $dir_handle = opendir($dir);

    $html = "";
    while (false !== ($filename = readdir($dir_handle))) {
        if (($filename != '.') && ($filename != '..')) {
            $arr_file = explode('.', $filename);
            $iso = strtoupper($arr_file[0]);
            $ruta_imagen = WEB_HOST . WEB_PATH . "/img/iso/" . $filename;
            $html .= "<li onclick='setearValorISO(\"$iso\",\"$ruta_imagen\")'>";
            $html .= "<a href='#'><img src='" . $ruta_imagen . "' alt='" . $iso . "'>&nbsp;" . $iso . "</a>";
            $html .= "</li>";
        }
    }
    return $html;
}

function cargarOptions($tabla, $campo, $campoId, $sel = "-10") {
    global $primary_db;
    $sql = "SELECT $campoId,$campo FROM $tabla ORDER BY 2";
    $res = $primary_db->select($sql);
    $salida = '<option value=""></option>';
    while ($row = $primary_db->get_row($res)) {
        $linea = '<option value="' . trim($row[0]) . '"';
        if ($sel != "none") {
            if ($sel == trim($row[0])) {
                $linea .= " selected";
            }
        }
        $linea .= ">" . trim($row[1]) . "</option>";
        $salida .= $linea;
    }
    return $salida;
}

function cargarOptionsConsulta($consulta, $campo, $campoId, $sel = "-10") {

    $sql = $consulta;
    $res = mysql_query($sql);
    $salida = '';
    $salida = '<option value=""></option>';
    while ($row = mysql_fetch_row($res)) {
        $linea = '<option value="' . $row[0] . '"';
        if ($sel != "none") {
            if ($sel == $row[0]) {
                $linea .= " selected";
            }
        }
        $linea .= ">" . $row[1] . "</option>";
        $salida .= $linea;
    }
    return $salida;
}

function random_string($length, $ranges = array('0-9', 'a-z', 'A-Z')) {
    foreach ($ranges as $r) {
        $s .= implode(range(array_shift($r = explode('-', $r)), $r[1]));
    }
    while (strlen($s) < $length) {
        $s .= $s;
    }
    return substr(str_shuffle($s), 0, $length);
}

function random_string_2($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = str_shuffle($characters);
    return substr($characters, 0, $length);
}

function objectToArray($d) {
    if (is_object($d)) {
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        return array_map(__FUNCTION__, $d);
    } else {
        return $d;
    }
}

function arrayToObject($d) {
    if (is_array($d)) {
        return (object) array_map(__FUNCTION__, $d);
    } else {
        return $d;
    }
}

function getFileExtension($file_name) {
    $ext = explode('.', $file_name);
    $ext = array_pop($ext);
    return strtolower($ext);
}

function getTempLogoDeUsuario($key_registro) {
    $resultFile = "";

    $files = glob(TEMP_UPLOADS_DIR . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    foreach ($files as $fileName) {
        $fileSinExtension = current(explode(".", basename($fileName)));
        if ($fileSinExtension == $key_registro) {
            $resultFile = basename($fileName);
            break;
        }
    }

    return $resultFile;
}

function ConvertirFechaYMD($cadena) {
    if ($cadena != '') {
        $ListaDatos = explode('/', $cadena);
        $FechaNueva = $ListaDatos[2] . '-' . $ListaDatos[1] . '-' . $ListaDatos[0];
    } else {
        $FechaNueva = '--';
    }
    return $FechaNueva;
}
?>
