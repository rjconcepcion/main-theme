<?php

/**
 * LIST OF OPTION PAGE AND SUBOPTION PAGE USE
 * ACF PLUGIN REQUIRED (LICENSE REQUIRED)
 */
if( function_exists('acf_add_options_page') ) {

 	/**
 	 * OPTION PAGE ABOUT W/ CHILD 
 	 */
	$about = acf_add_options_page(array(
		'page_title' 	=> 'About us settings',
		'menu_title'	=> 'About',
		'menu_slug' 	=> 'about-us-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-groups'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Settings',
		'menu_title' 	=> 'Settings',
		'menu_slug' 	=> 'about-settings',
		'parent_slug' 	=> $about['menu_slug'],
	));

	
}