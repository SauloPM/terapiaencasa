<?php /* Template Name: Página de entradas */ ?>

<?php get_header(); ?>

<?php

    if ( have_posts() ) {

        echo "<h2>Blog</h2>";

        echo "<div class='entradas'>";

        while ( have_posts() ) {

            echo "<div class='entrada'>";
            
                the_post();

                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( "medium", array( "class" => "imagen-destacada" ));
                }

                echo "<div class='cuerpo'>";

                    echo "<a class='titulo' href='" . get_permalink() . "'>";
                    the_title( "<h2>", "</h2>" );
                    echo "</a>";

                    $contenido = get_the_content();
                    $contenido = strip_tags( $contenido );
                    $contenido = strlen( $contenido ) > 275 ? substr( $contenido, 0, 275 ) . "..." : $contenido;
                    echo "<p class='extracto'>" . $contenido  . "</p>";

                echo "</div>";
            echo "</div>";
        }

        echo "</div>";
    }

?>

<?php get_footer(); ?>