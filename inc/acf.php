<?php

if( function_exists('acf_add_options_sub_page') ) {
 	
 	/**
 	 *	Products -> Other Settings
 	 */
	acf_add_options_sub_page([
		'page_title' 	=> 'Products Settings',
		'menu_title' 	=> 'Other Settings',
		'menu_slug'		=> 'options-other-settings',
		'parent_slug' 	=> 'edit.php?post_type=product',
	]);
	
}