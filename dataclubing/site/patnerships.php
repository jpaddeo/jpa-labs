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
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
        <?php 
        $activo = 'about';
        include("header.php"); 
        ?>
    </header>
    <!-- End: HEADER -->
    <!-- Start: Main content -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Patnerships <small>Caption for the patnerhsip</small></h1>
        </div>
        <div class="row bottom-space">            
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>            
          </div>
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>            
          </div>                        
        </div>
        <div class="row bottom-space">
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>             
          </div>
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>          
          </div>                        
        </div>
        <div class="row">
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>           
          </div>
          <div class="span6">
            <a href="#"><img src="http://placehold.it/200x100" class="bottom-space-less thumbnail"></a>
            <p>
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
              Short discription about your patnet.Short discription about your patnet.
            </p>             
          </div>                        
        </div>
      </div>
    </div>
    <!-- End: Main content -->
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
