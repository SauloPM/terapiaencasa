<?php

function child_theme_enqueue_styles() {

	// Esto es para que el tema hijo herede los estilos CSS del tema padre
	wp_enqueue_style( "parent-style", get_template_directory_uri() . "/style.css", array( "reset", "superfish", "prettyPhoto", "jquery-qtip" ));
	
	// Esto es para enlazar el fichero de JavaScript
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . "/../twentynineteen-child/functions.js", array(), null, true);
}
add_action("wp_enqueue_scripts", "child_theme_enqueue_styles");