<?php

//require_once '../libs/config/config.php';
//require_once HOME_PATH . '/libs/includes/func.inc.php';
//require_once HOME_PATH . '/libs/includes/sql.php';
////Envio mail, registro info y vuelvo
//
//global $primary_db;
//
//function validoPostMail() {
//    $result = isset($_POST['nombre']) && (!empty($_POST['nombre']));
//    $result = $result && isset($_POST['email']) && (!empty($_POST['email']));
//    $result = $result && isset($_POST['mensaje']) && (!empty($_POST['mensaje']));
//    return $result;
//}
//
//if (validoPostMail()) {
//    $nombre = escapeString($_POST['nombre']);
//    $email = escapeString($_POST['email']);
//    $consulta = escapeString($_POST['mensaje']);
//    
//    $mail_from_name = $nombre;
//    $mail_form = $email;
//    $mail_to = "dataclubing@gmail.com";
//    $mail_subject = "[CONTACTAME] - Nueva Solicitud de Contacto";
//    $mail_body = "Usuario: " . $nombre . "\n";
//    $mail_body .= "E-Mail: " . $email . "\n";
//    $mail_body .= "---------------------------------------------------------\n";
//    $mail_body .= "Consulta: " . $consulta . "\n";
//    $mail_estado = "SIN_ENVIAR";
//    
//    $sql_mensaje = "INSERT INTO mensajes 
//                    (em_fecha, em_fecha_envio, em_from, em_from_nombre, em_to, em_subject, em_body, em_estado)
//                    VALUES 
//                    (NOW(),NOW(), '" . escapeString($mail_form) . "', '" . escapeString($mail_from_name) . "', '" . escapeString($mail_to) . "', '" . escapeString($mail_subject) . "', '" . escapeString($mail_body) . "', '" . escapeString($mail_estado) . "')";
//    $primary_db->insert_sql($sql_mensaje);
//    header("Location: " . WEB_HOST . WEB_PATH . "contact_us.php");
//    exit;
////    if ($primary_db->get_last_errorno() == 0) {
////        
////        header("Location: " . WEB_HOST . WEB_PATH . "/contacto/index_envio_correcto.php");
////        exit;
////    } else {
////        header("Location: " . WEB_HOST . WEB_PATH . "/error.php");
////        exit;
////    }
//}
?>