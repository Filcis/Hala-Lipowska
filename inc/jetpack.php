<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Hala Lipowska
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function hl_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'hl_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function hl_jetpack_setup
add_action( 'after_setup_theme', 'hl_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function hl_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function hl_infinite_scroll_render
