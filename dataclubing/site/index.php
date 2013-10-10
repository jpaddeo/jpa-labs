<?php include("inc/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bootbusiness | Short description about company">
        <meta name="author" content="Your name">
        <title><?php echo TITLE; ?></title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap responsive -->
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <!-- Font awesome - iconic font with IE7 support --> 
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/font-awesome-ie7.css" rel="stylesheet">
        <!-- Bootbusiness theme -->
        <link href="css/boot-business.css" rel="stylesheet">
    </head>
    <body>
        <!-- Start: HEADER -->
        <header>
            <?php include("header.php"); ?>
        </header>
        <!-- End: HEADER -->
        <!-- Start: MAIN CONTENT -->
        <div class="content">
            <!-- Start: PRODUCT LIST -->
            <div class="container">
                <div class="page-header">
                    <h2>Nuestros Servicios</h2>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="img/normalizacion.png" alt="product name">
                                <div class="caption">
                                    <h3>Normalización de Datos</h3>
                                    <p>
                                        Nos especializamos en normalizar Modelo de Datos y de Negocios existentes, basándonos en las mejores prácticas y adaptándolo a las necesidades principales de cada Cliente.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="img/migracion.png" alt="product name">
                                <div class="caption">
                                    <h3>Migración de Datos</h3>
                                    <p>
                                        Nos especializamos en realizar la migración de datos existentes. No sólo garantizamos la migración, si no también la consistencia y el modelado de los datos.
                                    </p>
                                </div>
                            </div>
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
