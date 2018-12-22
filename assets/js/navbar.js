/* Page Scroll Links (Fixed Nav)
-----------------------------------------------*/

$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 110
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

/* Shrink Navbar on Scroll
-----------------------------------------------*/

$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if (scroll > 150 ) { 
		$('#navbar').addClass('shrink');
	}
	if (scroll <= 100 ) {
		$('#navbar').removeClass('shrink');
	}
});