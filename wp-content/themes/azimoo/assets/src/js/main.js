// Webpack Imports
import * as bootstrap from 'bootstrap';
import Tobii from '@midzer/tobii';
// import lightGallery from 'lightgallery';

// Plugins
// import lgThumbnail from 'lightgallery/plugins/thumbnail'

( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );
	


	var scrollToTopBtn = document.getElementById("scrollToTopBtn");
	var rootElement = document.documentElement;
	function scrollToTop() {
		// Scroll to top logic
		rootElement.scrollTo({
		  top: 0,
		  behavior: "smooth"
		})
	  };
	scrollToTopBtn.addEventListener("click", scrollToTop);
} )();

( function () {

	const tobii = new Tobii({
		// selector: ".lightbox_tobii"
	});
} )();
