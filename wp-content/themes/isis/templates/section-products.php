
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
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $class = get_post_meta($post->ID,'_ppm_section_class',true); ?>
		<?php $id =  get_the_ID(); ?>
	  	<section class="section_child css-fullscreen section_child--<?php echo $id; ?>">
			<div class="background-image-holder">
				<?php the_post_thumbnail('full',array('class'=>'background-image')); ?>
			</div>
			<div class="section_child--info">
				<div class="container">
					<div class="row">
						<div class="<?php echo $class; ?>">
							<div class="child_content">
								<h2 class="child_content--title"><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<?php $menu = get_post_meta($post->ID,'_ppm_menu_select',true); ?>
								<?php if(!empty($menu)) page_menu($menu); ?>
							</div>

							<div class="child_more">
								<a href="<?php the_permalink(); ?>" class="child_more--btn">View More</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>	

