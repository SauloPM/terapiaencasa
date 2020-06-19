<?php /* Template Name: Página de psicólogos */ ?>

<?php get_header(); ?>

<!-- ────────────── -->
<!--     CUERPO     -->
<!-- ────────────── -->

<?php

    $items = get_posts(

        array(
            'post_per_page' => -1,
            'post_type' => 'psicologos',
            'category_name' => $type,
            'numberposts'=> -1
        )
    );

    $catObj = get_category_by_slug( $type );
    $parent = get_the_category_by_ID( $catObj->category_parent );
?>

<?php if ( $items ): ?>

<section id="psicologos" class="wp-block-group">

    <?php foreach ( $items as $item ) : ?>

        <?php
            
        $campos = get_fields( $item->ID );

        setup_postdata( $item );

        ?>

        <!-- Nombre -->
        <h2><?php echo get_the_title( $item) ?></h2>
        
        <!-- Fotografía -->
        <div class="fotografia" style="background-image: url(<?php echo $campos["fotografia"]["url"] ?>)"></div>

        <!-- Puesto -->
        <h3><?php echo $campos["puesto"] ?></h3>

        <!-- Formación -->
        <p><?php echo get_the_content( $item ) ?></p>

        <!-- Emoción - Razón - Emoción -->
        <div class="emocion-razon-emocion">
            <i class="comillas fa fa-quote-left" aria-hidden="true"></i>
            <p><?php echo $campos["emocion_razon_emocion"] ?></p>
        </div>

        <!-- ────────────── -->
        <!--     LIBROS     -->
        <!-- ────────────── -->

        <?php $libros = array( get_field( 'libro_publicado_1', $item->ID ), get_field( 'libro_publicado_2', $item->ID )) ?>

        <?php if( $libro[0]['titulo'] || $libros[1]['titulo'] ): ?>

            <h3>Libros publicados</h3>

            <div class="libros">

                <?php foreach ( $libros as $libro ): ?>

                    <?php if( $libro ): ?>
                        <a class="libro" href="<?php echo $libro['link'] ?>" target="_blank">
                            <img src="<?php echo esc_url( $libro['imagen']['url'] ) ?>" alt="" />
                            <div class="overlay">
                                <div class="titulo"><?php echo $libro['titulo'] ?></div>
                                <div class="editorial"><?php echo 'Editorial ' . $libro['editorial'] ?></div>
                                <div class="descripcion"><?php echo $libro['descripcion'] ?></div>
                            </div>
                        </a>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <!-- ────────────────── -->
        <!--     EXCELENCIA     -->
        <!-- ────────────────── -->

        <?php $certificados = array( get_field( 'certificado_de_excelencia_en_doctoralia_en_2018', $item->ID ), get_field( 'certificado_de_excelencia_en_doctoralia_en_2019', $item->ID )) ?>

        <?php if( $certificados[0] || $certificados[1] ): ?>

            <h3>Certificados de excelencia en Doctoralia</h3>

            <div class="certificados">

                <?php foreach ( $certificados as $certificado ): ?>

                    <?php if( $certificado ): ?>
                        <img class="certificado" src="<?php echo esc_url( $certificado['url'] ) ?>" alt="" />
                    <?php endif ?>
                
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <?php wp_reset_postdata() ?>

    <?php endforeach; ?>
</section>

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