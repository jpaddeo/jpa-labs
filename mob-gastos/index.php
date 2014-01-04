<html>
    <head>
        <meta charset="utf-8" />
        <title>Control Gastos</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        
        <style type="text/css">
            #center_content {
                text-align: center;
                min-height: 400px;
            }
            #dashboard {
                width: 250px;
                margin: 0px auto;
                display: block;
                clear: both;
                text-align: center;
            }
            .dashboard_icon {
                display: block;
                padding: 15px;
                float: left;
                width: 32px;
                height: 32px;
            }
        </style>
        
    </head>
    <body>
        <div data-role="page" data-theme="a" id="index" data-backbtn="false">
            <div data-role="header" data-theme="a">
                <h1>Dahsboard - Gastos</h1>
            </div>
            <div data-role="content" data-theme="a">
                <div id="center_content">
                    <div id="dashboard">
                        <a href="forms/gastos_nuevos.php"><img src="css/images/gastos_nuevo.png" class="dashboard_icon"/></a>
                        <a href="forms/gastos_listado.php"><img src="css/images/gastos_ver.png" class="dashboard_icon"/></a>
                        <a href="forms/gastos_config.php"><img src="css/images/gastos_config.png" class="dashboard_icon"/></a>
                    </div>
                </div>
            </div>
            <div data-role="footer" data-theme="a">
                <h1>Version 1.0</h1>
            </div>
        </div>
    </body>
</html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
