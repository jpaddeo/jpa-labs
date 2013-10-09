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
              $activo = 'about';
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
        <article class="article">
          <div class="page-header">
            <h1>Leadership <small>Caption for the leadership</small></h1>
          </div>
          <div class="row">
            <div class="span10 offset1">            
              <div class="row bottom-space">
                <div class="span3 center-align">
                  <img src="http://placehold.it/200x200" class="thumbnail">
                </div>
                <div class="span7">
                  <p class="team-member-description">
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                  </p>
                </div>
              </div>
              <div class="row bottom-space">
                <div class="span3 center-align">
                  <img src="http://placehold.it/200x200" class="thumbnail">
                </div>
                <div class="span7">
                  <p class="team-member-description">
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="span3 center-align">
                  <img src="http://placehold.it/200x200" class="thumbnail">
                </div>
                <div class="span7">
                  <p class="team-member-description">
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                    Short discription about your team member.Short discription about your team member.
                  </p>
                </div>
              </div>                            
            </div>
          </div>
        <article>
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