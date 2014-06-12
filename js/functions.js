/**
 * Theme functions file adapted from Twenty Fourteen theme
 *
 * Contains handlers for navigation accessibility
 *
 */
( function( $ ) {
	var body    = $( 'body' ),
		_window = $( window );

	/*
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.uu2014', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();

			// Repositions the window on jump-to-anchor to account for header height.
			window.scrollBy( 0, -80 );
		}
	} );

	$( function() {
		// Focus styles for menus.
		$( '.main-navigation, .secondary-navigation' ).find( 'a' ).on( 'focus.uu2014 blur.uu2014', function() {
			$( this ).parents().toggleClass( 'focus' );
		} );
	} );

} )( jQuery );
