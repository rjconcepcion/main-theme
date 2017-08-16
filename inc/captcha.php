<?php 
/**
 * CAPTCHA
 * 
 * Captcha use is google captcha
 * Set google api key first in function google_captcha()
 *
 * @version 1
 * @author Robert John Concepcion
 */
function my_login_stylesheet() {
	//css files not required but if u want nice margins, so include this :*
	wp_enqueue_style( 'loginform', get_bloginfo("template_url") . '/assets/css/login-form.css' );
	wp_enqueue_script( 'custom-login', 'https://www.google.com/recaptcha/api.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function google_captcha(){
	
	$current_url = get_bloginfo('url');

	$servers = array(
		'localhost'		=>	'6LedPR0UAAAAAEYIRgT5UH_XA1boyFWuD1OMwnoZ',
		'garnet.zoom.ph'=>	'6LebxhkUAAAAAFHDEtwlbZydtzeMbE7XwKDT5XKQ'
	);

	foreach ($servers as $server => $api_key):
		if(strpos($current_url, $server)):
			$google_api_key = $api_key;
		endif;
	endforeach;
	
	#$google_api_key = "UNCOMMENT THIS TO SET YOUR API KEY!"

	echo "<div class='g-recaptcha' data-sitekey='$google_api_key'></div>";
}
add_action('login_form', 'google_captcha', 99);

function googlecaptcha_validation($user){
	/**
	 * VALIDATION OF GOOGLE RECAPTCHA
	 */
	if(	isset($_POST["g-recaptcha-response"]) && empty($_POST["g-recaptcha-response"]) ):
		$error = new WP_Error();
		$error->add('invalid_captcha', __('<strong>ERROR</strong>: Invalid captcha.'));
		return $error;
	endif;
	return $user;
}
add_filter( 'authenticate', 'googlecaptcha_validation', 22 );