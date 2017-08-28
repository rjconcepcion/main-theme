<?php
/**
 * SET NEW SHORTCODE FOR THIS THEME
 *
 * @reference https://codex.wordpress.org/Function_Reference/add_shortcode
 */	

/**
 * Example
 *
function bartag_func( $atts ) {
	$atts = shortcode_atts( array(
		'foo' => 'no foo',
		'baz' => 'default baz'
	), $atts, 'bartag' );

	return "foo = {$atts['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );
*/