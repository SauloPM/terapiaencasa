<?php

// show_admin_bar(false);

// ───────────── //
//     POSTS     //
// ───────────── //

// Habilita la sección en el dashboard para páginas y entradas
add_theme_support( 'post-thumbnails' );

// ──────────── //
//     MENÚ     //
// ──────────── //

// Habilitar sección en el dashboard (Apariencia / Menú)
add_theme_support( 'menus' );

// Crear dos localizaciones para los menús que creemos
register_nav_menus(

    array(
        'header-menu' => __( 'Menú de navegación de la portada'    , 'textdomain' ),
        'footer-menu' => __( 'Menú de navegación del pie de página', 'textdomain' ),
    )
);

// ─────────────── //
//     WIDGETS     //
// ─────────────── //

// Crear áreas de widgets
function crear_areas_de_widgets() {

    // Área de widgets 1 (Portada)
    register_sidebar(
        array (
            'id'            => 'redes-sociales',
            'name'          => __( 'Portada y footer', 'textdomain' ),
            'description'   => __( 'Área de widgets para situar los enlaces a RSS', 'textdomain' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}

add_action( 'widgets_init', 'crear_areas_de_widgets' );

// Desactivar los widgets de WordPress del dashboard
function desactivar_widgets_de_wordpress() {

    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Media_Image');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
    unregister_widget('Twenty_Eleven_Ephemera_Widget');
    unregister_widget('WP_Widget_Custom_HTML');
    unregister_widget('WP_Widget_Media_Audio');
    unregister_widget('WP_Widget_Media_Image');
    unregister_widget('WP_Widget_Media_Video');
    unregister_widget('WP_Widget_Media_Gallery');
}

add_action( 'widgets_init', 'desactivar_widgets_de_wordpress', 11 );

// ─────────────── //
//     FUENTES     //
// ─────────────── //

function cargar_fuentes() {

    // Indie Flower
    wp_register_style( 'IndieFlower', 'https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap' );
    wp_enqueue_style( 'IndieFlower' );

    // Amatic SC
    wp_register_style( 'AmaticSC', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap' );
    wp_enqueue_style( 'AmaticSC' );

    // Roboto
    wp_register_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap' );
    wp_enqueue_style( 'Roboto' );
}

add_action( 'wp_enqueue_scripts', 'cargar_fuentes' );

// ─────────── //
//     CSS     //
// ─────────── //

function cargar_css() {

    // Owl Carousel CSS CDN
    wp_register_style( 'OwlCarousel1CSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_register_style( 'OwlCarousel2CSS', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'OwlCarousel1CSS' );
    wp_enqueue_style( 'OwlCarousel2CSS' );

    // Font Awesome 4.7 CDN
    wp_register_style( 'FontAwesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'FontAwesome' );

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

// ──────────────────────────────────────────────────────────────────────── //
//     DESACTIVAR LAS NOTIFICACIONES AUTOMÁTICAS DE WORDPRESS VÍA EMAIL     //
// ──────────────────────────────────────────────────────────────────────── //

function wpb_stop_update_emails( $send, $type, $core_update, $result ) {
	
	if ( ! empty( $type ) && $type == 'success' ) {
		
		return false;
		
	}
	
	return true;
}

add_filter( 'auto_core_update_send_email', 'wpb_stop_auto_update_emails', 10, 4 );

add_filter( 'auto_plugin_update_send_email', '__return_false' );

add_filter( 'auto_theme_update_send_email', '__return_false' );