<?php
/**
 * Theme basic setup
 */
function theme_setup(){

	/**
	 * WOOCOMMERCE
	 */
	add_theme_support( 'woocommerce' );

	/**
	 * Remove admin menu by default
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Remove admin menu by default
	 */
	show_admin_bar( false );	

	/**
	 * Add menu feature in apperance
	 */	
	register_nav_menus([
		"main" => "The main menu of the website"
	]);

	/**
	 * LIST OF DEFAULT URLS
	 */
	define( 'HOME',	get_bloginfo("url") ); //home url

	define( 'ASSET',	get_bloginfo("template_url")."/asset/" ); //asset folder in theme

	define( 'IMAGES',	get_bloginfo("template_url")."/asset/image/" ); //image folder inside asset folder

	define( 'HELPER',	get_bloginfo("template_url")."/asset/helper/" ); //helper folder inside asset folder	

}
add_action( 'after_setup_theme', 'theme_setup' );