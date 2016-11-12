/**
 * File navigation.js.
 *
 * Mobile navigation menu functionality
 */

(function($) {

	// Mobile navigation
	$mobileNav = $(".mobile-navigation");
	$mobileNavOpen = $(".menu-toggle-open");
	$mobileNavClose = $(".menu-toggle-close");

	$mobileNavOpen.click( function() {
		$mobileNav.addClass("visible");
	});

	$mobileNavClose.click( function() {
		$mobileNav.removeClass("visible");
	});

	// Our Work page tabbed navigation
	$content = $(".tabbed-content section");
	$tabsSpan = $('.tabbed-navigation ul li span');
	$tabs = $('.tabbed-navigation ul li');

	$(document).ready( function() {
		// Fallback so that content is still visible with JS disabled
		if ( $(".tabbed-navigation").css("display") == "block" ) {
			$content.hide();
		}

		// Set first tab and first content to active tab and display contents
		$tabsSpan.first().addClass('active');
		$content.first().show();
	});

	$tabs.click( function() {
		$index = $(this).index();

		$tabsSpan.removeClass('active');
		$(this).children().addClass('active');
		$content.hide();
		$content.eq($index).show();

	} );
})( jQuery );