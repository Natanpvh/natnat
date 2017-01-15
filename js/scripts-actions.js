//Fix Menu
	jQuery("document").ready(function ($) {
		var nav = $('.navbar');
		$(window).scroll(function () {
			if ($(this).scrollTop() > 250) {
				nav.addClass("navbar-fixed-top");
			} else {
				nav.removeClass("navbar-fixed-top");
			}
		});
//logo
		var logo = $('.navbar-brand');
		$(window).scroll(function () {
			if ($(this).scrollTop() > 250) {

				logo.addClass("navbar-header-visivel");

			} else {
				logo.removeClass("navbar-header-visivel");

			}
		});

	});
	//Adiciona classe
	$("img").addClass("img-rounded");
	//Slide
	jQuery(document).ready(function($){
		$("#myCarousel .carousel-indicators li:first").addClass("active");
		$("#myCarousel .carousel-inner .item:first").addClass("active");
		$("#myCarousel").carousel({
		interval: 4000
		})
		});

	//Drpdown Menu
	$(document).ready(function () {
		$('ul.nav li.dropdown').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).slideDown(200).fadeIn(200);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
		});
	});

	function rolar_para(elemento) {
		$('html, body').animate({
			scrollTop: $(elemento).offset().top
		},
			2000
		);
	}

	$(document).ready(function () {
		//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
		//Vertical Sliding
		$('.thumbnail').hover(function () {
			$(".prev-galeria-titulo", this).stop().animate({ top: '10px' }, { queue: false, duration: 300 });
		}, function () {
			$(".prev-galeria-titulo", this).stop().animate({ top: '-50px' }, { queue: false, duration: 300 });
		});
	});