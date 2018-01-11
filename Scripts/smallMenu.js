// JavaScript Document

function menuClicked(menu) {
	"use strict";
	if(menu.classList.contains("change")) {
		menu.classList.toggle("change");
		document.getElementById("SideNav").style.width = "0";
		document.getElementById("content_wrapper").style.marginRight = "0";
		document.getElementById("header").style.width = "100%";
		document.body.style.backgroundColor = "white";
	} else {
		menu.classList.toggle("change");
		document.getElementById("SideNav").style.width = "250px";
		document.getElementById("content_wrapper").style.marginRight = "250px";
		document.getElementById("header").style.width = window.innerWidth - 250 + "px";
		document.body.style.backgroundColor = "rgba(0, 0, 0, 0.4)";
	}
}