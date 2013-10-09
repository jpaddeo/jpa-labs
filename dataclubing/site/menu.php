<ul class="nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle <?if($activo=='products&services'){echo 'active-link';}?>" data-toggle="dropdown">Productos y Servicios<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li class="nav-header">PRODUCTOS</li>
            <li><a href="product.php">Producto 1</a></li>
            <li><a href="all_products.php">Todos los productos</a></li>             
            <li class="divider"></li>
            <li class="nav-header">SERVICIOS</li>
            <li><a href="service.php">Servicio 1</a></li>
            <li><a href="all_services.php">Todos los servicios</a></li>
        </ul>                  
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle <?if($activo=='about'){echo 'active-link';}?>" data-toggle="dropdown">Acerca<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="our_works.php">Nuestro Trabajos</a></li>
            <li><a href="patnerships.php">Parnerships</a></li>
            <li><a href="leadership.php">Leadership</a></li>
            <li><a href="news.php">Noticias</a></li>
            <li><a href="events.php">Eventos</a></li>
            <li><a href="blog.php">Blog</a></li>
        </ul>
    </li>
    <li><a href="faq.php" <?if($activo=='faq'){echo 'class="active-link"';}?>>Preguntas Frecuentes</a></li>
    <li><a href="contact_us.php" <?if($activo=='contact_us'){echo 'class="active-link"';}?>>Contactame</a></li>
    <li><a href="signup.php" <?if($activo=='signup'){echo 'class="active-link"';}?>>Login</a></li>
    <li><a href="signin.php" <?if($activo=='signin'){echo 'class="active-link"';}?>>Registrarse</a></li>
</ul>