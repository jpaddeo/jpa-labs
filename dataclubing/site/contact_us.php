<?php include("inc/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title><?php echo TITLE;?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
    <link href="css/tipsy.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
        <?php 
        $activo = 'contact_us';
        include("header.php"); 
        ?>
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contactame</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Mensajes</h2>
            </div>
            <form action="contact_us_accion.php" class="form-contact-us" method="post">
              <div class="control-group">
                <label>Nombre</label>
                <div class="controls">
                  <input type="text" id="nombre" placeholder="Nombre" original-title="Ingrese Nombre">
                </div>
              </div>
              <div class="control-group">
                  <label>Email</label>
                <div class="controls">
                  <input type="text" id="email" placeholder="Email" original-title="Ingrese Email">
                </div>
              </div>
              <div class="control-group">
                  <label>Mensaje</label>
                <div class="controls">
                  <textarea id="mensaje" placeholder="Mensaje" original-title="Ingrese Mensaje"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" onclick="return comprobar();" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Oficinas</h2>
            </div>
            <h3>Argentina</h3>
            <div>
              <address class="pull-left">
                <strong>DataClubing</strong><br>
                25 de Mayo s/n<br>
                C.A.B.A. - Buenos Aires<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (11) XXXXXXXXXX
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> info@dataclubing.com.ar
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <?php 
    include("footer.php"); 
    ?>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
    <script type="text/javascript" src="js/jquery.tipsy.min.js"></script>
    
    <script type='text/javascript'>
            function comprobar(){
                var ban=0;
                if($('#nombre').val()==''){
                    $('#nombre').tipsy({trigger: 'manual', gravity: 'w'});
                    $("#nombre").tipsy("show");
                    $('#nombre').focus(function() {$("#nombre").tipsy("hide");});
                    ban=1;
                }
                
                if($('#email').val()==''){
                    $('#email').tipsy({trigger: 'focus', gravity: 'w'});
                    $("#email").tipsy("show");
                    $('#email').focus(function() {$("#email").tipsy("hide");});
                    ban=1;
                }
                
                if($('#mensaje').val()==''){
                    $('#mensaje').tipsy({trigger: 'focus', gravity: 'w'});
                    $("#mensaje").tipsy("show");
                    $('#mensaje').focus(function() {$("#mensaje").tipsy("hide");});
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