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

				if( is_page() ):


				
				endif;
		
		?>
			<div id="sb-pg-bnnr">

			</div> <!-- #sb-pg-bnnr -->	
	</header>
		<?php
			endif;	/* [END] if(!is_home()): */
		?>		
	<!-- </header> @ content -->
	


