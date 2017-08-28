<?php

if(!function_exists("theme_setup")):
	/**
	 * Theme basic setup
	 */
	function theme_setup(){

		show_admin_bar( false );
		//add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_post_type_support( 'page', 'excerpt' );
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