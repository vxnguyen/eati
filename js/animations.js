/**
 * File animations.js.
 *
 * Website animations triggered with javascript.
 */

(function($) {

	// Navigation shrink
	var $masthead = $("#masthead");

	$(document).on("scroll", function() {
		if ( $(document).scrollTop() > 1 ) {
			$masthead.addClass("nav-shrink");
		} else {
			$masthead.removeClass("nav-shrink");
		}
	});	

	// Front Page donate message transtion
	var $donateMessageTop = $(".donate-message-banner .inner .top-line");
	var $donateMessageBottom = $(".donate-message-banner .inner .bottom-line");

	$(document).ready(function() {
		$donateMessageTop.hide();
		$donateMessageBottom.hide();
	});

	$(document).on("scroll", function() {
		if ($(document).scrollTop() > 1020) {
			$donateMessageTop.addClass("fadeInUp").show();
		}

		if ($(document).scrollTop() > 1220) {
			$donateMessageBottom.addClass("fadeInUp").show();
		}
	});
})( jQuery );