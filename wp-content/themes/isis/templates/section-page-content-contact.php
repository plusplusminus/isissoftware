<section class="section_product-single">  
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					  	
						<div class="page-single_content">
							<?php the_content(); ?>
						</div>
										
					<?php endwhile; ?>
				<?php endif; ?>
				
				<?php wp_reset_query(); ?>

			</div>
			
			<?php get_sidebar('contact'); ?>

		</div><!--/.row-->
	</div>	<!--/.container-->
</section> <?php // end #wrapper ?>