<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php wp_head(); ?>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ──────────────────────── -->
    <!--     GOOGLE ANALYTICS     -->
    <!-- ──────────────────────── -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122678366-1"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-122678366-1');
    </script>

    <meta name="google-site-verification" content="GTh7Fnv0lb4CatOU9Jb9QaOPexTwceN5Jd37El5VYo4" />
    
</head>
<body <?php body_class(); ?>>

    <!-- Google Tag Manager -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9GTF7B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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

        <header id="portada">

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