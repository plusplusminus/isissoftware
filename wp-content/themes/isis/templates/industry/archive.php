<?php
// Exclude categories on the homepage.
global $tpb_options;

$query_args = array(
	'post_type' => 'industry', 
	'posts_per_page' => 12,
	'post_parent'=>0
);

query_posts( $query_args );

?>

<section class="section_industries-archive">  
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_industries--heading">
					<h2 class="section_industries--title">All Industries</h2>
				</div>
			</div>
			<div class="col-md-7">
				<?php if ( have_posts() ) : ?>
					<ul class="industries_list">
						<?php while ( have_posts() ) : the_post(); ?>
						  	<li class="industries_list--item list_industry">
						    	<figure class="industry_image">
						    		<?php the_post_thumbnail('grid',array('class'=>'img-responsive')); ?>
								</figure>
								<div class="industry_info">
									<?php $subtitle = get_post_meta($post->ID,'_ppm_industry_subtitle',true); ?>
									<h3 class="industry_info--title"><span><?php the_title(); ?></span></h3>
									<?php if (!empty($subtitle)) : ?>
										<h4 class="industry_info--subtitle"><?php echo $subtitle;?></h4>
									<?php endif; ?>
									<!-- <a href="<?php the_permalink();?>" class="industry_info--link js-load-industry">More Information<span class="fa fa-angle-right"></span></a> -->
								</div>
							</li>
						<?php endwhile; ?>
						<div class="clearfix"></div>
					</ul>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>	
</section> <?php // end #wrapper ?>