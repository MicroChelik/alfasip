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

	// $(function() {
	// 	$(window).scroll(function() {
	// 		if($(this).scrollTop() >= 300) {
	// 			$('#toTop').fadeIn();
	// 		} else {
	// 			$('#toTop').fadeOut();
	// 		}
	// 	});
	// 	$('#toTop').click(function() {
	// 		$('body,html').animate({scrollTop:0},300);
	// 	});
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



	$('.houses-hits-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		dotsClass: "my-dots",
		prevArrow: '.prev1',
		nextArrow: '.next1',
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


});
