<?php 

function THEME_NAME_setup(){

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
add_action( 'after_setup_theme', 'THEME_NAME_setup' );


/**
 * Enqueue scripts and styles.
 *
 */
function THEME_NAME_styles_n_scripts(){

	/*
	 * Jquery
	 */
	wp_enqueue_script(	'THEME_NAME-jquery', get_template_directory_uri() . '/asset/helper/jquery.min.js', [], '', true );
	
	/*
	 * Bootstrap
	 * src - asset/helper/bootstrap-3.3.7-dist/
	 */
	wp_enqueue_style(	'bootstrap-css', get_stylesheet_directory_uri() . '/asset/helper/bootstrap-3.3.7-dist/css/bootstrap.min.css' );
	wp_enqueue_script(	'bootstrap-js', get_template_directory_uri() . '/asset/helper/bootstrap-3.3.7-dist/js/bootstrap.min.js', [], '', true );

	/*
	 * OwlCarousel
	 * src - asset/helper/OwlCarousel2-2.2.0/
	 */
	//wp_enqueue_style(	'carousel-css', get_stylesheet_directory_uri() . '/asset/helper/OwlCarousel2-2.2.0/owl.carousel.css' );	
	//wp_enqueue_script(	'owlcarousel-js', get_template_directory_uri() . '/asset/helper/OwlCarousel2-2.2.0/owl.carousel.min.js', [], '', true );

	/*
	 * Font awesome
	 */
	wp_enqueue_style(	'font-awesome', get_stylesheet_directory_uri() . '/asset/helper/font-awesome-4.7.0/css/font-awesome.min.css' );
	
	/*
	 * Parallax.js
	 * src - asset/helper/parallax.js-1.4.2/
	 */	
	//wp_enqueue_script(	'Parallax-js', get_template_directory_uri() . '/asset/helper/parallax.js-1.4.2/parallax.min.js', [], '', true );
	
	/*
	 * facebookApi.js
	 * src - asset/helper/
	 */	
	//wp_enqueue_script(	'FacebookApi', get_template_directory_uri() . '/asset/helper/facebookApi.js', [], '', true );
	
	/*
	 * THEME_NAME main css
	 */
	wp_enqueue_style( 'THEME_NAME-style', get_stylesheet_uri() );
	
	/*
	 * THEME_NAME main js
	 */
	wp_enqueue_script(	'THEME_NAME-script', get_template_directory_uri() . '/asset/js/main.js', [], '', true );

}
add_action( 'wp_enqueue_scripts', 'THEME_NAME_styles_n_scripts' );


/**
 * Custom post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * ACF functions
 * !! ACF PLUGIN REQUIRED
 */
//require get_template_directory() . '/inc/acf.php';

/**
 * FILTERS
 */
require get_template_directory() . '/inc/filters.php';

/**
 * Images sizes
 */
require get_template_directory() . '/inc/image-size.php';