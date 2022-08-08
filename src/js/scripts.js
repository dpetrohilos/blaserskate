(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
	});


function menuOnClick() {
  document.getElementById("menu-bar").classList.toggle("change");
  document.getElementById("nav").classList.toggle("change");
  document.getElementById("menu-bg").classList.toggle("change-bg");
}

document.addEventListener('keydown', function(event){
	if(event.key === "Escape"){
  document.getElementById("menu-bar").classList.remove("change");
  document.getElementById("nav").classList.remove("change");
  document.getElementById("menu-bg").classList.remove("change-bg");
	}
});
