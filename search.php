<?php get_header(); ?>
	<main>
		<div class="container">
			<div class="row">

				<?php if(have_posts()): ?>

					<?php while(have_posts()): the_post(); ?>
						
						<div class="col-md-12">
							
							<?php the_title('<h2>','</h2>'); ?>

							<?php the_content(); ?>
							
							<a href="<?php the_permalink(); ?>">READ MORE</a>
						
						</div> <!-- .col-md-12 -->
					
					<?php endwhile; ?>
						
						<div class="col-md-12">
							
							<?php pagination(); ?>

						</div>

				<?php else: ?>
					
					<div class="col-md-12">
					
						<h2 class="text-center">NO RESULTS FOUND</h2>
					
					</div>
				
				<?php endif; //have_posts(); ?>

				<div class="clearfix"></div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</main>
<?php get_footer(); ?>