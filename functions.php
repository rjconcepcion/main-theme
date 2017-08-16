<?php 

/**
 * Hooked after_setup_theme
 */
require get_template_directory() . '/inc/after-setup-theme.php';





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