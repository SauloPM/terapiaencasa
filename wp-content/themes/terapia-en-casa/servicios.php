<?php /* Template Name: Página de servicios */ ?>

<?php get_header(); ?>

<!-- ────────────── -->
<!--     CUERPO     -->
<!-- ────────────── -->

<h2><?php the_title(); ?></h2>

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