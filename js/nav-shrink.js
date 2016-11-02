/**
 * File nav-shrink.js.
 *
 * Shrinks navigation bar upon scroll
 */

(function($) {
	var $masthead = $("#masthead");

	$(document).on("scroll", function() {
		if ( $(document).scrollTop() > 1 ) {
			$masthead.addClass("nav-shrink");
		} else {
			$masthead.removeClass("nav-shrink");
		}
	});	
})( jQuery );