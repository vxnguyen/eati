/**
 * File navigation.js.
 *
 * Mobile navigation menu functionality
 */

(function($) {
	$mobileNav = $(".mobile-navigation");
	$mobileNavOpen = $(".menu-toggle-open");
	$mobileNavClose = $(".menu-toggle-close");

	$mobileNavOpen.click( function() {
		$mobileNav.addClass("visible");
	});

	$mobileNavClose.click( function() {
		$mobileNav.removeClass("visible");
	});

})( jQuery );