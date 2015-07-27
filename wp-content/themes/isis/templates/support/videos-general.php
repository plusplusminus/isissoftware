<h3 class="page-header">Support Resources</h3>
<p>Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<section class="general_videos">
	<?php $title = get_post_meta($post->ID,'_ppm_resource_title',true); ?>
	<?php $content = get_post_meta($post->ID,'_ppm_resource_intro',true); ?>

	<header class="videos_heading">
		<h3 class="videos_heading--title page-header"><?php echo $title; ?></h3>
		<div class="videos_heading--intro"><?php echo wpautop($content); ?></div>
	</header>

	<nav class="videos_category">
		<?php $terms = get_terms('type','orderby=count&hide_empty=1&child_of=15');?>
		<ul id="filters" class="nav nav-tabs small">
		  <li><a class="filter" data-filter="all">All</a></li>
			<?php foreach ( $terms as $term ) {
				echo '<li><a class="filter" data-filter=".' . $term->slug . '">' . $term->name . '</a></li>';
			} ?>
		</ul>

	</nav>

	<section class="videos_content">
		<?php
			// Exclude categories on the homepage.
			$free = get_term_by('name', 'free', 'post_tag');

			$query_args = array(
				'post_type' => 'videos', 
				'posts_per_page' => -1,
				'tag__in' => array($free->term_id)
			);

			$query = new WP_Query( $query_args );

			?>


			<?php if ( $query->have_posts() ) : $count = 0; ?>
				<ul id="video-grid" class="videos_list">
					<?php while ( $query->have_posts() ) : $query->the_post(); $count++;?>
						<?php $product_terms = wp_get_object_terms($post->ID, 'type'); ?>
					  	<li class="video_list--item list_video mix <?php foreach ($product_terms as $product_term) echo $product_term->slug.' '; ?>">
							<div class="video_content">
								<?php the_content(); ?>
								<div class="video_content--text">
									<h4 class="video_content--title"><?php the_title(); ?></h4>
									<ul class="video_content--meta">

										<?php $duration = get_post_meta($post->ID,'_ppm_video_duration',true); ?>
										<?php if (!empty($duration)) : ?>
											<li><i class="fa fa-clock-o"></i> <?php echo $duration; ?></li>
										<?php endif; ?>
										<li><i class="fa fa-folder-o"></i> <?php echo $product_terms[0]->name; ?></li>
									</ul>
									<?php $description = get_post_meta($post->ID,'_ppm_video_description',true); ?>
									<?php echo $description; ?>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>

			<?php wp_reset_query(); ?>

	</section>

</section>