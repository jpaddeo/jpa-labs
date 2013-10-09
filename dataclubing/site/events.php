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
            <a href="index.html"hp class="brand brand-bootbus">Bootbusiness</a>
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
        <div class="page-header">
          <h1>The Bootbusiness Events</h1>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Oct<br>10</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Oct<br>10</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Oct<br>20</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Nov<br>1</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Nov<br>12</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Dec<br>10</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="row bottom-space">
          <div class="span1 offset1">
            <div class="circle">
              <span class="event-date">Dec<br>20</span>
            </div>
          </div>
          <div class="span9">
            <h4><a href="#">Link to the event</a></h4>
            <p>
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
              Description about your event.Description about your event.Description about your event.
            </p>
          </div>
        </div>
        <div class="pagination pagination-centered">
          <ul>
            <li class="disabled">
              <a href="#">&laquo;</a>
            </li>
            <li class="active">
              <a href="#">1</a>
            </li>
            <li>
              <a href="#">2</a>
            </li>
            <li>
              <a href="#">3</a>
            </li>
            <li>
              <a href="#">4</a>
            </li>
            <li>
              <a href="#">5</a>
            </li>
            <li>
              <a href="#">6</a>
            </li>
            <li>
              <a href="#">&raquo;</a>
            </li>
          </ul>
        </div>
      </div>
    <div>
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