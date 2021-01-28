<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<div style="margin-bottom: -35px"></div>

<!-- ─────────────────── -->
<!--     TESTIMONIOS     -->
<!-- ─────────────────── -->

<?php

    if ( get_field( 'incluir_testimonios' )) {
        
        include 'shared/testimonios.php';
    }

?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<?php

    if ( get_field( 'incluir_formulario_de_contacto' )) {
        
        include 'shared/formulario-contacto.php';
    }

?>

<?php get_footer(); ?>