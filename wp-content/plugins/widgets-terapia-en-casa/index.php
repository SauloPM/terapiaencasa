<?php

/*

Plugin Name: Widgets de Terapia en casa
Description: Widgets de propósito específico para la página web de Terapia en casa
Author: Saulo Poveda Montesdeoca
Author URI: https://saulopm.com
Versión: 1.00

*/

class Widget_Redes_Sociales extends WP_Widget {

    // Constructor
    public function __construct() {

        parent::__construct( 'widget_rrss', 'Enlace a redes sociales' );
    }

    // Representación del widget en el backend (dashboard)
    public function form( $instance ) {

        // Set widget defaults
        $defaults = array(
            'facebook'   => '',
            'twitter'    => '',
            'instagram'  => '',
            'youtube'    => '',
            'linkedin'   => '',
            'checkbox'   => ''
        );
        
        // Parse current settings with defaults
        extract( wp_parse_args( ( array ) $instance, $defaults ) ); ?>

        <!-- Entrada de la URL del perfil Facebook -->
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'URL del perfil de Facebook', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>

        <!-- Entrada de la URL del perfil Twitter -->
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'URL del perfil de Twitter', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
        </p>

        <!-- Entrada de la URL del perfil Instagram -->
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'URL del perfil de Instagram', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
        </p>

        <!-- Entrada de la URL del perfil YouTube -->
        <p>
            <label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'URL del perfil de YouTube', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" type="text" value="<?php echo esc_attr( $youtube ); ?>" />
        </p>

        <!-- Entrada de la URL del perfil LinkedIn -->
        <p>
            <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'URL del perfil de LinkedIn', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
        </p>
        <?php
    }

    // Guardar cambios
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['twitter'  ] = isset( $new_instance['twitter'  ] ) ? wp_strip_all_tags( $new_instance['twitter'  ] ) : '';
        $instance['facebook' ] = isset( $new_instance['facebook' ] ) ? wp_strip_all_tags( $new_instance['facebook' ] ) : '';
        $instance['linkedin' ] = isset( $new_instance['linkedin' ] ) ? wp_strip_all_tags( $new_instance['linkedin' ] ) : '';
        $instance['youtube'  ] = isset( $new_instance['youtube'  ] ) ? wp_strip_all_tags( $new_instance['youtube'  ] ) : '';
        $instance['instagram'] = isset( $new_instance['instagram'] ) ? wp_strip_all_tags( $new_instance['instagram'] ) : '';

        return $instance;
    }

    // Representación del widget en el frontend
    public function widget( $args, $instance ) {

        extract( $args );

        // Check the widget options
        $facebook   = isset( $instance['facebook' ] ) ? $instance['facebook' ] : '';
        $instagram  = isset( $instance['instagram'] ) ? $instance['instagram'] : '';
        $twitter    = isset( $instance['twitter'  ] ) ? $instance['twitter'  ] : '';
        $youtube    = isset( $instance['youtube'  ] ) ? $instance['youtube'  ] : '';
        $linkedin   = isset( $instance['linkedin' ] ) ? $instance['linkedin' ] : '';

        // WordPress core before_widget hook (always include )
        echo $before_widget;

        echo "<div class='redes-sociales'>";

        // Se renderiza un listado de enlaces a las redes sociales
        if ( $facebook ) {
            echo "<a class='red-social facebook' href='" . $facebook . "' target='_blank'>";
            echo    "<i class='icono fa fa-facebook'></i>";
            echo "</a>";
        }
        if ( $instagram ) {
            echo "<a class='red-social instagram' href='" . $instagram . "' target='_blank'>";
            echo    "<i class='icono fa fa-instagram'></i>";
            echo "</a>";
        }
        if ( $twitter ) {
            echo "<a class='red-social twitter' href='" . $twitter . "' target='_blank'>";
            echo    "<i class='icono fa fa-twitter'></i>";
            echo "</a>";
        }
        if ( $youtube ) {
            echo "<a class='red-social youtube' href='" . $youtube . "' target='_blank'>";
            echo    "<i class='icono fa fa-youtube-play'></i>";
            echo "</a>";
        }
        if ( $linkedin ) {
            echo "<a class='red-social linkedin' href='" . $linkedin . "' target='_blank'>";
            echo    "<i class='icono fa fa-linkedin'></i>";
            echo "</a>";
        }

        echo "</div>";

        // WordPress core after_widget hook (always include )
        echo $after_widget;
    }
}

// Registramos el widget en el dashboard
add_action( 'widgets_init', function() {
    register_widget( 'Widget_Redes_Sociales' );
});