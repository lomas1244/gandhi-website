$(window).scroll(function(){
	if($('.navbar').offset().top > 50){
		$('.navbar-fixed-top').addClass('top-nav-collapse');
	} else {
		$('.navbar-fixed-top').removeClass('top-nav-collapse');
	}
});

$(function(){
	$('.page-scroll a').bind('click', function(){
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});
});

$(function () {

	$('.gallery').each(function () {

	var $gal = $(this),
		$movable = $(".movable", $gal),
		$slides = $(">*", $movable),
		N = $slides.length,
		C = 0,
		itv = null;


	function stop() {
		clearInterval(itv);
	}

	function anim() {
		C = ($(this).is(".prev") ? --C : ++C) < 0 ? N - 1 : C % N;
		$movable.css({
		transform: "translateX(-" + (C * 100) + "%)"
		});
	}

	$(".prev, .next", this).on("click", anim);
	$gal.hover(stop, play);
	play();

	});

});