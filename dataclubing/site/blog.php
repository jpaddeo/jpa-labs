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
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>The Bootbusiness Blog</h1>
        </div>
        <div class="row">
          <div class="span7">
            <article class="post-row article">
              <h3>
                <a href="post.html">Awesome post-row tilte goes here</a>
                <small>by username on October 2, 2012</small>
              </h3>
              <img src="http://placehold.it/650x300" class="thumbnail bottom-space">
              <p>
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content
              </p>
              <p>
                Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
              </p>
            </article>
            <article class="post-row article">
              <h3>
                <a href="post.html">Awesome post-row tilte goes here</a>
                <small>by username on October 2, 2012</small>
              </h3>
              <img src="http://placehold.it/650x300" class="thumbnail bottom-space">
              <p>
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content
              </p>
              <p>
                Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
              </p>
            </article>
            <article class="post-row article">
              <h3>
                <a href="post.html">Awesome post-row tilte goes here</a>
                <small>by username on October 2, 2012</small>
              </h3>
              <img src="http://placehold.it/650x300" class="thumbnail bottom-space">
              <p>
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content
              </p>
              <p>
                Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
              </p>
            </article>
            <article class="post-row article">
              <h3>
                <a href="post.html">Awesome post-row tilte goes here</a>
                <small>by username on October 2, 2012</small>
              </h3>
              <img src="http://placehold.it/650x300" class="thumbnail bottom-space">
              <p>
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content
              </p>
              <p>
                Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
              </p>
            </article>
            <article class="post-row article">
              <h3>
                <a href="post.html">Awesome post-row tilte goes here</a>
                <small>by username on October 2, 2012</small>
              </h3>
              <img src="http://placehold.it/650x300" class="thumbnail bottom-space">
              <p>
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content
              </p>
              <p>
                Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
                Post content.Post content.Post content.Post content.
              </p>
            </article>
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
          <div class="span4 pull-right sidebar">
            <form class="form-search">
              <div class="input-append">
              <input type="text" class="span2 search-query" placeholder="Search posts">
              <button type="submit" class="btn"><i class="icon-search"></i></button>
              </div>
            </form>
            <h5>Recent posts</h5>
            <h4>
              <a href="post.html">Link to recent post1</a><br>
              <small>username on October 2, 2012</small>
            </h4>
            <h4>
              <a href="post.html">Link to recent post2</a><br>
              <small>username on October 2, 2012</small>
            </h4>
            <h4>
              <a href="post.html">Link to recent post3</a><br>
              <small>username on October 2, 2012</small>
            </h4>
            <h4>
              <a href="post.html">Link to recent post4</a><br>
              <small>username on October 2, 2012</small>
            </h4>
            <h4>
              <a href="post.html">Link to recent post5</a><br>
              <small>username on October 2, 2012</small>
            </h4>                                                   
          </div>          
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

    