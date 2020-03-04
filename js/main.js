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
	

	$('.menuFive').click(function(){
		if ($('.menu').hasClass('show')) {
			$('.menu').removeClass('show');
		}
		else{
			$('.menu').addClass('show');
		}
	})
	$('.menuFiveMob').click(function(){
		$('.men').toggleClass('active');
	});

	const menuFive = document.querySelector('.menuFive');
	const menuFive2 = document.querySelector('.menuFiveMob');
	 function addClassFunFive() {
        this.classList.toggle("clickMenuFive");
    }
	menuFive.addEventListener('click', addClassFunFive);
	menuFive2.addEventListener('click', addClassFunFive);

    var inputSlider = document.getElementById("myRange");
    var output = document.getElementById("value");



    var inputSlider2 = document.getElementById("myRange2");
    var output2 = document.getElementById("value2");

    if (inputSlider2 !== null && inputSlider2 !== undefined) {
    	var prettify = inputSlider2.value.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
    	output2.innerHTML = prettify;
    	inputSlider.oninput = function() {
    		output.innerHTML = this.value;
	    }
	    inputSlider2.addEventListener("mousemove", function(){
	    	var x = inputSlider2.value/30000;
	    	var color = 'linear-gradient(90deg, rgb(131,182,47)' +x +'%, rgb(214,214,214)' + x + '%)';
	    	inputSlider2.style.background = color;
	    });
    };
    
    if (inputSlider !== null && inputSlider !== undefined) {
    	output.innerHTML = inputSlider.value;
    	inputSlider2.oninput = function() {
    		output2.innerHTML = this.value.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
    	}
    	
	    inputSlider.addEventListener("mousemove", function(){
	    	var x = inputSlider.value;
	    	var color = 'linear-gradient(90deg, rgb(131,182,47)' +x +'%, rgb(214,214,214)' + x + '%)';
	    	inputSlider.style.background = color;
	    });
    }

    
    

    
    

	    
	    




	$('.frame__sort-toggle').click(function(){
		$(this).toggleClass('rotate');
	});
	

	$('.open-phones').click(function(){
		$(this).toggleClass('rotate');
		$('.contacts-phones').slideToggle();
		$('.contacts-card').toggleClass('more');
	});

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
	$('.show-more__portfolio').click(function(){
		var arr = $('.portfolio .hide');
		for (var i = 3- 1; i >= 0; i--) {
			$(arr[i]).removeClass('hide');
		}
	});

	$('.estimate__item input').click(function(){
		var checked = $(this).prop("checked");
		var item = $(this).parent().parent();
		if (checked) {
			item.addClass('active');
		} else {
			item.removeClass('active');
		}
		console.log($(this).prop("checked"));
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
	// 		infinite: true,
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
		infinite: true,
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
		infinite: true,
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
		infinite: true,
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
		infinite: true,
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
	$('.video-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.video-slider-prev',
		nextArrow: '.video-slider-next',
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
		infinite: true,
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
		infinite: true,
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
	$('.house-projects-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		adaptiveHeight: true,
		dots: true,
		dotsClass: "my-dots",
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});
	$('.house-project-card-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		adaptiveHeight: true,
		dots: true,
		prevArrow: '.house-project-card-slider-prev',
		nextArrow: '.house-project-card-slider-next',
		dotsClass: "my-dots",
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});
	$('.project-card-portfolio-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		prevArrow: '.project-card-portfolio-slider-prev',
		nextArrow: '.project-card-portfolio-slider-next',
		dotsClass: "my-dots",
		// autoplay: true,
		// autoplaySpeed: 5000,
		swipeToSlide: true,
	});


	$('.house-view-slider').slick({
		infinite: true,
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
		infinite: true,
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
