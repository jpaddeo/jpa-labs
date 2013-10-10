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

//function cargarOptionsConsulta($consulta, $sel = "-10") {
//    global $primary_db;
//    $sql = $consulta;
//    $res = $primary_db->select($sql);
//    $salida = '<option value=""></option>';
//    while ($row = $primary_db->get_row($res)) {
//        $linea = '<option value="' . $row[0] . '"';
//        if ($sel != "none") {
//            if ($sel == $row[0]) {
//                $linea .= " selected";
//            }
//        }
//        $linea .= ">" . $row[1] . "</option>";
//        $salida .= $linea;
//    }
//    return $salida;
//}

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

function getDatosDeUsuario($id_usuario) {
    global $primary_db;
    $result = array();
    if (!empty($id_usuario)) {
        $sql_usuario = "SELECT id, nombre, date_format(anios_experiencia,'%d/%m/%Y') as anios_experiencia, web,
                        email, contrasenia, telefono, celular,
                        saldo_logo, logo, estado, saldo_buscador  
                        FROM usuarios 
                        WHERE id = " . $id_usuario;
        $datos_usuario = $primary_db->select($sql_usuario);
        while ($row = $primary_db->get_row($datos_usuario)) {
            $result[] = $row;
        }
    }
    return $result;
}

function getServiciosParaUsuario($id_usuario) {
    global $primary_db;
    $result = array();
    if (!empty($id_usuario)) {
        $sql_servicios = "SELECT SRV.*,A.id AS id_tema, A.area, T.id AS id_tema, T.tema FROM servicios SRV
                          LEFT JOIN temas_areas TA ON SRV.id_tema_area = TA.id 
                          LEFT JOIN temas T ON TA.id_tema = T.id
                          LEFT JOIN areas A ON TA.id_area = A.id
                          WHERE SRV.id_usuario = " . $id_usuario;
        $datos_servicios = $primary_db->select($sql_servicios);
        while ($row = $primary_db->get_row($datos_servicios)) {
            $result[] = $row;
        }
    }
    return $result;
}

function getDireccionesParaUsuario($id_usuario) {
    global $primary_db;
    $result = array();
    if (!empty($id_usuario)) {
        $sql_dirs = "SELECT DIR.direccion, DIR.id AS id_direccion, 
                            LOC.localidad, LOC.id AS id_localidad, 
                            PRV.provincia, PRV.id AS id_provincia, 
                            PS.pais, PS.id AS id_pais
                     FROM direcciones DIR
                     LEFT JOIN localidades LOC ON DIR.id_localidad = LOC.id 
                     LEFT JOIN provincias PRV ON LOC.id_provincia = PRV.id
                     LEFT JOIN paises PS ON PRV.id_pais = PS.id
                     WHERE DIR.id_usuario = " . $id_usuario;
        $datos_dirs = $primary_db->select($sql_dirs);
        while ($row = $primary_db->get_row($datos_dirs)) {
            $result[] = $row;
        }
    }
    return $result;
}

function validarPasswordDeUsuario($id_usuario, $pass) {
    global $primary_db;
    $cant_user = 0;

    if (!empty($id_usuario) && !empty($pass)) {
        $sql_usuario = "SELECT COUNT(id) 
                        FROM usuarios 
                        WHERE id = " . $id_usuario . " AND contrasenia = '" . md5($pass) . "'";
        $cant_user = $primary_db->select_one($sql_usuario);
    }
    return ($cant_user > 0);
}

function validarPasswordAdmin($pass) {
    global $primary_db;
    $cant_user = 0;

    if (!empty($pass)) {
        $sql_usuario = "SELECT COUNT(id) 
                        FROM usuarios_administracion 
                        WHERE userpass = '" . md5($pass) . "'";
        $cant_user = $primary_db->select_one($sql_usuario);
    }
    return ($cant_user > 0);
}

function validarUsuario($user_name) {
    global $primary_db;
    $cant_user = 0;

    if (!empty($user_name)) {
        $sql_usuario = "SELECT COUNT(id) FROM usuarios WHERE nombre = '$user_name'";
        $cant_user = $primary_db->select_one($sql_usuario);
    }
    return ($cant_user > 0);
}

