$(document).ready(function(){
	// Owl-Carousel
	$(".h-banner").owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		nav:true,
		dots:true,
	});
	$(".h-about-slide").owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		nav:true,
		dots:false,
	});
	$(".h-image").owlCarousel({
		responsive:{
			768:{
				items:5,
				margin:15
			},
			576:{
				items:2,
				margin:15
			},
			0:{
				items:1,
				margin:15
			}
		},
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
	});
	$(".h-news").owlCarousel({
		responsive:{
			768:{
				items:3,
				margin:15
			},
			576:{
				items:2,
				margin:15
			},
			0:{
				items:1,
				margin:15
			}
		},
		margin:15,
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
	});
	$(".h-cus").owlCarousel({
		responsive:{
			768:{
				items:4,
				margin:15
			},
			576:{
				items:3,
				margin:15
			},
			0:{
				items:2,
				margin:15
			}
		},
		margin:15,
		loop:true,
		autoplay:true,
		nav:false,
		dots:false,
	});
	// Wowjs
	new WOW().init();
	// Window scroll
	$(window).scroll(function(){
		// Go to top
		if($(this).scrollTop() > 200){
			$(".go-top").fadeIn();
		}else{
			$(".go-top").fadeOut();
		};
	});
	// Go to top
	$(".go-top").click(function(){
		$("html, body").animate({scrollTop:0},600);
	});
	// Other
});