<section class="section_downloads-single">  
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					  	
						<div class="downloads-single_content">
							<?php the_content(); ?>
						</div>
										
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>	

				
							
				<?php

				global $post; 

				$query_args = array(
					'post_type' => 'page', 
					'posts_per_page' => -1,
					'post_parent' => $post->ID,
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);

				query_posts( $query_args );

				?>


				<?php if ( have_posts() ) : ?>
					<div class="downlaods-single_children">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="downloads-child_content">
								<h2 class="page-header"><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
							
						  	
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>