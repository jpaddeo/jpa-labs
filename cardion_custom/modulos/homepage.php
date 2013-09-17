<?php 
require_once '../includes/config.php'; 
require_once HOME_PATH . '/includes/funciones_session.php'; 

if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: " . WEB_HOST . WEB_PATH . "/index.php");
    exit;
}

global $primary_db;

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo WEB_HOST . WEB_PATH . "/vendor/foundation/css/foundation.css" ?>" />
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">
                <?php require_once HOME_PATH .'/includes/app_header.php'; ?>
                <?php require_once HOME_PATH. '/includes/app_menu.php'; ?>
               

                <div class="row"> <!-- contendero del cuerpo (es variable por eso no lo saque a un .php)
                    <!-- Body -->
                    <div class="large-8 columns">
                        <div class="row">

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/1000x1000&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/500x500&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/500x500&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/500x500&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/500x500&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>

                            <div class="large-4 small-6 columns">
                                <img src="http://placehold.it/500x500&text=Thumbnail">

                                <div class="panel">
                                    <h5>Item Name</h5>
                                    <h6 class="subheader">$000.00</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Thumbnails -->

                    </div>
                    <!-- End Body -->
                    
                </div>
                
            </div>
            <?php require_once HOME_PATH. '/includes/app_footer.php'; ?>
        </div>
    </div>
    <?php require_once HOME_PATH . '/includes/includes_js.php'; ?>
    <!--
    <script src="/jpa/projects/cardion/vendor/jquery/jquery-1.10.0.min.js"></script>
    <script src="/jpa/projects/cardion/vendor/foundation/js/foundation.min.js"></script>
    -->
    <script type="text/javascript">
        $(document).foundation();
    </script>
</body>
</html>
