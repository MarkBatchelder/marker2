<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Marker
 */

function marker_jetpack_setup() {
	/**
	 * Add theme support for Infinite Scroll.
	 * See: https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '_s_infinite_scroll_render',
		'footer'    => 'page',
	) );

	/**
	 * Add theme support for Responsive Videos.
	 * See: https://jetpack.me/support/responsive-videos/
	 */
	add_theme_support( 'jetpack-responsive-videos' );
} // end function marker_jetpack_setup
add_action( 'after_setup_theme', 'marker_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function marker_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function marker_infinite_scroll_render
