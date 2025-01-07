<?php
/**
 * Marker functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marker
 */

if ( ! defined( 'MARKER_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'MARKER_VERSION', '2.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function marker_scripts() {
    wp_enqueue_style( 'marker-style', get_stylesheet_uri(), array(), MARKER_VERSION );
    wp_style_add_data( 'marker-style', 'rtl', 'replace' );

    wp_enqueue_script( 'marker-navigation', get_template_directory_uri() . '/js/navigation.js', array(), MARKER_VERSION, true );

    wp_enqueue_script( 'marker-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), MARKER_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marker_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/inc/woocommerce.php';
}