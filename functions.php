<?php 

/**
 * Hooked after_setup_theme
 */
require 'inc/after-setup-theme.php';

/**
 * Hooked after_setup_theme
 */
require 'inc/wp-enqueue-scripts.php';

/**
 * Custom post types.
 */
require 'inc/custom-post-types.php';

/**
 * FILTERS
 */
require 'inc/hooks.php';

/**
 * BACK END CAPTCHA
 */
require 'inc/captcha.php';

/**
 * BACK END CAPTCHA
 */
require 'inc/backend-modifier.php';

/**
 * Hooked pre_get_posts
 */
require 'inc/pre-get-posts.php';

/**
 * Hooked add_shortcode
 */
require 'inc/add-shortcode.php';

/**
 * REWRITE RULES
 * rewrite url
 */
//require 'inc/rewrites.php';

/**
 * ACF functions
 * ACF PLUGIN REQUIRED
 */
//require 'inc/acf.php';

/**
 * AJAX RESPONSE FUNCTIONS
 */
//require 'inc/ajax-response.php';

/**
 * BACK END CAPTCHA
 */
require 'inc/functions.php';