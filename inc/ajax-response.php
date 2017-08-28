<?php
/**
 * AJAX RESPONSES
 */
/**
 * EXAMPLE
 *
if(!function_exists('my_action')):
	function my_action(){
		if(true)
			wp_send_json_success();
		wp_send_json_error();
	}
	add_action( 'wp_ajax_my_action', 'my_action' );
	add_action( 'wp_ajax_nopriv_my_action', 'my_action' );
endif;
 */