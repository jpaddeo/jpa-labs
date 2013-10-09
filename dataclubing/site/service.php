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
        $activo = 'products&services';
        include("header.php"); 
        ?>
    </header>
    <!-- End: HEADER -->
    <!-- Start: Main content -->
    <div class="content">     
      <div class="container">
        <!-- Start: Service description -->
        <article class="article"> 
          <div class="row bottom-space">
            <div class="span12">
              <div class="page-header">
                <h1>Service <small>Caption for the service</small></h1>
              </div>
            </div>
            <div class="span12 center-align">
              <img src="http://placehold.it/800x300" class="thumbnail product-snap">            
            </div>
          </div>
          <div class="row bottom-space">
            <div class="span10 offset1">
              <p>
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
              </p>
              <p>
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
              </p>
              <p>
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
                Detailed description about the service that how it makes the customer's life easy.
              </p>           
              <div class="span8 offset1">
                <h3>Fetures of service</h3>
                <ul class="features">
                  <li>
                    <i class="icon-ok "></i>24 hrs support
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>
                  <li>
                    <i class="icon-ok "></i>unlimited download
                  </li>                  
                </ul>
              </div>                                              
            </div>      
          </div>
          <div class="row">
            <div class="span10 offset1">
              <hr>
              <div class="span3">
                <p>
                  Ready to start the innovation?
                </p>
                <a class="btn btn-large btn-block" href="#">Try now</a>
              </div>
              <div class="span3">
                <p>
                  Got confused?
                </p>
                <a class="btn btn-large btn-block" href="contact_us.html">Contact us</a>
              </div>
              <div class="span3">
                <p>
                  Check frequently asked question
                </p>
                <a class="btn btn-large btn-block" href="faq.html">FAQ</a>
              </div>              
            </div>
          </div>
        </article>
        <!-- End: Service description -->
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
