$(document).ready(function() {

	//	Off canvas is fixed
		$(window).bind('scroll', function(event) {

			var valueScroll = $(window).scrollTop();

			$('#main-menu').offset( { 'top' : valueScroll } );
			// $('#main-menu').addClass('menuFixPD');
		});

	//	A l'ouverture/fermeture du menu
		$(document).on('open.fndtn.offcanvas', '[data-offcanvas]', function () {
			$('body').delay(150).css('overflow', 'hidden');
			$('#menu-off-canvas').addClass('open-menu-off-canvas');
			$('#menu-off-canvas span').removeClass('icon-menu');
			$('#menu-off-canvas span').addClass('icon-cross');

		});
		$(document).on('close.fndtn.offcanvas', '[data-offcanvas]', function () {
			$('body').css('overflow', 'visible');
			$('#menu-off-canvas').removeClass('open-menu-off-canvas');
			$('#menu-off-canvas span').removeClass('icon-cross');
			$('#menu-off-canvas span').addClass('icon-menu');
		});

	//	Effet de loading
		$(window).load(function() {
			$('body').css('display', 'none');
			$('#loading').delay(750).fadeOut(250);
			$('body').css('display', 'block');
		});
});

