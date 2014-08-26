(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
			$("#owl-home").owlCarousel({

			    navigation : false, // Show next and prev buttons
			    slideSpeed : 300,
			    paginationSpeed : 400,
			    singleItem:true,
			    autoPlay: true

		   		// "singleItem:true" is a shortcut for:
		   		// items : 1,
		   		// itemsDesktop : false,
		   		// itemsDesktopSmall : false,
		   		// itemsTablet: false,
			    // itemsMobile : false
			});

	});

})(jQuery, this);

var $ = jQuery;

