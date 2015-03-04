<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package DocBlock
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function festival_of_trees_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // festival_of_trees_jetpack_setup()
add_action( 'after_setup_theme', 'festival_of_trees_jetpack_setup' );
