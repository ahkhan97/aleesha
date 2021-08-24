$(document).ready(function(){

// MOBILE-NAVIGATION-LIST

$('.navigation-list').clone().appendTo('.mobile-menu-body');

$('.hamburger').on('click',function(){
  if(!$('.mobile-menu').hasClass('mobile-view')){
    $('.mobile-menu').addClass('mobile-view');
  }else{
    $('.mobile-menu').removeClass('mobile-view');
  }
});

$('#menu-close').on('click',function(){
  $('.mobile-menu').removeClass('mobile-view');
});

// SCROLL JS

// $('.scroller').mCustomScrollbar();

// WOW JS

new WOW().init();

// Product SLIDER JS

$('.product-slider').slick({
	arrows: true,
	dots: false,
	slidesToShow: 3,
	responsive: [
	  {
		breakpoint: 768,
		settings: {
		  arrows: false,
		  slidesToShow: 2,
		  dots: true
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  arrows: false,
		  slidesToShow: 1,
		  dots: true
		}
	  }
	]
  });


  // FEATURED SLIDER JS

	$('.featured-slider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 4,
		responsive: [
		{
			breakpoint: 768,
			settings: {
			arrows: false,
			slidesToShow: 2,
			dots: true
			}
		},
		{
			breakpoint: 480,
			settings: {
			arrows: false,
			slidesToShow: 1,
			dots: true
			}
		}
		]
  	});

  // ROUTINE SLIDER JS

$('.routine-slider').slick({
	arrows: true,
	dots: false,
	slidesToShow: 3,
	responsive: [
	  {
		breakpoint: 768,
		settings: {
		  arrows: false,
		  slidesToShow: 2,
		  dots: true
		}
	  },
	  {
		breakpoint: 480,
		settings: {
		  arrows: false,
		  slidesToShow: 1,
		  dots: true
		}
	  }
	]
  });

   // TESTIMONIAL SLIDER JS

// $('section.testimonial .content').slick({
// 	arrows: true,
// 	dots: true,
// 	slidesToShow: 1,
// 	responsive: [
// 	  {
// 		breakpoint: 768,
// 		settings: {
// 		  arrows: false,
// 		  slidesToShow: 2,
// 		  dots: true
// 		}
// 	  },
// 	  {
// 		breakpoint: 480,
// 		settings: {
// 		  arrows: false,
// 		  slidesToShow: 1,
// 		  dots: true
// 		}
// 	  }
// 	]
//   });

  // PRODUCT-SHOP-DETAIL SLIDER JS

	$('.for-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		asNavFor: '.nav-slider',
		arrows: false,
		dots: false,
	});
	$('.nav-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.for-slider',
		focusOnSelect: true
	});


	$('ol.flex-control-thumbs').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: false,
		dots: false,
		arrows: false,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  arrows: false,
			  slidesToShow: 2,
			  dots: true
			}
		  }
		]
	});

    $(function () {
		$('[data-toggle="tooltip"]').tooltip()
	  })

});



