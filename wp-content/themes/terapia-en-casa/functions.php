<?php

// ──────────── //
//     MENÚ     //
// ──────────── //

add_theme_support( 'menus' );

register_nav_menus(

    array(
        'header-menu' => __( 'Menú de navegación de la portada'    , 'theme' ),
        'footer-menu' => __( 'Menú de navegación del pie de página', 'theme' )
    )
);

// ─────────── //
//     CSS     //
// ─────────── //

function cargar_css() {

    // Owl Carousel CSS CDN
    wp_register_style( 'OwlCarousel1CSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_register_style( 'OwlCarousel2CSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'OwlCarousel1CSS' );
    wp_enqueue_style( 'OwlCarousel2CSS' );

    // Local
    wp_register_style( 'localCSS', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style( 'localCSS' );
}

add_action( 'wp_enqueue_scripts', 'cargar_css' );

// ────────── //
//     JS     //
// ────────── //

function cargar_js() {

    // jQuery CDN
    wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, null, true );
    wp_enqueue_script( 'jQuery' );

    // Owl Carousel JS CDN
    wp_register_script( 'OwlCarouselJS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', null, null, true );
    wp_enqueue_script( 'OwlCarouselJS' );

    // Local
    wp_register_script( 'localJS', get_template_directory_uri() . '/js/functions.js', '', 1, true );
    wp_enqueue_script( 'localJS' );
}

add_action( 'wp_enqueue_scripts', 'cargar_js' );