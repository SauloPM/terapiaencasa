<?php $items = get_posts( array( 'post_type' => 'testimonios', 'numberposts'=> -1 )); ?>

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