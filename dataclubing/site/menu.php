<ul class="nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle <?if($activo=='products&services'){echo 'active-link';}?>" data-toggle="dropdown">Products and Services<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="nav-header">PRODUCTS</li>
            <li><a href="product.html">Product1</a></li>
            <li><a href="product.html">Product2</a></li>
            <li><a href="product.html">Product3</a></li>
            <li><a href="all_products.html">All products</a></li>             
            <li class="divider"></li>
            <li class="nav-header">SERVICES</li>
            <li><a href="service.html">Service1</a></li>
            <li><a href="service.html">Service2</a></li>
            <li><a href="service.html">Service3</a></li>
            <li><a href="all_services.html">All services</a></li>
        </ul>                  
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle <?if($activo=='about'){echo 'active-link';}?>" data-toggle="dropdown">About<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="our_works.php">Our works</a></li>
            <li><a href="patnerships.php">Parnerships</a></li>
            <li><a href="leadership.php">Leadership</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>
    </li>
    <li><a href="faq.php" <?if($activo=='faq'){echo 'class="active-link"';}?>>Preguntas Frecuentes</a></li>
    <li><a href="contact_us.php" <?if($activo=='contact_us'){echo 'class="active-link"';}?>>Contactame</a></li>
    <li><a href="signup.php" <?if($activo=='signup'){echo 'class="active-link"';}?>>Login</a></li>
    <li><a href="signin.php" <?if($activo=='signin'){echo 'class="active-link"';}?>>Registrarse</a></li>
</ul>