<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="UTF-8">
	<title>Restaurant Picker</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="jquery.mobile.structure-1.0.1.css" />
	<link rel="apple-touch-icon" href="images/launch_icon_57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/launch_icon_72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/launch_icon_114.png" />
	<link rel="stylesheet" href="jquery.mobile-1.0.1.css" />
	<link rel="stylesheet" href="custom.css" />
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.min.js"></script>
</head> 
<body> 
<div id="choisir_restau" data-role="page" data-add-back-btn="true">
	
	<div data-role="header"> 
		<h1> Restaurant Picker</h1>
	</div> 

	<div data-role="content">
	
	<div class="choice_list"> 
	<h1> Choix du restaurant </h1>
	
	<ul data-role="listview" data-inset="true" >
	<li><a href="restaurant.html" data-transition="slidedown"> <img src="restau01_mini.jpg"/> <h2> Jeannette et les cycleux </h2> <p class="classement four"> 4 étoiles </p></a></li>
	<li><a href="restaurant.html" data-transition="slidedown"> <img src="restau02_mini.jpg "/> <h2> Chocolate bar  </h2> <p class="classement four"> 4 étoiles </p> </a></li>
	<li><a href="restaurant.html" data-transition="slidedown"> <img src="restau03_mini.jpg "/> <h2> Mac Donald's</h2> <p class="classement one"> 1 étoiles </p> </a></li>
	<li><a href="restaurant.html" data-transition="slidedown"> <img src="restau04_mini.jpg "/> <h2> Tai Shan</h2> <p class="classement three"> 3 étoile </p> </a></li>
	<li><a href="restaurant.html" data-transition="slidedown"> <img src=" restau05_mini.jpg"/> <h2> Aux 40 Gourmands</h2> <p class="classement two"> 2 étoiles </p> </a></li>
	</ul>	
	
	</div>
	</div>

</div><!-- /page -->
</body>
</html>