function validarMailUsuario($email) {
    global $primary_db;
    $cant_user = 0;

    if (!empty($email)) {
        $sql_usuario = "SELECT COUNT(id) FROM usuarios WHERE email = '$email'";
        $cant_user = $primary_db->select_one($sql_usuario);
    }
    return ($cant_user > 0);
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

function eliminarDireccionPorId($id_dir) {
    global $primary_db;

    $sql_del_dir = "DELETE FROM direcciones WHERE id = $id_dir";
    $can_del = $primary_db->delete_sql($sql_del_dir);

    return $can_del;
}

function actualizarDireccionDeUsuario($dir, $id_dir, $id_loc) {
    global $primary_db;

    $sql_upd_dir = "UPDATE direcciones 
                    SET direccion = '$dir', id_localidad = $id_loc 
                    WHERE id = $id_dir";
    $cant_upd = $primary_db->update_sql($sql_upd_dir);

    return ($cant_upd > 0);
}

function agregarDireccionDeUsuario($dir, $id_loc, $id_usu) {
    global $primary_db;

    $sql_insert_dir = "INSERT INTO direcciones (direccion, id_localidad, id_usuario)
                       VALUES ('$dir', $id_loc, $id_usu)";
    $id_dir = $primary_db->insert_sql($sql_insert_dir);

    return $id_dir;
}

function actualizarDatosGeneralesUsuario($id_usuario, $usuario, $anios_experiencia, $sitio_web, $email, $telefono, $celular) {
    global $primary_db;

    $sql_upd_usu = "UPDATE usuarios 
                    SET nombre = '$usuario',
                    anios_experiencia = '" . ConvertirFechaYMD($anios_experiencia) . "',
                    web = '$sitio_web',
                    email = '$email',
                    telefono = '$telefono',
                    celular = '$celular'
                    WHERE id = $id_usuario";
    $cant_upd = $primary_db->update_sql($sql_upd_usu);

    return ($cant_upd > 0);
}

function actualizarServicioDeUsuario_Cap($id_usu, $id_srv, $cap_mod, $cap_dur, $cap_dest, $cap_lug, $cap_obj, $cap_cont, $cap_cert, $cap_req_apr, $cap_req_des, $cap_mat) {
    global $primary_db;

    $sql_upd_srv = "UPDATE servicios 
                    SET capacitacion = 1, 
                    capacitacion_modalidad = '$cap_mod', 
                    capacitacion_duracion = '$cap_dur', 
                    capacitacion_destinatarios = '$cap_dest',
                    capacitacion_lugar = '$cap_lug', 
                    capacitacion_objetivos = '$cap_obj',
                    capacitacion_contenido = '$cap_cont', 
                    capacitacion_certificado = '$cap_cert', 
                    capacitacion_req_aprobacion = '$cap_req_apr', 
                    capacitacion_req_desarrollo = '$cap_req_des',
                    capacitacion_material = '$cap_mat'
                    WHERE id = $id_srv";
    $cant_upd = $primary_db->update_sql($sql_upd_srv);

    return ($cant_upd > 0);
}

function actualizarServicioDeUsuario_Ase($id_usu, $id_srv, $ase_dest, $ase_obj, $ase_srv, $ase_req_des) {
    global $primary_db;

    $sql_upd_srv = "UPDATE servicios 
                    SET asesoria = 1, 
                    asesoria_destinatarios = '$ase_dest', 
                    asesoria_objetivos = '$ase_obj', 
                    asesoria_servicios = '$ase_srv',
                    asesoria_req_desarrollo = '$ase_req_des' 
                    WHERE id = $id_srv";
    $cant_upd = $primary_db->update_sql($sql_upd_srv);

    return ($cant_upd > 0);
}

function eliminarServicioDeUsuario($id_usu, $id_srv) {
    global $primary_db;

    $sql_del = "DELETE FROM servicios WHERE id = $id_srv";
    $can_del = $primary_db->delete_sql($sql_del);

    return $can_del;
}

function crearServicioUsuarioParaAreaTema($id_usu, $id_area, $id_tema) {
    global $primary_db;

    $sql_tema_area = "SELECT id FROM temas_areas WHERE id_area = $id_area AND id_tema = $id_tema";
    $id_tema_area = $primary_db->select_one($sql_tema_area);
    $sql_ins = "INSERT INTO servicios (id_usuario, id_tema_area)
                VALUES ($id_usu, $id_tema_area)";
    $id_srv = $primary_db->insert_sql($sql_ins);

    return $id_srv;
}

?>
