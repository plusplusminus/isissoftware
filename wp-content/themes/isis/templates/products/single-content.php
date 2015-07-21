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

				<div class="product-single_children">
							
					<?php

					global $post; 

					$query_args = array(
						'post_type' => 'isis-product', 
						'posts_per_page' => -1,
						'post_parent' => $post->ID,
						'orderby' => 'menu_order',
						'order' => 'ASC'
					);

					query_posts( $query_args );

					?>


					<?php if ( have_posts() ) : ?>
						<h4 class="product_info--subtitle">Product Information</h4>
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading<?php echo $post->ID;?>">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->ID;?>" aria-expanded="true" aria-controls="collapse<?php echo $post->ID;?>">
												<?php the_title(); ?>
											</a>
										</h4>
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


				</div>


			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>