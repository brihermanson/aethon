import 'lazysizes';
import 'alpinejs';

//import smoothscrollPolyfill from 'smoothscroll-polyfill';
//import smoothscrollAnchorPolyfill from 'smoothscroll-anchor-polyfill';
//smoothscrollPolyfill.polyfill();

//import { navigation } from './navigation.mjs';
//let val = navigation();
document.addEventListener("DOMContentLoaded", function() {
	
	const navLinks = document.querySelectorAll('.m-header_dropdown');
	var innerLinks = [];
	var innerCont  = [];
	
	for (let i = 0; navLinks.length > i; i++) {
	
		innerLinks[i] = navLinks[i].querySelector('.m-header_dropdown_inner');
		innerCont[i]  = navLinks[i].querySelector('.m-header_dropdown_inner_cont');
		navLinks[i].addEventListener("mouseover", function() {
			
			let height = innerLinks[i].offsetHeight;
			innerCont[i].style.maxHeight = height + 'px';
			
		});
		navLinks[i].addEventListener("mouseleave", function() {
	
			innerCont[i].style.maxHeight = '0px';
			
		});
		
	}
	
	
	var dropdowns = document.querySelectorAll(".m_dropdown");
	var dropdownsHeader = document.querySelectorAll(".m_dropdown_header");
	
	for (let i = 0; dropdowns.length > i; i++) {
		
		dropdowns[i].addEventListener("click", function() {
			
			var container 	= dropdowns[i].querySelector(".m_dropdown_container");
			var inner		= dropdowns[i].querySelector(".m_dropdown_inner");
			dropdowns[i].classList.toggle("-opened");
			
			var dropHeight = inner.offsetHeight;
			
			if (dropdowns[i].classList.contains("-opened")) {
				console.log("true");
				container.style.maxHeight = 'calc(' + dropHeight + 'px + 4rem)';
			} else {
				console.log("false");
				container.style.maxHeight =  '0px';
			}
			
		});
		
	}
	for (let i = 0; dropdownsHeader.length > i; i++) {
		
		dropdownsHeader[i].addEventListener("click", function() {
			
			var container 	= dropdownsHeader[i].querySelector(".m_dropdown_container");
			var inner		= dropdownsHeader[i].querySelector(".m_dropdown_inner");
			dropdownsHeader[i].classList.toggle("-opened");
			
			var dropHeight = inner.offsetHeight;
			
			if (dropdownsHeader[i].classList.contains("-opened")) {
				console.log("true");
				container.style.maxHeight = dropHeight + 'px';
			} else {
				console.log("false");
				container.style.maxHeight =  '0px';
			}
			
		});
		
	}
	
	
	const menuBtn	= document.querySelector("[data-menu]");
	const menu	= document.querySelector(".m-site_menu");
	
	menuBtn.addEventListener("click", function() {
		menuBtn.classList.toggle("is-active");
		menu.classList.toggle("-opened");
	});
	
	// Splider Plugin
	$('#banner-slider').bxSlider({
		auto: true,
		pager: false,
		controls: false
	});
	$('#gallery-slider').bxSlider({
		auto: true
	});
	
	//Modal Toggle
	var pageOverlay = document.getElementById("page-overlay");
	
	$("[data-modal]").on("click", function() {
		var id = this.getAttribute('data-modal');
		console.log(id);
		var el = document.getElementById(id);
		
		el.classList.toggle("-active");
		pageOverlay.classList.toggle("-active");
		document.body.classList.toggle("overflow-hidden");
	});
	
} );