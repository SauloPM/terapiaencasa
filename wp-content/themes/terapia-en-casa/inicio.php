<?php /* Template Name: Página de inicio */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- ─────────────────── -->
<!--     TESTIMONIOS     -->
<!-- ─────────────────── -->

<?php include 'shared/testimonios.php' ?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<?php include 'shared/formulario-contacto.php' ?>

<?php get_footer(); ?>