<!DOCTYPE html>
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
        <script type="text/javascript" src="../js/gastos_nuevos.js"></script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-role="header" data-theme="a">
                <h1>
                    Nuevo Gasto
                </h1>
            </div>
            <div data-role="content" data-theme="c">
                <form id="callAjaxForm">
                    <div data-role="fieldcontain">
                        <label for="monto_gasto">Monto</label>
                        <input type="text" id="monto_gasto" name="monto_gasto" data-mini="true"  />
                    </div>
                    <div data-role="fieldcontain">                        
                        <label for="tipo_gasto">Tipo de Gasto</label>
                        <select id="tipo_gasto" name="tipo_gasto" data-native-menu="false">
                        </select>
                        <!-- <input type="text" id="tipo_gasto" name="tipo_gasto"  data-mini="true"  /> -->
                    </div>
                    <h3 id="resultado"></h3>
                    <button id="submit" type="submit" data-theme="b">Grabar</button>                    
                </form>                
                <!--
                <div id="form_nuevo_gasto">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="monto_gasto">
                                Monto
                            </label>
                            <input name="monto_gasto" id="monto_gasto" placeholder="" value="" type="number" />
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <label for="tipo_de_gasto">
                            Tipo Gasto
                        </label>
                        <select id="tipo_de_gasto" data-native-menu="false" name="tipo_de_gasto">
                        </select>
                    </div>
                    <input id="btn_grabar" type="submit" data-icon="arrow-r" data-iconpos="right" value="Grabar" />
                </div>
                <div id="resultado" style="display: none;">
                </div>
            </div>
                -->
                <div data-theme="a" data-role="footer" data-position="fixed">
                    <h1>
                        Version 1.0
                    </h1>
                </div>
            </div>
    </body>
</html>