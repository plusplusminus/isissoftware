
<?php

global $post; 

$page = get_page_by_title( 'Consultancy & Training' );

$query_args = array(
	'page_id' => $page->ID, 
	'posts_per_page' => 1,
);

$query = new WP_Query( $query_args );

?>

<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php $link = get_post_meta($post->ID,'_ppm_section_link',true); ?>
	  	<section class="section_training css-fullscreen">
			<div class="background-image-holder">
				<?php the_post_thumbnail('full',array('class'=>'background-image')); ?>
			</div>
			<div class="section_training--info">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-3 col-md-6">
							<div class="training_content">
								<h2 class="training_content--title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<br>
								<a href="<?php echo $link; ?>" class="child_more--btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>	

