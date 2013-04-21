<!DOCTYPE html>
<?php
require_once 'libs/config.php';
require_once HOME_PATH . "/libs/db/sql.config.php";

function getMailUsuario($id_usu) {
    global $primary_db;

    if (!empty($id_usu)) {
        $sql_mail_usu = "SELECT email FROM usuarios WHERE id = $id_usu";
        $mail_usu = $primary_db->select_one($sql_mail_usu);
    }

    return $mail_usu;
}

function getNombreUsuario($id_usu) {
    global $primary_db;

    if (!empty($id_usu)) {
        $sql_nom_usu = "SELECT usuario FROM usuarios WHERE id = $id_usu";
        $nom_usu = $primary_db->select_one($sql_nom_usu);
    }

    return $nom_usu;
}

function getProductsHtml() {
    global $primary_db;

    $sql_prods = "SELECT id, nombre, id_usuario, 
                         visitas, imagen_portada, CONCAT(SUBSTR(descripcion, 1, 100), '...') as desc_cortada 
                  FROM productos";
    $res_prods = $primary_db->select($sql_prods);

    $html = '';
    while ($row = $primary_db->get_row($res_prods)) {
        $html .= '<div class="span3 article_border">';
        $html .= '<div class="article">';
        $html .= '<div class="article_title">';
        $html .= '<h4><strong><a href="' . WEB_HOST . WEB_PATH . '/productos/mas_info.php?id_prod=' . $row['id'] . '">' . $row['nombre'] . '</a></strong></h4>';
        $html .= '</div>';
        $html .= '<div class="article_details">';
        $html .= '<a href="#" class="thumbnail"><img src="' . WEB_HOST . WEB_PATH . '/img/' . $row['imagen_portada'] . '" /></a>';
        $html .= '<p>' . $row['desc_cortada'] . '</p>';
        $html .= '</div>';
        $html .= '<div class="article_info">';
        $html .= '<p><a class="btn" href="' . WEB_HOST . WEB_PATH . '/productos/mas_info.php?id_prod=' . $row['id'] . '">Más Info</a>&nbsp;&nbsp;';
        $html .= '<a class="btn btn-primary contactar" href="#"><i class="icon-envelope"></i></a></p>';
        $html .= '<div class="visitas">';
        $html .= '<i class="icon-user"></i> dueño <a href="' . WEB_HOST . WEB_PATH . '/usuarios/ver_perfil.php?id_usu=' . $row['id_usuario'] . '">' . getNombreUsuario($row['id_usuario']) . '</a>&nbsp;';
        $html .= '| <i class="icon-share"></i> <a href="' . WEB_HOST . WEB_PATH . '/productos/mas_info.php?id_prod=' . $row['id'] . '">' . $row['visitas'] . '</a>&nbsp;visitas';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    }

    return $html;
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="http://code.jquery.com/ui/jquery-ui-git.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
        <link href="css/custom.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#" name="top"><span class="logo"></span></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#"><i class="icon-home"></i> Inicio</a></li>
                            <li class="divider-vertical"></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li><a href="/signup">Registrarse</a></li>
                            <li class="divider-vertical"></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Ingresar <strong class="caret"></strong></a>
                                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                                    <form method="post" action="login" accept-charset="UTF-8">
                                        <input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
                                        <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                                        <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Entrar">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
        <div class="main">
            <div class="row">
                <?php echo getProductsHtml(); ?>
                <!--
                <div class="span3 article_border">
                    <div class="article">
                        <div class="article_title">
                            <h4><strong><a href="#">Title of the post</a></strong></h4>
                        </div>
                        <div class="article_details">
                            <a href="#" class="thumbnail">
                                <img src="img/260x180.gif" alt="">
                            </a>
                            <p>
                                Lorem ipsum dolor sit amet, id nec conceptam conclusionemque. Et eam tation option. Utinam salutatus ex eum. Ne mea dicit tibique facilisi, ea mei omittam explicari conclusionemque, ad nobis propriae quaerendum sea.
                            </p>                            
                        </div>
                        <div class="article_info">
                            <p><a class="btn" href="#">Read more</a>&nbsp;&nbsp;<a class="btn btn-primary" href="#"><i class="icon-envelope"></i></a></p>
                            <div class="visitas">
                                <i class="icon-user"></i> dueño <a href="#">Pepe</a> 
                                | <i class="icon-share"></i> <a href="#">39 Visitas</a>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
        <div id="dg-form_contacto" style="display: none;">
            <form id="form_contacto" class="well span8">
                <div class="row">
                    <div class="span3">
                        <div class="controls">
                            <div class="control-group">
                                <div class="input-prepend">
                                    <label for="usuario">Usuario: </label>
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input type="text" id="usuario" name="usuario">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="input-prepend">
                                    <label for="email">E-Mail: </label>
                                    <span class="add-on"><i class="icon-envelope"></i></span>
                                    <input type="text" id="email" name="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="control-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" class="input-xlarge span5" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/generales.js"></script>

    <script type="text/javascript">
        $(function() {
            $('.dropdown-menu').find('form').click(function(e) {
                e.stopPropagation();
            });
            $('a.contactar').click(function() {
                $("#dg-form_contacto").dialog({
                    width: 730,
                    buttons: {
                        "Enviar": function() {
                            var vFromName = true;
                            var vFrom = true;
                            var vMensaje = true;

                            if (empty($("#usuario").val())) {
                                vFromName = vFromName && false;
                            }

                            if (emailValido($("#email"), "email")) {
                                vFrom = vFrom && false;
                            }

                            if (empty($("#mensaje").val())) {
                                vMensaje = vMensaje && false;
                            }

                            if (vFromName && vFrom && vMensaje) {
                                $.ajax({
                                });
                            }
                        }
                    },
                    close: function() {
                        $("#usuario").val("");
                        $("#email").val("");
                        $("#mensaje").val("");
                    }
                });
                //$('#dg-form_contacto').dialog('open');
            });
        });
    </script>
</html>
