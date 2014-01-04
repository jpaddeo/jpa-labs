<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8">
        <title>Almuerzo Picker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css/jquery.mobile.structure-1.0.1.css" />
        <link rel="apple-touch-icon" href="css/images/launch_icon_57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="css/images/launch_icon_72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="css/images/launch_icon_114.png" />
        <link rel="stylesheet" href="css/jquery.mobile-1.0.1.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/jquery.mobile-1.0.1.min.js"></script>
    </head> 
    <body> 
        <div id="choisir_restau" data-role="page" data-add-back-btn="true">
            <div data-role="header"> 
                <h1>Busc&aacute;te un Almuerzo</h1>
            </div> 
            <div data-role="content">
                <div class="choice_list">
                    <h1>Seleccione un Restaurante...</h1>
                    <ul data-role="listview" data-inset="true" >
                        <?php
                            include_once('libs/obtener_restaurantes.php');
                        ?>
                    </ul>
                </div>
            </div>
        </div><!-- /page -->
    </body>
</html>