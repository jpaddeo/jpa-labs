<?php
require_once 'includes/config.php';
// require_once HOME_PATH . '/includes/config.sql.php';
require_once HOME_PATH . '/includes/funciones_generales.php';

function validoPostIngreso() {
    $result = isset($_POST['usuario']) && (!empty($_POST['usuario']));
    $result = $result && isset($_POST['pass']) && (!empty($_POST['pass']));
    return $result;
}

if (validoPostIngreso()) {
    global $primary_db;
    
    $usuario = escapeString($_POST['usuario']);
    $pass = escapeString($_POST['pass']);
    $sql_existe_usuario = "SELECT usuario_id, usuario_nombre, perfil_id, usuario_email 
                           FROM usuarios
                           WHERE usuario_password = MD5('$pass')
                           AND (usuario_login = '$usuario')
                           AND usuario_activo = 1";
    $datos_login = $primary_db->select($sql_existe_usuario);
    
    if($primary_db->get_row_count() == 1) {
        session_start();
        $row = $primary_db->get_row($datos_login);
        $_SESSION['usuario_logueado'] = $row['usuario_id'];
        $_SESSION['usuario_admin'] = $row['perfil_id'];
        $_SESSION['usuario_nombre'] = $row['usuario_nombre'];
        $_SESSION['usuario_email'] = $row['usuario_email'];
        
        $query = "Select m.menu_id
                  From menues m inner join perfiles_menues pm
                  ON m.menu_id = pm.menu_id
                  Where pm.perfil_id = " . $row["perfil_id"];

        $rsMenu = $primary_db->select($query);
        $VMenu_ID = '';
        while ($row = $primary_db->get_row($rsMenu)) {
            $VMenu_ID = $VMenu_ID . $row["id"] . ',';
        }
        $_SESSION['menu_id'] = substr($VMenu_ID, 0, strlen($VMenu_ID) - 1);
        
        
        header("Location: " . WEB_HOST . WEB_PATH . "/modulos/homepage.php");
    } else {
        header("Location: " . WEB_HOST . WEB_PATH . "/index.php?key_mensaje=" . md5("NO_EXISTE_USER"));
    }
    exit;
} else {
    header("Location: " . WEB_HOST . WEB_PATH . "/index.php?key_mensaje=" . md5("POST_INVALIDO"));
    exit;
}

?>
