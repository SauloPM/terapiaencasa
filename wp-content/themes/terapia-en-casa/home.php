<?php /* Template Name: Página de entradas */ ?>

<?php get_header(); ?>

<?php

    if ( have_posts() ) {

        echo "<h2>Entradas</h2>";

        echo "<div class='blog wp-block-group'>";

        while ( have_posts() ) {

            echo "<div class='tarjeta'>";
            
                the_post();

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( "full", array( "class" => "imagen-destacada" ));
                }

                echo "<div class='cuerpo'>";

                    the_title( "<h2>", "</h2>" );

                    $contenido = get_the_content();
                    $contenido = strip_tags( $contenido );
                    $contenido = strlen( $contenido ) > 275 ? substr( $contenido, 0, 275 ) . "..." : $contenido;
                    echo "<p class='extracto'>" . $contenido  . "</p>";

                    echo "<a class='saber-mas' href='" . get_permalink() . "'>Saber más</a>";

                echo "</div>";
            echo "</div>";
        }

        echo "</div>";
    }

?>

<?php get_footer(); ?>