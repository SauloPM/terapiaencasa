<?php /* Template Name: Página de psicólogos */ ?>

<?php get_header(); ?>

<!-- ────────────── -->
<!--     CUERPO     -->
<!-- ────────────── -->

<?php

$items = get_posts( array( 'post_type' => 'psicologos', 'numberposts'=> -1 ) );

if ( $items ) {

    echo "<section id='psicologos' class='wp-block-group'>";

        foreach ( $items as $item ) {

            setup_postdata( $item );

            $campos = get_fields( $item->ID );

            // Nombre
            echo "<h2>" . get_the_title( $item ) . "</h2>";
            
            // Imagen
            echo "<div class='fotografia' style='background-image: url(" . $campos["fotografia"]["url"] . ")'></div>";

            // Puesto
            echo "<h3>" . $campos["puesto"] . "</h3>";

            // Formación
            echo get_the_content( $item );

            // Emoción - Razón - Emoción
            echo "<div class='emocion-razon-emocion'>";
                echo "<i class='comillas fa fa-quote-left'></i>";
                echo $campos["emocion_razon_emocion"];
            echo "</div>";

            // ────────────── //
            //     LIBROS     //
            // ────────────── //

            $libros = array( get_field( 'libro_publicado_1', $item->ID ), get_field( 'libro_publicado_2', $item->ID ));

            if( $libro[0]['titulo'] || $libros[1]['titulo'] ) {

                echo "<h3>Libros publicados</h3>";

                echo "<div class='libros'>";

                    foreach ( $libros as $libro ) {

                        if( $libro ) {
                            echo "<a class='libro' href='" . $libro['link'] . "' target='_blank'>";
                                echo "<img src='" . esc_url( $libro['imagen']['url'] ) . "' alt='' />";
                                echo "<div class='overlay'>";
                                    echo "<div class='titulo'>" . $libro['titulo'] . "</div>";
                                    echo "<div class='editorial'>" . 'Editorial ' . $libro['editorial'] . "</div>";
                                    echo "<div class='descripcion'>" . $libro['descripcion'] . "</div>";
                                echo "</div>";
                            echo "</a>";
                        }
                    }
                echo "</div>";
            }

            // ────────────────── //
            //     EXCELENCIA     //
            // ────────────────── //

            $certificados = array( get_field( 'certificado_de_excelencia_en_doctoralia_en_2018', $item->ID ), get_field( 'certificado_de_excelencia_en_doctoralia_en_2019', $item->ID ));

            if( $certificados[0] || $certificados[1] ) {

                echo "<h3>Certificados de excelencia en Doctoralia</h3>";

                echo "<div class='certificados'>";

                    foreach ( $certificados as $certificado ) {

                        if( $certificado ) {
                            echo "<img class='certificado' src='" . esc_url( $certificado['url'] ) . "' alt='' />";
                        }
                    }
                echo "</div>";
            }

            wp_reset_postdata();

        }
    echo "</section>";
} ?>

<div style="margin-bottom: -35px"></div>

<!-- ─────────────────── -->
<!--     TESTIMONIOS     -->
<!-- ─────────────────── -->

<?php include 'shared/testimonios.php' ?>

<!-- ──────────────── -->
<!--     CONTACTO     -->
<!-- ──────────────── -->

<?php include 'shared/formulario-contacto.php' ?>

<?php get_footer(); ?>