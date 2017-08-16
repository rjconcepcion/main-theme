<?php

if(!function_exists("theme_setup")):

	/**
	 * Theme basic setup
	 */
	function theme_setup(){

		/* WOOCOMMERCE */
		add_theme_support( 'woocommerce' );

		/* Remove admin menu by default */
		add_theme_support( 'title-tag' );

		/* Remove admin menu by default */
		show_admin_bar( false );	

		/* Add menu feature in apperance */	
		register_nav_menus(array("main" => "The main menu of the website"));

		/* LIST OF DEFAULT URLS */
		define( "HOME",		get_bloginfo("url") ); //home url
		define( 'ASSETS',	get_bloginfo("template_url")."/assets/" ); //asset folder in theme
		define( 'IMAGES',	get_bloginfo("template_url")."/assets/images/" ); //image folder inside asset folder
		define( 'HELPERS',	get_bloginfo("template_url")."/assets/helpers/" ); //helper folder inside asset folder	

		/* Image sizes */
		require 'image-size.php';
	}
	add_action( 'after_setup_theme', 'theme_setup' );

endif;