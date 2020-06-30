<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<?php include 'shared/formulario-contacto.php' ?>

<?php get_footer(); ?>