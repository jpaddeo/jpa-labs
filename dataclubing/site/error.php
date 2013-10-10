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
    <style>
        .wrap-message{
            border: 1px solid #000;
            border-radius: 8px 8px 8px 8px; 
            overflow: hidden;
            margin: 10px auto 10px;
            padding: 10px;
        }
        .wrap-message .content-buttons{
            text-align:center;
        }
    </style>
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
        <?php include("header.php"); ?>
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
              </li>
              <li class="span4">
                <div id="pageSuccess" class="wrap-message" style="">
                    <div class="content success"> 
                        <h2>Error</h2>
                        <div class="texto">
                            <p><strong>Por favor vuelva a intentar luego, disculpe las molestia.</strong></p>
                            <p></p>
                        </div>            
                    </div>
                    <div id="pageSuccessActions" class="content-buttons">
                        <div id="continuar">
                            <button class="btn btn_buscador" type="submit" onclick="document.location='index.php';">Continuar</button>
                        </div>
                    </div>
                </div>
              </li>
              <li class="span4">
              </li>
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
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
  </body>
</html>
