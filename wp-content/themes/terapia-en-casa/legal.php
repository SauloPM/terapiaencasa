<?php /* Template Name: Página de texto legal */ ?>

<?php get_header(); ?>

<section id="legal">

    <h2><?php the_title(); ?></h2>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>