<?php /* Template Name: Página de contacto */ ?>

<?php get_header(); ?>

<section id="contacto">

    <!-- Título de la sección -->
    <h2 class="titulo-seccion">Contacto</h2>

    <!-- Formulario de contacto -->
    <?php echo do_shortcode( '[contact-form-7 id="84" title="Formulario de contacto"]' ); ?>

    <!-- Enlaces a RRSS -->
    <?php dynamic_sidebar( 'pie-de-pagina' ); ?>

</section>

<?php get_footer(); ?>