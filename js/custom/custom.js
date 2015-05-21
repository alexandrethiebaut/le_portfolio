$(document).ready(function() {

	$('#menu-off-canvas').on('click', function(event) {
		event.preventDefault();
		$('#menu-overlay').toggleClass('active');
		$('#menu-off-canvas').toggleClass('menu-is-open');
		$('#menu-off-canvas span').toggleClass('icon-cross');
		$('#menu-off-canvas span').toggleClass('icon-menu');
	});					

	//	Effet de loading
		$(window).load(function() {
			$('body').css('display', 'none');
			$('#loading').delay(750).fadeOut(250);
			$('body').css('display', 'block');
		});
});

