<?php

global $post; 

?>

<section class="section_product css-quarter">
	<div class="background-image-holder">
		<?php // the_post_thumbnail('full',array('class'=>'background-image')); ?>
	</div>
	<div class="section_product--info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="product_content">
						<h2 class="product_content--title"><?php the_title(); ?></h2>
						<?php $subtitle = get_post_meta($post->ID,'_ppm_product_subtitle',true); ?>
						<?php if (!empty($subtitle)) : ?>
							<p class="product_info--subtitle"><?php echo $subtitle;?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>