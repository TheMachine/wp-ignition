<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ignition
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ignition_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ignition_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ignition_jetpack_setup
add_action( 'after_setup_theme', 'ignition_jetpack_setup' );

function ignition_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ignition_infinite_scroll_render