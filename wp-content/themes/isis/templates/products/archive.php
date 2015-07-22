

<?php
// Exclude categories on the homepage.
global $tpb_options;

$query_args = array(
	'post_type' => 'isis-product', 
	'posts_per_page' => 12,
	'post_parent'=>0
);

query_posts( $query_args );

?>

<section class="section_products-archive">  
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_products--heading">
					<h2 class="section_products--title">All Products</h2>
				</div>
			</div>
			<div class="col-md-7">
				<?php if ( have_posts() ) : ?>
					<ul class="products_list">
						<?php while ( have_posts() ) : the_post(); ?>
						  	<li class="products_list--item list_product">
						    	<figure class="product_image">
						    		<?php the_post_thumbnail('grid',array('class'=>'img-responsive')); ?>
								</figure>
								<div class="product_info">
									<?php $subtitle = get_post_meta($post->ID,'_ppm_product_subtitle',true); ?>
									<h3 class="product_info--title"><span><?php the_title(); ?></span></h3>
									<?php if (!empty($subtitle)) : ?>
										<h4 class="product_info--subtitle"><?php echo $subtitle;?></h4>
									<?php endif; ?>
									<a href="<?php the_permalink();?>" class="product_info--link js-load-product">More Information<span class="fa fa-angle-right"></span></a>
								</div>
							</li>
						<?php endwhile; ?>
						<div class="clearfix"></div>
					</ul>
					<div class="product_notes">
						<?php echo wpautop($tpb_options['products_extra']); ?>
					</div>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>