<?php
/**
 * Backend customization
 * 
 * mostly modify the admin menu, 
 * version and remove wordpress water marks
 */
if(!function_exists('backend_footer_developer')):
	/**
	 * MODIFY ADMIN FOOTER DEVELOPER
	 */
	function backend_footer_developer() 
	{
	    echo '<span id="footer-thankyou">Developed by <a href="http://www.iconcept.com.ph/" target="_blank">iConcept Philippines</a></span>';
	}
	add_filter('admin_footer_text', 'backend_footer_developer');
endif;

if(!function_exists("site_version_remove")):
	/**
	 * REMOVE WORDPRESS VERSION IN SOURCE CODE
	 */
	function site_version_remove() {
		return '';
	}
	add_filter('the_generator', 'site_version_remove');
endif;

if(!function_exists("backend_footer_version")):
	/**
	 * REMOVE WP VERSION IN ADMIN FOOTER
	 */
	function backend_footer_version() {
	    remove_filter( 'update_footer', 'core_update_footer' ); 
	}
	add_action( 'admin_menu', 'backend_footer_version' );
endif;

if(!function_exists("remove_wp_logo_admin_bar")):
	/**
	 * REMOVE WP LOGO IN ADMIN BAR
	 */
	function remove_wp_logo_admin_bar() {
	        global $wp_admin_bar;
	        $wp_admin_bar->remove_menu('wp-logo');
	}
	add_action('wp_before_admin_bar_render', 'remove_wp_logo_admin_bar', 0);
endif;