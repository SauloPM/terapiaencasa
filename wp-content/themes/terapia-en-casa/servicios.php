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

<?php

    $items = get_posts(

        array(
            'post_per_page' => -1,
            'post_type' => 'testimonios',
            'category_name' => $type
        )
    );

    $catObj = get_category_by_slug( $type );
    $parent = get_the_category_by_ID( $catObj->category_parent );
?>

<?php if ( $items ): ?>

<aside class="testimonios">

    <div class="carrusel owl-carousel owl-theme owl-height">
        <?php foreach ( $items as $item ) : ?>
        <div class="item">

            <?php
                
            $campos = get_fields( $item->ID );

            setup_postdata( $item );
            echo $campos["testimonio"];
            wp_reset_postdata();

            ?>

        </div>
        <?php endforeach; ?>
    </div>

    <div class="flechas">
        <i class="flecha flecha-derecha fa fa-angle-right"></i>
        <i class="flecha flecha-izquierda fa fa-angle-left"></i>
    </div>
</aside>

<?php endif; ?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<section id="contacto" class="wp-block-group">

    <h2>Contacto</h2>

    <!-- Formulario de contacto -->
    <?php echo do_shortcode( '[contact-form-7 id="84" title="Formulario de contacto"]' ); ?>

    <!-- Enlaces a RRSS -->
    <?php dynamic_sidebar( 'pie-de-pagina' ); ?>

</section>

<?php get_footer(); ?>