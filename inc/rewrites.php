<?php
/**
 * SET NEW REWRITE RULES AND QUERY VARIABLES
 */
if(!function_exists('custom_rewrite_rules')):
	function custom_rewrite_rules( $rules ) {
		/**
		 * SET NEW URL RULES HERE
		 */		
		$newrules = array();
	  	$newrules['(product)/type/([^/]+)?$'] = 'index.php?post_type=$matches[1]&type=$matches[2]';
	  	$newrules['(product)/type/([^/]+)/page/([0-9])$'] = 'index.php?post_type=$matches[1]&type=$matches[2]&paged=$matches[3]';
		return $newrules + $rules;
	}
	add_filter( 'rewrite_rules_array','custom_rewrite_rules' );
endif;

if(!function_exists('custom_query_vars')):
	function custom_query_vars( $vars ) {
		/**
		 * SET QUERY VAR HERE
		 */		
		array_push($vars, 'type');

	    return $vars;
	}
	add_filter( 'query_vars','custom_query_vars' );
endif;