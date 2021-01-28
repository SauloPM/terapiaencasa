<?php get_header(); ?>

<?php

    if ( have_posts() ) {

        echo "<div class='post wp-block-group'>";

        while ( have_posts() ) {
            
            the_post();

            the_title( "<h2>", "</h2>" );
            
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( "full", array( "class" => "imagen-destacada" ));
            }

            // Almacenamos en una variable los campos personalizados del post
            $campos = get_fields( get_the_ID() );

            if ( strlen( trim( $campos["fotografia"]["url"] )) > 0 ) {

                // Imagen
                echo "<div class='fotografia' style='background-image: url(" . $campos["fotografia"]["url"] . ")'></div>";
            }
            
            if ( strlen( trim( $campos[ "autor" ] )) > 0 ) {
                
                // Autor
                echo "<div class='autor'>" . "Por ". $campos[ "autor" ] . ", ". $campos["puesto"] . "</div>";
            }

            echo the_content();
        }

        echo "</div>";
    }

?>

<div style="margin-bottom: -35px"></div>

<?php get_footer(); ?>