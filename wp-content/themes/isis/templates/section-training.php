
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
	  	<section class="section_training css-fullscreen css-overlay">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>	

