<?php get_header(); ?>
	<main>
		<div class="container">
			<div class="row">
				<?php 
					if(have_posts()):
						while(have_posts()): the_post(); 
				?>
				<div class="col-md-12">
					<?php the_content(); ?>
				</div> <!-- .col-md-12 -->
				<?php	
						endwhile;
					endif;
				?>
				<div class="clearfix"></div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</main>
<?php get_footer(); ?>