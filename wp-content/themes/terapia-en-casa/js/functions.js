$( window ).on( 'load', function() {

    // ─────────────── //
    //     SPINNER     //
    // ─────────────── //

    hideSpinner();

    // Spinner hidding
    function hideSpinner () {
        $( '.spinner' ).fadeOut( 500, function () {

            $( '.fondo-blanco' ).delay( 500 ).fadeOut( 500 );

            setTimeout( function () {
                $( 'body' ).css( 'overflow', 'visible' );
            }, 500);
        });
    }

    $( '.entrada input, .entrada textarea' ).attr( 'autocomplete', 'off' );

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