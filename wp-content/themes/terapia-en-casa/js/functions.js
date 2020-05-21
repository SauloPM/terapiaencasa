$( window ).on( 'load', function() {

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

    $( document ).on( 'click', '.menu-item a', function( evento ) {
        
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