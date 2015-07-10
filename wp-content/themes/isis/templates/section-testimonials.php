<?php
	/* Testimonials */
?>
<?php global $tpb_options; ?>

<section id="testimonials" class="section_testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="flexslider">
					<?php
						$args = array('post_type'=>'testimonial','posts_per_page'=>-1,'orderby'=>'menu_order');
						// The Query
						$query = new WP_Query( $args );

						// The Loop
						if ( $query->have_posts() ) { ?>
							<ul class="slides">
							<?php while ( $query->have_posts() ) { $query->the_post(); ?>
								<li class="slide">
									<div id="quote-<?php echo $post->ID;?>" class="testimonial_article css-hover-vertical" itemprop="review" itemscope itemtype="http://schema.org/Review">
								    	<figure class="testimonial_image">
								    		<?php the_post_thumbnail('medium',array('class'=>'img-responsive')); ?>
										</figure>
										<div class="testimonial_content">
							    			<div class="content_inner">
							    				<blockquote class="testimonial_content--blockquote" itemprop="reviewBody">
													<?php the_content(); ?>
												</blockquote>
												<cite class="testimonial_author" itemprop="author" itemscope itemtype="http://schema.org/Person">
													<span class="testimonial_author--name" itemprop="description"><?php the_title();?></span>
													<span class="testimonial_author--description" itemprop="description"><?php echo get_post_meta($post->ID,'_byline',true); ?></span>
												</cite>
											</div>
										</div>
									</div>
								</li>
							<?php } ?>
							</ul>
						<?php } else {
							// no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>