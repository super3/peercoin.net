jQuery(document).ready(function($) {

	$('a.smoothScroll').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
	});

});
