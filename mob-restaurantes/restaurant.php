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
        <div id="restau" data-role="page" data-add-back-btn="true">
            <div data-role="header"> 
                <h1>Busc&aacute;te un Almuerzo</h1>
            </div> 

            <div data-role="content">
                <div class="ui-grid-a" id="restau_infos">	
                    <div class="ui-block-a">
                        <h1> Le Mouffetard</h1>
                        <p><strong>  Restaurant bar in the center of Strasbourg</strong></p>
                        <p> On the menu: </p>
                        <ul> 
                            <li> Milkshake with chocolat</li>
                            <li> Planchettes </li>
                            <li> Leek pie </li>
                        </ul>			
                    </div>		
                    <div class="ui-block-b">
                        <p><img src="restau01.jpg" alt="jeannette photo"/></p>
                        <p><a href="http://www.google.fr" rel="external" data-role="button"> See our website</a></p>
                    </div>
                </div><!-- /grid-a -->
                <hr/>

                <div class="ui-grid-a" id="contact_infos">	
                    <div class="ui-block-a">
                        <h2> Contact us</h2>
                        <p>30 Rue des Tonneliers</p>
                        <p> 67000 Strasbourg	</p>		
                    </div>		
                    <div class="ui-block-b">
                        <img src="01_maps.jpg" alt="plan jeanette"/>
                    </div>
                </div><!-- /grid-a -->
                <div id="contact_buttons">	
                    <a href="http://maps.google.fr/maps?q=jeannette+et+les+cycleux&hl=fr&sll=46.75984,1.738281&sspn=10.221882,18.764648&hq=jeannette+et+les+cycleux&t=m&z=13&iwloc=A" data-role="button" data-icon="maps"> Find us on Google Maps </a> 	
                    <a href="tel:0388161072"  data-role="button" data-icon="tel"> Call us </a>	
                </div>	
                <hr/>

                <div id="notation">
                    <form>
                        <label for="select-choice-0" class="select"><h2> User rating </h2></label>
                        <select name="note_utilisateur" id="note_utilisateur" data-native-menu="false" data-theme="c" >
                            <option value="one" class="one"> Not good at all </option>
                            <option value="two" class="two">Average </option>
                            <option value="three" class="three">Pretty good </option>
                            <option value="four" class="four"> Excellent </option>
                        </select>	
                    </form>
                </div>


                <script type="text/javascript">
                    $( '#restau' ).live( 'pageinit',function(event){
                        var SelectedOptionClass = $('option:selected').attr('class');
                        $('div.ui-select').addClass(SelectedOptionClass);
                        
                        $('#note_utilisateur').live('change', function() {
                            $('div.ui-select').removeClass(SelectedOptionClass);
                            SelectedOptionClass = $('option:selected').attr('class');
                            $('div.ui-select').addClass(SelectedOptionClass);
                        });
                    });
                </script>
            </div>
        </div><!-- /page -->
    </body>
</html>