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

            echo "<p>" . the_content() . "</p>";
        }

        echo "</div>";
    }

?>

<?php get_footer(); ?>