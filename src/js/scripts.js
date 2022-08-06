(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
	});



$("#search-icon").click(function() {
	$(".nav").toggleClass("search");
	$(".nav").toggleClass("no-search");
	$(".search-input").toggleClass("search-active");
  });
  
  $('.menu-toggle').click(function(){
	 $(".nav").toggleClass("mobile-nav");
	 $(this).toggleClass("is-active");
  });
} ( this, jQuery ));
