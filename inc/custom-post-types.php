<?php

/**
 * SERVICES POST TYPE
 * 
 */
function post_type_SERVICES() {
	$labels = [
		'name'			=> __( 'Services' ),
		'singular_name'	=> __( 'Service' )
	];
	$args = [
		'labels'		=> $labels,
		'supports'		=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'public'		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-products',
	];
	register_post_type( 'services', $args );
}
add_action( 'init', 'post_type_SERVICES' );