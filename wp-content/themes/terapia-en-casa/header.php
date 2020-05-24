<!DOCTYPE html>
<head>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <!-- Spinner -->
    <div class="fondo-blanco">
        <div class="spinner">
            <div class="punto"></div>
            <div class="punto"></div>
            <div class="punto"></div>
        </div>
    </div>

    <div class="contenedor">

        <!-- ─────────────── -->
        <!--     PORTADA     -->
        <!-- ─────────────── -->

        <header class="portada">

            <!-- Menú de navegación -->
            <?php
                wp_nav_menu(

                    array(
                        'theme_location' => 'header-menu',
                        'container_id' => 'menu',
                        'menu_class' => 'items',
                    )
                );
            ?>

            <!-- Logo -->
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/casa.svg">

            <!-- Título -->
            <h1 class="titulo">Terapia en casa</h1>

            <!-- Enlaces a RRSS -->
            <?php dynamic_sidebar( 'redes-sociales' ); ?>

            <!-- Nubes -->
            <div class="nubes">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube1.png">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube2.png">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube3.png">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube4.png">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube5.png">
            </div>

        </header>