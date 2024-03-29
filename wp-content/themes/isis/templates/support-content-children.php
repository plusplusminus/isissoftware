<section class="section_product-single">  
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					  	
						<div class="support-single_content">
							<?php the_content(); ?>
						</div>
										
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>	

				<div class="support-single_children">
							
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
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?php echo $post->ID;?>">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->ID;?>" aria-expanded="true" aria-controls="collapse<?php echo $post->ID;?>">
											<h4 class="panel-title">
												<?php the_title(); ?>
											</h4>
										</a>
									</div>

									<div id="collapse<?php echo $post->ID;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							  	
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php wp_reset_query(); ?>	

					<?php get_template_part('templates/support/videos','general'); ?>
					<div class="clearfix"></div>
					<?php get_template_part('templates/support/videos','premium'); ?>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>