$(function(){

// Contact form - animates fading labels

$formItems = $("input:text, textarea");

$formItems
	// fires after the page has loaded
	// if the field has already some value the label becomes invisible
	.each(function(){
		if ($(this).val() !== '') {
			$(this).prev().css({
				opacity: '0'
			});
		};
	})
	// fires on focus
	// if a focused field has no value label fades away
	.focus(function(){ 
		if ($(this).val() == '') {
			$(this).prev().stop().animate({
				opacity: '0'
			}, 200);
		}
	})
	// fires when the input field is no longer focused
	// labels fade in if there is no input in input fields
	.blur(function(){
		if ($(this).val() == '') {
			$(this).prev().stop().animate({
				opacity: '1'
			}, 200);
		}
	}) 

});