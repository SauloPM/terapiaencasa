<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php wp_head(); ?>

    <title>Terapia psicológica online | Primera sesión gratis | Respuesta en menos de 24h</title>

    <meta name="description" content="Terapia psicólogica de calidad y personalizada desde el confort de tu casa. Ahorra tiempo y dinero. La primera consulta es totalmente gratis, sin compromiso. Podemos ayudarte.">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">

    <meta charset="<?php bloginfo( 'charset' ); ?>">

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

            <!-- Menú de navegación en responsive -->
            <div class="menu-responsive">

                <div class="boton">
                    <div class="barra"></div>
                    <div class="barra"></div>
                    <div class="barra"></div>
                </div>

                <div class="items">

                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' )) ?>

                    <div class="cierre">
                        <div class="barra"></div>
                        <div class="barra"></div>
                    </div>

                </div>
            </div>

            <!-- Logo -->
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/casa.svg" alt="Logotipo de Terapia en casa">

            <!-- Título -->
            <h1 class="titulo">Terapia en casa</h1>

            <!-- Enlaces a RRSS -->
            <?php dynamic_sidebar( 'redes-sociales' ); ?>

            <!-- Nubes -->
            <div class="nubes">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube1.png" alt="Imagen de una nube">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube2.png" alt="Imagen de una nube">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube3.png" alt="Imagen de una nube">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube4.png" alt="Imagen de una nube">
                <img class="nube" src="<?php echo get_template_directory_uri(); ?>/img/nube5.png" alt="Imagen de una nube">
            </div>

        </header>