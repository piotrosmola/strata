<?php
/**
 * Block Name: Moments
 */
?>
<?php
	global $wp_query;
	$categories = get_terms('moment_cat');
	$args = [
		'post_type' => 'moment',
		'post_status' => 'publish',
		'posts_per_page' => $posts_per_page,
	];
	$wp_query = new WP_Query($args);
?>
<!-- Section - Moments -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($wp_query->have_posts()): ?>
				<?php if($categories): ?>
					<!-- Tabs -->
					<ul class="nav nav-tabs mb-layout-xs">
						<li><button class="js-moments-cat active" data-category><?php esc_html_e('All', 'cbd'); ?></button></li>
						<?php foreach($categories as $category): ?>
							<li><button class="js-moments-cat" data-category="<?php echo $category->slug; ?>"><?php echo $category->name; ?></button></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<div class="js-moments">
					<!-- Moments Grid -->
					<div class="moments-grid mb-layout-xs js-moments-row">
						<?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
							<?php get_template_part('templates/moments/moment'); ?>
						<?php endwhile; ?>
					</div>
					<?php if($wp_query->max_num_pages > 1): ?>
						<div class="text-center">
							<!-- Button -->
							<a href="#" class="btn btn-oval js-more-moments" data-mp data-pages="<?php echo $wp_query->max_num_pages; ?>">
								<span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
								<span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
								<span class="btn-label"><?php esc_html_e('More Moments', 'cbd'); ?></span>
								<i class="btn-icon i i-arrow-down"></i>
							</a>
						</div>
					<?php endif; ?>
				</div>
			<?php else: ?>
				<?php get_template_part('templates/moments/nofound'); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php wp_reset_query(); ?>