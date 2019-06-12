$('.scrollToTop').addClass('hide');

$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').removeClass('hide');
		} else {
			$('.scrollToTop').addClass('hide');
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},200);
		return false;
	});
	
});