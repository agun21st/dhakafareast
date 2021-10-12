/*------------ stickey header --------------*/
jQuery( document ).ready( function( jQuery ) {
	var body = jQuery( 'body' );
	var topbar = jQuery( '.top-bar' );
	jQuery( window ).on( 'scroll', function( ) {
		'use strict';
	    if ( jQuery(window).scrollTop() > topbar.height( ) ) {
	        body.addClass( 'sticky' );
	    } else {
	        body.removeClass( 'sticky' );
	    }
	} );

	$('.counter').counterUp({
	    delay: 10,
	    time: 1500
	});
	jQuery( '#blog-slider' ).owlCarousel( {
		loop: true,
        nav: false,
        navigationText: false,
		autoplaySpeed: 300,
		navSpeed: 300,
		dotsSpeed: 400,
		dragEndSpeed: 300,
		autoplayTimeout: 1000,
		autoplay: true,
		autoplayHoverPause: true,
		items: 3,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			978: {
				items: 3,
			},
			1199: {
				items: 2,
			}
		}
    } );
})

$(document).ready(function() {
	$('.gallery-image').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
		}
	});
});
$(document).ready(function(){
	$('#sidenav-collapse').click(function(){
		$(this).toggleClass('open');
	});
});
