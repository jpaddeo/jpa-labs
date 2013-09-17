<?php

function createmenu_byid($id) {
    global $primary_db;
    if ($id != 0) {
        $sumarows = $id;
        $query = "Select m.*,
                        (select count(*) from menues m1 where m1.menu_id_padre = m.menu_id) as cant
                    From menues m
                        inner join perfiles_menues pm
                        on m.menu_id = pm.menu_id
                        inner join usuarios u
                        on pm.perfil_id = u.perfil_id
                    Where m.menu_id_padre = $id
                        and m.menu_activo = 1
                        and u.usuario_id = " . $_SESSION['usuario_logueado'] . "
                    Order by m.menu_orden;";
        $rsMenu[$sumarows] = $primary_db->select($query);
        echo '<ul class="dropdown">';

        while ($filas[$sumarows] = $primary_db->get_row($rsMenu[$sumarows])) {
            $id = $filas[$sumarows]["menu_id"];
            $nombre = $filas[$sumarows]["menu_nombre"];
            $cant_hijos = $filas[$sumarows]["cant"];
            $enlace = $filas[$sumarows]["menu_link"];

            if ($enlace == "-") {
                
            } else {
                if ($cant_hijos > 0) {
                    echo '<li class="has-dropdown">';
                    echo '<a href="' . WEB_HOST . WEB_PATH . $enlace . '">' . $nombre . '</a>';
                    createmenu_byid($id);
                } else {
                    echo '<li>';
                    echo '<a href="' . WEB_HOST . WEB_PATH . $enlace . '">' . $nombre . '</a>';
                }
                echo '</li>';
            }
        }
        echo '<li class="divider"></li>';
        echo '</ul>';
    }
}
?>
<!-- Menu -->
<div class="row">
    <div class="large-12 columns">
        <nav class="top-bar">
            <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="left">
                    <li class="divider"></li>
                    <li><a href="<?php echo WEB_HOST . WEB_PATH; ?>/modulos/homepage.php">Inicio</a></li>
                    <li class="divider"></li>
                    <?php
                    $query = "Select m.*,
                              (select count(*) from menues m1 where m1.menu_id_padre = m.menu_id) as cant
                              From menues m inner join perfiles_menues pm on m.menu_id = pm.menu_id
                                    inner join usuarios u on pm.perfil_id = u.perfil_id
                              Where m.menu_id_padre = 0 and m.menu_activo = 1
                                    and u.usuario_id = " . $_SESSION['usuario_logueado'] . "
                              Order by m.menu_orden";
                    $rsMenu = $primary_db->select($query);
                    while ($filas = $primary_db->get_row($rsMenu)) {
                        $id = $filas["menu_id"];
                        $enlace = $filas["menu_link"];
                        $name_label = $filas["menu_nombre"];
                        $cant_hijos = $filas["cant"];
                        if ($name_label == '') {
                            $name_label = $filas["menu_nombre"];
                        }

                        if ($enlace == "-") {
                            if ($cant_hijos > 0) {
                                echo '<li class="has-dropdown">';
                                echo '<a href="#">' . $name_label . '</a>';
                                createmenu_byid($id);
                            } else {
                                echo '<li>';
                                echo '<a href="#">' . $name_label . '</a>';
                            }
                            echo '</li>';
                            echo '<li class="divider"></li>';
                        } else {
                            echo '<li>';
                            echo '<a href="' . WEB_HOST . WEB_PATH . $enlace . '">' . $name_label . '</a>';
                            echo '</li>';
                            echo '<li class="divider"></li>';
                        }
                    }
                    ?>
                    <li><a href="<?php echo WEB_HOST . WEB_PATH; ?>/logout.php">Salir</a></li>
                </ul>
            </section>
        </nav>
        <!-- End Top Bar -->
    </div>
</div>
<!-- End Menu -->