$( window ).on( 'load', function() {

    // ─────────────── //
    //     SPINNER     //
    // ─────────────── //

    ocultarSpinner();

    // Ocultar spinner
    function ocultarSpinner () {
        $( '.spinner' ).fadeOut( 250, function () {

            $( '.fondo-blanco' ).css( 'opacity', '0' );

            setTimeout( function () {
                $( '.fondo-blanco' ).css( 'display', 'none' );
                $( 'body' ).css( 'overflow', 'visible' );
            }, 250);
        });
    }

    // ────────────────── //
    //     NAVEGACIÓN     //
	// ────────────────── //

    $( document ).on( 'click', '.menu-item a, .saber-mas a, a.saber-mas, .wp-block-latest-posts li a', function( evento ) {
        
        evento.preventDefault();

        var target = $( this ).attr( 'href' );
        
        $( '.fondo-blanco' ).css( 'display', 'flex' );

        setTimeout(() => {
            $( '.fondo-blanco' ).css( 'opacity', '1' );
        }, 10);

        setTimeout(() => {
            location.href = target;
        }, 250);
    });

    // ──────────── //
    //     MENÚ     //
    // ──────────── //

    // Abrir menú responsive
    $( document ).on( 'click', '.menu-responsive .boton', function() {

        var menu = $( '.menu-responsive' );
        
        if ( menu.hasClass( 'abierto' ) ) {
            menu.removeClass( 'abierto' );
        } else {
            menu.addClass( 'abierto' );
        }
    });

    // Cerrar menú responsive
    $( document ).on( 'click', '.menu-responsive .cierre', function() {

        $( '.menu-responsive' ).removeClass( 'abierto' );
    });

    // ──────────────── //
    //     CONTACTO     //
    // ──────────────── //

    // Desactivamos el checkbox porque si el usuario lo activa y refresca la página, este permanece activado
    $( '.lopd input' ).prop( 'checked' , false );

    // Evitar el autocompletado
    $( '.entrada input' ).attr( 'autocomplete', 'off' );

    // Activar o desactivar botón
    $( document ).on( 'change', '.lopd input', function() {

        var boton = $( '#contacto .boton' );

        estadoActual = ( boton.hasClass( 'activado' )) ? 'activado' : 'desactivado';
        estadoPrevio = ( estadoActual == 'activado' )  ? 'desactivado' : 'activado';

        boton.removeClass( estadoActual ).addClass( estadoPrevio );
    });

    // No hacer nada al hacer clic en el botón si el usuario no ha aceptado la política de privacidad
    $( document ).on( 'click', '#contacto .boton input[type="submit"]', function( evento ) {

        var boton = $( this );
        
        if ( boton.hasClass( 'desactivado' ) )
            evento.preventDefault();
        else
            mostrarNotificacion();
    });

    // Ocultar notificación
    $( document ).on( 'click', '.wpcf7-response-output', function() {
        ocultarNotificacion();
    });

    function mostrarNotificacion() {

        var notificacion = $( '.wpcf7-response-output' );

        notificacion.css( 'display', 'block' );

        setTimeout(() => {
            notificacion.css( 'opacity', '1' );
        }, 500);
    }

    function ocultarNotificacion() {

        var notificacion = $( '.wpcf7-response-output' );
        
        notificacion.css( 'opacity', '0' );

        setTimeout(() => {
            notificacion.css( 'display', 'none' );
        }, 500);
    }

	// ─────────────────── //
    //     TESTIMONIOS     //
	// ─────────────────── //
	
    // Configuracióm

    var testimonios = $( '.testimonios .owl-carousel' );

    testimonios.owlCarousel({
        items: 1,
        margin: 0,
        center: true,
        margin: 25,
		loop: true,
		autoplay: true,
        autoplayHoverPause: true,
		nav: false,
        dots: false,
    });

    // Siguiente testimonio
    $( document ).on( 'click', '.flecha-derecha', function() {
        testimonios.trigger( 'next.owl.carousel', [1000] );
    })
    
    // Anterior testimonio
    $( document ).on( 'click', '.flecha-izquierda', function() {
        testimonios.trigger( 'prev.owl.carousel', [1000] );
    })
});