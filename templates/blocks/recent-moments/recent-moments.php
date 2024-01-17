<?php
/**
 * Block Name: Recent Moments
 */
?>
<?php $moments = get_field('moments'); ?>
<?php $link = get_field('link'); ?>
<?php
	$args = [
		'post_type' => 'moment',
		'post_status' => 'publish',
		'posts_per_page' => 9,
	];
	if($moments) {
		$args['post__in'] = $moments;
		$args['orderby'] = 'post__in';
	}
	$wp_query = new WP_Query($args);
?>
<!-- Section - Moments -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($wp_query->have_posts()): ?>
				<!-- Moments Grid -->
				<div class="moments-grid mb-layout-xs">
					<?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
						<?php get_template_part('templates/moments/moment'); ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if($link): ?>
				<div class="text-center">
					<!-- Button -->
					<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-oval" data-mp>
						<span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
						<span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
						<i class="btn-icon i i-arrow-top-right"></i>
						<span class="btn-label"><?php echo $link['title']; ?></span>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php wp_reset_query(); ?>