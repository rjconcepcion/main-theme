<?php

/**
 * LIST OF OPTION PAGE AND SUBOPTION PAGE USE
 * ACF PLUGIN REQUIRED (LICENSE REQUIRED)
 */
if( function_exists('acf_add_options_sub_page') ) {

 	/**
 	 * OPTION PAGE ABOUT W/ CHILD 
 	 */
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Product Settings',
		'menu_title' 	=> 'Settings',
		'menu_slug' 	=> 'product-settings',
		'parent_slug' 	=> 'edit.php?post_type=product',
	));	
}
