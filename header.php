<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php

		/**
		 * SUBPAGE BANNER
		 */
			if(!is_home()):

				$query_obj = get_queried_object();	
				$default_banner = get_bloginfo("template_url")."/asset/image/default-banner.png";

				if( is_page() ):

					$acf_title = get_field( $query_obj->post_name."_title", "option" );
					$acf_banner = get_field( $query_obj->post_name."_banner", "option" );
					$title = $acf_title ? $acf_title : $query_obj->post_title;
					$banner = $acf_banner ? $acf_banner : $default_banner;
				
				endif;
		
		?>
			<div id="sb-pg-bnnr">

			</div> <!-- #sb-pg-bnnr -->	
	</header>
		<?php

			endif;	/* [END] if(!is_home()): */
		
		?>		
	<!-- </header> @ content -->
	


