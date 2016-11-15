/**
 * File navigation.js.
 *
 * Mobile navigation menu functionality
 */

(function($) {

	//MOBILE NAVIGATION
	$mobileNav = $(".mobile-navigation");
	$mobileNavOpen = $(".menu-toggle-open");
	$mobileNavClose = $(".menu-toggle-close");

	$mobileNavOpen.click( function() {
		$mobileNav.addClass("visible");
	});

	$mobileNavClose.click( function() {
		$mobileNav.removeClass("visible");
	});

	// OUR WORK - TABBED NAVIGATION
	$content = $(".tabbed-content section");
	$tabsSpan = $('.tabbed-navigation ul li span');
	$tabs = $('.tabbed-navigation ul li');

	$(document).ready( function() {
		// Fallback so that content is still visible when JS is disabled
		if ( $(".tabbed-navigation").css("display") == "block" ) {
			$content.hide();
		}

		// Show default content on load
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

	// SUCCESS-EXPANSION - TABBED NAVIGATION
	$expansionContent = $('.expansion-content > div');
	$expansionTabs = $('.expansion-tabs > li'); 

	$(document).ready( function() {
		// Fallback so that content is still visible when JS is disabled
		if ( $(".expansion-tabs").css("display") == "flex" ) {
			$expansionContent.hide();
		}

		// Show default content on load
		$expansionTabs.first().addClass('active');
		$expansionContent.first().show();
	} )

	$expansionTabs.click( function() {
		$index = $(this).index();

		$expansionTabs.removeClass('active');
		$(this).addClass('active');
		$expansionContent.hide();
		$expansionContent.eq($index).show();

	} );
})( jQuery );