( function($) {
  'use strict';
$(function(e) {
	
/*------------------------------------------------------------------
	Testimonial Slider
	-------------------------------------------------------------------*/
	var owl = $("#testimonial-slider");
	owl.owlCarousel({
	  itemsCustom : [
		[0, 1],
		[450, 1],
		[550, 1],
		[767, 1],
		[991, 2],
	  ],
	  loop: true,
	  nav : true,
	  navigation : false,
	  autoPlay  : 3000
	});
	
	
/*------------------------------------------------------------------
	Testimonial Slider 2
	-------------------------------------------------------------------*/
	var owl = $("#testimonial-slider-2");
	owl.owlCarousel({
	  itemsCustom : [
		[0, 1],
		[450, 1],
		[550, 2],
		[767, 2],
		[991, 3],
	  ],
	  loop: true,
	  nav : true,
	  navigation : false,
	  autoPlay  : 3000
	});
	
	
	
/*------------------------------------------------------------------
	Trending Slider
	-------------------------------------------------------------------*/
	var owl = $("#trending_slider");
	owl.owlCarousel({
	  itemsCustom : [
		[0, 1],
		[450, 1],
		[550, 1],
		[700, 3],
	  ],
	  loop: true,
	  nav : true,
	  navigation : false,
	  autoPlay  : 3000
	});


/*------------------------------------------------------------------
	Popular Brands
	-------------------------------------------------------------------*/
	var owl = $("#popular_brands");
	owl.owlCarousel({
	  itemsCustom : [
		[0, 2],
		[450, 2],
		[550, 2],
		[700, 3],
		[1024, 4],
		[1200, 5],
	  ],
	  loop: true,
	  nav : true,
	  navigation : false,
	  autoPlay  : 3000
	});


/*------------------------------------------------------------------
	Listing Image Slider { Style 1}
	-------------------------------------------------------------------*/
	var owl = $("#listing_img_slider");
	owl.owlCarousel({
	  itemsCustom : [
		[0, 1],
		[450, 1],
		[700, 2],
		[1024, 3],
		[1200, 3],
	  ],
	  loop: true,
	  nav: true,
	  navigation : true,
	  pagination: false,
	  autoPlay  : 3000
	});



/*------------------------------------------------------------------
	Listing Image Slider { Style 2}
	-------------------------------------------------------------------*/
	$('.listing_images_slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.listing_images_slider_nav'
	});
	$('.listing_images_slider_nav').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.listing_images_slider',
	  dots: false,
	  centerMode: true,
	  focusOnSelect: true
	});

/*------------------------------------------------------------------
	Price-Range
	-------------------------------------------------------------------*/
	$("#price_range").slider({});


/*------------------------------------------------------------------
	Search-button
	-------------------------------------------------------------------*/
	$("#search_toggle").click(function(){
		$("#header-search-form").slideToggle();
	});
	


/*------------------------------------------------------------------
	Filter-Form
	-------------------------------------------------------------------*/
	$("#filter_toggle").click(function(){
		$("#filter_form").slideToggle();
	});
	
	
	
/*------------------------------------------------------------------
	Other-info
	-------------------------------------------------------------------*/
	$("#other_info").click(function(){
		$("#info_toggle").slideToggle();
	});
	 


});


})(jQuery);


$(document).ready(function(){
    //counter js
    $('.my-plugin-counter-1').countTo({from: 0, to: 40});
    $('.my-plugin-counter-2').countTo({from: 100, to: 1200});
    $('.my-plugin-counter-3').countTo({from: 100, to: 1000});
		$('.my-plugin-counter-4').countTo({from: 100, to: 600});
		
		// slick slider satisfied customer
		$('.satisfied-customer-slick').slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2000,
		});

		// when mouse leave in color change then it will go
		$('.demo_changer').on("mouseleave", function(){
      $('.demo_changer').animate({"left":"-71px"},function(){
				$('.demo_changer').toggleClass("active");
			});						
		});

		//preloader
		$(".fakeloader").fakeLoader({
				timeToHide:1200,
				bgColor:"#f9f9f9",
				spinner:"spinner1",
		});
		//parallex
		$('.useParallex').stellar();
		$('parallax-mirror>img').css({"height":"388 !important"});
});


//Preloader
 $(window).on('load', function(){
	$('.fakeloader').fadeOut();
	$('.fakeloader').delay(500).fadeOut('slow');
	$('body').delay(1000).css({'overflow':'visible'})
});

//Scroll Top
if($(window).scrollTop()>300){
	$("#back-top").css({"bottom":"25px","opacity":'1'});
	$("#back-top").show();
}
else{
	$("#back-top").css({"bottom":"-50px","opacity":'0'});
	$("#back-top").hide();
}

$(window).scroll(function(){

	//Scroll Top
	if($(this).scrollTop()>300){
			$("#back-top").css({"bottom":"25px","opacity":'1'});
			$("#back-top").show();
	}
	else{
			$("#back-top").css({"bottom":"-50px","opacity":'0'});
	}
});

// jquery easing plugin for on click 
! function(a) {
	"use strict";
	a('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
					var o = a(this.hash);
					if ((o = o.length ? o : a("[name=" + this.hash.slice(1) + "]")).length) return a("html, body").animate({
							scrollTop: o.offset().top - 54
					}, 1e3, "easeInOutExpo"), !1
			}
	});
	a('.js-scroll-trigger-nav-2').click(function() {
			if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
					var o = a(this.hash);
					if ((o = o.length ? o : a("[name=" + this.hash.slice(1) + "]")).length) return a("html, body").animate({
							scrollTop: o.offset().top - 54
					}, 1e3, "easeInOutSine"), !1
			}
	});
	}(jQuery);

//Datepicker
$(function(){
	$('.datepicker').datepicker();
});
/* --------------------------------------------
   ----------------- wow js -----------------
----------------------------------------------*/
new WOW().init();