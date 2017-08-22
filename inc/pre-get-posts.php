<?php 
/**
 * PRE GET POST OF THE THEMER
 * get_query_var('query var key')
 */
if(!function_exists('template_query_modifier')):

	function template_query_modifier( $query ) {

	    if ( is_admin() || ! $query->is_main_query() )
	        return;

		if ( is_post_type_archive( 'product' ) ):
			$query->set( 'posts_per_page', 4 );
			return;
		endif;

	}
	add_action( 'pre_get_posts', 'template_query_modifier', 1 );
endif;