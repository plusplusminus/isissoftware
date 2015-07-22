<section class="section_product-single">  
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					  	
						<div class="product-single_content">
							<?php the_content(); ?>
						</div>
										
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>	

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>