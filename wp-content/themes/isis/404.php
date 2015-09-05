<?php

global $post; 

?>

<?php get_header(); ?>

	<section class="section_product css-quarter">
		<div class="background-image-holder">
			<?php // the_post_thumbnail('full',array('class'=>'background-image')); ?>
		</div>
		<div class="section_product--info">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="product_content">
							<h2 class="product_content--title">Error 404</h2>
							<p class="product_info--subtitle">File not found</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section_product-single">  
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="lead">Unfortunately, we could not locate what you are looking for...<br> Please use the menu above to locate what you are looking for.</p>
					<br><br><br><br><br>
				</div>

			</div><!--/.row-->
		</div>	<!--/.container-->
	</section> <?php // end #wrapper ?>

<?php get_footer(); ?>