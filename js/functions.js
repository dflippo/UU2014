/**
 * Theme functions file for global javascript used by UU2014
 *
 * Contains handlers for navigation accessibility
 *
 */
(function ($) {
	// Fix for skip-link focus issues on certain browsers taken from _s
	var is_webkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
		is_opera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
		is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

	if ((is_webkit || is_opera || is_ie) && document.getElementById && window.addEventListener) {
		window.addEventListener('hashchange', function () {
			var element = document.getElementById(location.hash.substring(1));

			if (element) {
				if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) element.tabIndex = -1;

				element.focus();
			}
		}, false);
	}

	// Focus styles for menus based on Twenty Fourteen theme
	$('.main-navigation, .secondary-navigation').find('a').on('focus.uu2014 blur.uu2014', function () {
		$(this).parents().toggleClass('focus');
	});

})(jQuery);