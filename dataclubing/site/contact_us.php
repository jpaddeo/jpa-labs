<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Bootbusiness | Give unique title of the page here</title>
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
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.php" class="brand brand-bootbus">Bootbusiness</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <?php 
              $activo = 'contact_us';
              include("menu.php"); 
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
            <form class="form-contact-us">
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <textarea id="inputMessage" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Offices</h2>
            </div>
            <h3>North America</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                USA<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Europe</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                UK<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Asia</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                India<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
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
  </body>
</html>