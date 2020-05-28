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

    $( document ).on( 'click', '.menu-item a, .saber-mas a', function( evento ) {
        
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

    // ──────────────── //
    //     CONTACTO     //
	// ──────────────── //

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

    // ────────────────── //
    //     PSICÓLOGOS     //
	// ────────────────── //

    // Configuracióm

    var psicologos = $( '#psicologos .owl-carousel' );

    psicologos.owlCarousel({
        items: 1,
        margin: 0,
        center: true,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
		nav: false,
        dots: false,
        autoHeight:true,
    });

	// ─────────────────── //
    //     TESTIMONIOS     //
	// ─────────────────── //
	
    // Configuracióm

    var testimonios = $( '.testimonios .owl-carousel' );

    testimonios.owlCarousel({
        items: 1,
        margin: 0,
        center: true,
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