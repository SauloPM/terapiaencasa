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

	// ─────────────────── //
    //     TESTIMONIOS     //
	// ─────────────────── //
	
    // Configuracióm
    $( '.owl-carousel' ).owlCarousel({
        center: true,
        dots: false,
        items: 1,
		loop: true,
		nav: true,
        margin: 0,
		autoplay: true,
        autoplayHoverPause: true
    });
});