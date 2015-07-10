
<?php

global $post; 

?>


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  	<section class="section_products css-quarter">
			<div class="background-image-holder">
				<?php the_post_thumbnail('full',array('class'=>'background-image')); ?>
			</div>
			<div class="section_products--info">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="products_content">
								<h2 class="products_content--title"><?php the_title(); ?></h2>
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

