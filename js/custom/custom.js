$(document).ready(function() {
	
	// Off Canvas est fixed

	$(window).scroll(function(event) {
		
		var yes = $(window).scrollTop();

		$('#main-menu').offset( {'top' : yes });


	});

});