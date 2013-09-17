<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo WEB_HOST . WEB_PATH . "/vendor/foundation/css/foundation.css" ?>" />
        <link rel="stylesheet" href="<?php echo WEB_HOST . WEB_PATH . "/vendor/tipsy/tipsy.css" ?>" />
    </head>
    <body>
        <form method="post" action="index_accion.php">
            <div class="row" style="margin-top: 100px;">
                <div class="large-12 columns">
                    <div class="row">
                        <!-- Contact Details -->
                        <div class="large-2 small-6 columns"><p></p></div>
                        <div class="large-7 small-6 columns">
                            <div data-section="" class="section-container auto">
                                <section class="section active" style="padding-top: 53px;">
                                    <h5 class="title" style="left: 0px;"><a href="#panel1">Ingresar al Sistema</a></h5>
                                    <div data-slug="panel1" class="content" style="">
                                        <div class="row collapse">
                                            <div class="large-2 columns">
                                                <label class="inline">Usuario</label>
                                            </div>
                                            <div class="large-10 columns">
                                                <input type="text" placeholder="Ingrese Usuario" id="usuario" name="usuario" original-title="Ingrese Usuario" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row collapse">
                                            <div class="large-2 columns">
                                                <label class="inline"> Contraseña</label>
                                            </div>
                                            <div class="large-10 columns">
                                                <input type="password" placeholder="Ingrese Contraseña" id="pass" name="pass" original-title="Ingrese Contraseña" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="alert-box secondary" data-alert="" id="info"></div>
                                        <?php
                                        if (isset($_GET['key_mensaje']) && !empty($_GET['key_mensaje'])) {
                                            $key_mensaje = $_GET['key_mensaje'];
                                            switch ($key_mensaje) {
                                                case md5('NO_EXISTE_USER'):
                                                    $mensaje = '<div class="alert-box secondary" data-alert="" id="info_user">&raquo; El Usuario no Existe</div>';
                                                    break;
                                                case md5('POST_INVALIDO'):
                                                    $mensaje = '<div class="alert-box secondary" data-alert="" id="info_user">&raquo; Post Invalido</div>';
                                                    break;
                                                default:
                                                    break;
                                            }
                                        }
                                        echo $mensaje;
                                        ?>
                                        <div style="text-align: right;">
                                            <button class="radius button" type="submit" onclick="return login();">Ingresar</button>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class="large-2 small-6 columns"><p></p></div>
                    </div>
                </div>
            </div>
        </form>
        <?php require_once 'includes/includes_js.php'; ?>
        <script type="text/javascript" src="<?php echo WEB_HOST . WEB_PATH; ?>/vendor/tipsy/jquery.tipsy.min.js?<?php echo NUMERO; ?>"></script>
        <!--
        <script src="/jpa/projects/cardion/vendor/jquery/jquery-1.10.0.min.js"></script>
        <script src="/jpa/projects/cardion/vendor/foundation/js/foundation.min.js"></script>
        -->
        <script type="text/javascript">
            $(document).foundation();
            
            
            $('#info').hide();
            
            function login(){
                var ban=0;
                $('#info').html('');
                $('#info').hide();
                $('#info_user').hide();
                if($('#usuario').val()==''){
                    $('#info').show();
                    $('#info').append('&raquo; Debe ingresar un Usuario<br>');
                    ban=1;
                }
                
                if($('#pass').val()==''){
                    $('#info').show();
                    $('#info').append('&raquo; Debe ingresar una Contraseña<br>');
                    ban=1;
                }
                if(ban==1){
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>
