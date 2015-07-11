<?php

/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package UU2014
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function uu2014_jetpack_setup() {
    add_theme_support('infinite-scroll', array(
      'container' => 'main',
      'footer'    => 'page',
    ));

	/* Prevents Mobile Theme */
	if(! get_option('wp_mobile_disable')){
		update_option('wp_mobile_disable', true);
	}
}
add_action('after_setup_theme', 'uu2014_jetpack_setup');

/**
 * Disable modules that are not needed or compatible from the Jetpack screen
 */
function uu2014_jetpack_disable( $modules ) {
	/* Mobile Theme interferes with the theme's responsive design */
	unset( $modules['minileven'] ); 
	return $modules;
}
/* "jetpack_get_available_modules" is part of the Jetpack plugin, not uu2014 */
add_filter( 'jetpack_get_available_modules', 'uu2014_jetpack_disable' );

/**
 * Clears the wp_mobile_disable option when the theme is disactivated
 */
function uu2014_jetpack_theme_disactivated($newname, $newtheme) {
	delete_option('wp_mobile_disable');
}
add_action("switch_theme", "uu2014_jetpack_theme_disactivated", 10 , 2); 
