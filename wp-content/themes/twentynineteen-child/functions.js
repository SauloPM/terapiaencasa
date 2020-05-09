// jQuery( document ).ready( function( $ ) {

	// ────────────────────────── //
	//     ÁREAS DE ACTUACIÓN     //
	// ────────────────────────── //

	// Apertura de modal
	// $("#areas .iconbox").click(function () {
		
	// 	var target = $(this).find("h3").text().toLowerCase().replace(/ /g, "-");
		
	// 	$(".modal[data-tipo='" + target + "']").addClass("active").css({"opacity" : "1", "position" : "relative"});
	// 	$("html, body").css("overflow", "hidden");

	// 	$("#header").fadeOut(250);

	// 	setTimeout(function() {
	// 		$("#modales").fadeIn(250);
	// 	}, 250);

	// });

	// Cierre de modal
	// $("#modales .cerrar-modal").click(function () {
		
	// 	$("#header").fadeIn(250);
		
	// 	setTimeout(function() {
	// 		$("#modales").fadeOut(250);
	// 	}, 250);
		
	// 	setTimeout(function() {
	// 		$("#modales .active").removeClass("active").css({"opacity" : "0", "position" : "absolute"});
	// 		$("html, body").css("overflow", "visible");
	// 	}, 500);

	// });

	// ──────────────── //
	//     CONTACTO     //
	// ──────────────── //

	// $("#contacto .button").click(function () {
	// 	if (!$("#contacto .lopd input").prop("checked"))
	// 		alert("Debe aceptar la Política de Privacidad");
	// });

	// Eliminación del asterisco del placeholder
	// var placeholder;
	// var inputs = jQuery("#contacto input:not([type='submit'])");

	// jQuery.each(inputs, function () {
	// 	try {
	// 		placeholder = jQuery(this).attr("placeholder");
	// 		placeholder = placeholder.substring(0, placeholder.length - 1);
	// 		jQuery(this).attr("placeholder", placeholder);
	// 	}
	// 	catch(ex) {
	// 		// No hacemos nada
	// 	}
	// });

	// try {
	// 	placeholder = jQuery("#contacto textarea").attr("placeholder");
	// 	placeholder = placeholder.substring(0, placeholder.length - 1);
	// 	jQuery("#contacto textarea").attr("placeholder", placeholder);
	// }
	// catch(ex) {
	// 	// No hacemos nada
	// }
// });