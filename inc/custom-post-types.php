<?php

/**
 * SERVICES POST TYPE
 * 
 */
function theme_custom_post_types() {

	register_post_type( 'product', array(
		'labels'		=> array(
			'name'			=> __( 'Products' ),
			'singular_name'	=> __( 'Product' )
		),
		'supports'		=> array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'public'		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-products',
	) );
}
add_action( 'init', 'theme_custom_post_types' );


// function theme_taxonomies() {

// 	register_taxonomy(
// 		'product-type',
// 		array(
// 			'product',
// 		),
// 		array(
// 			'label' => __( 'Type' ),
// 			'hierarchical' => true,
// 			'show_ui'           => true,
// 			'show_admin_column' => true,
// 			'query_var'         => true,
// 		)
// 	);
// }
// add_action( 'init', 'theme_taxonomies' );


