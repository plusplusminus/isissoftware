<section class="section_header css-fullscreen css-overlay">
	<div class="background-image-holder">
		<?php the_post_thumbnail('full',array('class'=>'background-image')); ?>
	</div>
	<div class="section_header--info">
		<div class="container">
			<div class="row">
				<div class="col-md-5">

					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="header_content">
								<?php the_content(); ?>
								<a href="#" class="btn btn-info btn-lg">Download Free Trial Today <span class="fa fa-angle-right"></span></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>	

				</div>
			</div>
		</div>
	</div>
</section>