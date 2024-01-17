<?php
/**
 * Block Name: Recent Posts
 */
?>
<?php $title = get_field('title'); ?>
<?php $posts = get_field('posts'); ?>
<?php
    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 10,
    ];
    if($posts) {
    	$args['post__in'] = $posts;
    	$args['orderby'] = 'post__in';
    }
    $wp_query = new WP_Query($args);
?>
<!-- Section - News Carousel -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($title): ?>
				<h3 class="outline-text mb-layout-xs">
					<?php echo $title; ?>
				</h3>
			<?php endif; ?>
			<?php if($wp_query->have_posts()): ?>
				<div class="carousel carousel-news swiper" data-breakpoints="[['0', 1, 30], ['575', 2, 30], ['991', 3, 60]]">
					<div class="swiper-wrapper">
						<?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
							<div class="swiper-slide">
								<?php get_template_part('templates/posts/post'); ?>
							</div>
						<?php endwhile; ?>
					</div>
					<?php if($wp_query->post_count > 3): ?>
						<div class="swiper-button-prev" data-cursor="arrow-left"></div>
						<div class="swiper-button-next" data-cursor="arrow-right"></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php wp_reset_query(); ?>