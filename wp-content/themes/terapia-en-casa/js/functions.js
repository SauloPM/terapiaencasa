$( window ).on( 'load', function() {

    $('#play-video').on('click', function(ev) {

        $("#video")[0].src += "&autoplay=1";
        ev.preventDefault();
        
    });

    // ─────────────── //
    //     SPINNER     //
    // ─────────────── //

    hideSpinner();

    // Spinner hidding
    function hideSpinner () {
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
    $( document ).on( 'click', '#contacto .boton', function( evento ) {

        var boton = $( this );

        if ( boton.hasClass( 'desactivado' ) ) {

            evento.preventDefault();
            
        } else {

            
        }
    });

    // Ocultar notificación
    // $( document ).on( 'click', '.wpcf7-response-output', function() {

    //     $( this ).css( 'opacity', '0' );

    //     setTimeout(() => {
    //         $( this ).css( 'display', 'none' );
    //     }, 500);
    // });

	// ─────────────────── //
    //     TESTIMONIOS     //
	// ─────────────────── //
	
    // Configuracióm

    var testimonios = $( '.owl-carousel' );

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