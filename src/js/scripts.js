(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
	});


function menuOnClick() {
	document.getElementById("search-icon").classList.toggle("search");
	document.getElementById("nav").classList.toggle("no-search");
	document.getElementById("menu-bg").classList.toggle("search-active");
  }
  
  document.addEventListener('keydown', function(event){
	  if(event.key === "Escape"){
	document.getElementById("menu-bar").classList.remove("change");
	document.getElementById("nav").classList.remove("change");
	document.getElementById("menu-bg").classList.remove("change-bg");
	  }
  });
  