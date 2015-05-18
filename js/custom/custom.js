$(document).ready(function() {

	//	Off canvas is fixed
		$(window).bind('scroll', function(event) {

			var valueScroll = $(window).scrollTop();

			// $('#main-menu').offset( { 'top' : valueScroll } );
			// $('#main-menu').addClass('menuFixPD');
		});

	//	Effet de loading
		$(window).load(function() {
			$('#loading').delay(1000).fadeOut(400);
		});
});

