	var ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i
	var DefaultWhitelist = {
	  // Global attributes allowed on any supplied element below.
	  '*': ['class', 'dir', 'id', 'lang', 'role', ARIA_ATTRIBUTE_PATTERN],
	  a: ['target', 'href', 'title', 'rel'],
	  area: [],
	  b: [],
	  br: [],
	  col: [],
	  code: [],
	  div: [],
	  em: [],
	  hr: [],
	  h1: [],
	  h2: [],
	  h3: [],
	  h4: [],
	  h5: [],
	  h6: [],
	  i: [],
	  img: ['src', 'alt', 'title', 'width', 'height'],
	  li: [],
	  ol: [],
	  p: [],
	  pre: [],
	  s: [],
	  small: [],
	  span: [],
	  sub: [],
	  sup: [],
	  strong: [],
	  u: [],
	  ul: []
	}
$(document).ready(function(){
	

	// $('.newses-sort-view .list').click(function(){
	//   $('.newses-list-slider__slide').addClass('list');
	//   $('.view img').removeClass('show');
	//   $('.view-list .active').addClass('show');
	//   $('.view-grid .disable').addClass('show')
	// });
	// $('.newses-sort-view .grid').click(function(){
	//   $('.newses-list-slider__slide').removeClass('list');
	//   $('.view img').removeClass('show');
	//   $('.view-list .disable').addClass('show');
	//   $('.view-grid .active').addClass('show')
	// });

	// $('.menuFive').click(function(){
	// 	if ($('.menu').hasClass('show')) {
	// 		$('.menu').removeClass('show');
	// 	}
	// 	else{
	// 		$('.menu').addClass('show');
	// 	}
	// })
	// $('.menuFiveMob').click(function(){
	// 	$('.men').toggleClass('active');
	// });
	// $('.search input').focus(function(){
	// 	$('.mobile-home-link img').hide();
	// });
	// $('.search input').blur(function(){
	// 	$('.mobile-home-link img').show();
	// });

	// $('.company-history__date').click(function(){
	// 	$('.company-history__date').removeClass('active');
	// 	$(this).addClass('active');
	// 	var $name = $(this).attr("data"),
	// 		$blockName = '.block';
	// 	$blockName += $name;
	// 	console.log($blockName);
	// 	$('.block').removeClass('show');
	// 	$($blockName).addClass('show');

	// })

	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() >= 300) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
		$('#toTop').click(function() {
			$('body,html').animate({scrollTop:0},300);
		});
	});

	$('.calc-form__values p').click(function(){
		$('.calc-form__values p').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.catalog-filters__button').click(function(){
		// alert('da1');
		if ( $(this).hasClass('hide-visible') ) {
			// alert('da');
			$('.catalog-filters__button .hide').removeClass('visible');
			$('.catalog-filters__button').removeClass('hide-visible');
			$('.catalog-filters__button .show').addClass('visible');
			$('.catalog-filters__button img').addClass('rotate');
			$('.filters').removeClass('show-filters');
		} else {
			$('.catalog-filters__button .show').removeClass('visible');
			$('.catalog-filters__button').addClass('hide-visible');
			$('.catalog-filters__button .hide').addClass('visible');
			$('.catalog-filters__button img').removeClass('rotate');
			$('.filters').addClass('show-filters');
		}
	});
	$('.show-more__catalog-items').click(function(){
		var arr = $('.catalog-items .hide');
		for (var i = 3- 1; i >= 0; i--) { //первые три элемента
			$(arr[i]).removeClass('hide');
		}
	});
	$('.show-more__videos').click(function(){
		var arr = $('.videos-container .hide');
		for (var i = 2- 1; i >= 0; i--) {
			$(arr[i]).removeClass('hide');
		}
	});

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	});


	// $('input[name=three]').nativeMultiple({
	//     stylesheet: "slider",
	//     onCreate: function() {
	//         console.log(this);
	//     },
	//     onChange: function(first_value, second_value) {
	//         console.log('onchange', [first_value, second_value]);
	//     },
	//     onSlide: function(first_value, second_value) {
	//         console.log('onslide', [first_value, second_value]);
	//     }
	// });

	// const menuFive = document.querySelector('.menuFive');
	// const menuFive2 = document.querySelector('.menuFiveMob');
	//  function addClassFunFive() {
 //        this.classList.toggle("clickMenuFive");
 //    }
	// menuFive.addEventListener('click', addClassFunFive);
	// menuFive2.addEventListener('click', addClassFunFive);

	// $('.redArrow').click(function(){
	// 	$(this).toggleClass('redOpen');
	// 	$(this).parent().parent().toggleClass('liOpen');
	// 	$(this).parent().next().slideToggle('200');
	// });
	

	// $('.slider-container-4').each(function(){
	// 	var $this = $(this),
	// 		$blockArrows = $('.controls-arrows', $this),
	// 		$blockDots = $('.blue-dots', $this),
	// 		$slick = $('.slider-4', $this);
	// 	$slick.slick({
	// 		dots: true,
	// 		arrows: true,
	// 		infinite: false,
	// 		slidesToShow: 4,
	// 		slidesToScroll: 1,
	// 		autoplay: true,
	// 		autoplaySpeed: 5000,
	// 		appendArrows: $blockArrows,
	// 		appendDots: $blockDots,
	// 		responsive: [
	// 			{
	// 				breakpoint: 960,
	// 				settings: {
	// 					slidesToShow: 1,
	// 					arrows: false,
	// 					slidesToScroll: 1,
	// 				}
	// 			}
	// 		]
	// 	});
	// });

	$('.frame__sort-toggle').click(function(){
		$(this).parent().next('.frame__sort-content').slideToggle();
	});
	$('.frame__sort-content p').click(function(){
		$(this).parent().parent().find('p').removeClass('selected');
		$(this).addClass('selected');
	});


	$('.houses-hits-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.houses-hits-slider-prev',
		nextArrow: '.houses-hits-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.projects-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.projects-slider-prev',
		nextArrow: '.projects-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.employee-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.employee-slider-prev',
		nextArrow: '.employee-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.house-reviews-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.house-reviews-slider-prev',
		nextArrow: '.house-reviews-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.sertificates-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.sertificates-slider-prev',
		nextArrow: '.sertificates-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.frame-employee-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		dotsClass: "my-dots",
		prevArrow: '.frame-employee-slider-prev',
		nextArrow: '.frame-employee-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});


	$('.house-view-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		arrows: true,
		dots: false,
		asNavFor: '.for-house-view-slider',
		dotsClass: "my-dots",
		prevArrow: '.house-view-slider-prev',
		nextArrow: '.house-view-slider-next',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});
	$('.for-house-view-slider').slick({
		infinite: false,
		slidesToShow: 4,
		asNavFor: '.house-view-slider',
		slidesToScroll: 1,
		arrows: false,
		focusOnSelect: true,
		dots: false,
		dotsClass: "my-dots",
		// prevArrow: '.prev1',
		// nextArrow: '.next1',
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});


});
