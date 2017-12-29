$(function() {
	// Open content
 	$('div[id^="shutter"]').on('click', function() {
 		// Get the clicked elements number 
 		var num = $(this).text();
		$('.content, .content_error').hide();
 		$('.chosen').removeClass('chosen');
 		$('.shutter').addClass('default_border');
 		$('#content'+num+', #content_error'+num).show();
 		$('.content, .content_error').removeClass('hide');
 		$(this).removeClass('border');
 		$(this).addClass('chosen');
 	});
 	// Close content
 	$('.close').on('click', function () {
 		$('.content, .content_error').hide();
 		$('.content, .content_error').addClass('hide');
 		$('div[class^="shutter"]').removeClass('chosen');
 		$('div[class^="shutter"]').addClass('default_border');
 	})
});