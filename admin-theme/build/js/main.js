console.log("DevIFES ;)");

$(document).ready(function() {
  
	window.scrollTo(0, 1);
	
	// Menu
	$('#menu-toggle').click(function() {

		var open = $('#page').hasClass('menu-open');

		if(open) {

			$('#page').removeClass('menu-open');

		} else {

			$('#page').addClass('menu-open');

		}

    });

    $('#content').click(function() {

    	var open = $('#page').hasClass('menu-open');

		if(open) {

			$('#page').removeClass('menu-open');

		}
    	
    });
    
    
});