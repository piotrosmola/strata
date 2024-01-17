<?php
/**
 * Block Name: Services
 */
?>
<?php
	$services = get_field('services');
    $args = [
        'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ];
    if($services) {
    	$args['post__in'] = $services;
    	$args['orderby'] = 'post__in';
    }
    $wp_query = new WP_Query($args);
?>
<?php if($wp_query->have_posts()): ?>
	<!-- Section - Accordion -->
	<section class="section">
		<!-- Container -->
		<div class="section-container container">
			<div class="container-inner">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<?php $i = 1; while($wp_query->have_posts()):$wp_query->the_post(); ?>
							<!-- Panel -->
							<div class="panel panel-green">
								<div class="panel-header">
									<div class="panel-number h4">
										<span><?php echo ($i < 10) ? '0'.$i : $i; ?></span>
										<span><?php echo ($i < 10) ? '0'.$i : $i; ?></span>
									</div>
									<h4 class="panel-title">
										<?php the_title(); ?>
									</h4>
									<div class="panel-indicator">
										<i class="i i-arrow-top-right"></i>
									</div>
								</div>
								<div class="panel-content">
									<div class="wysiwyg">
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary" data-mp>
											<span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
											<span class="btn-label"><?php esc_html_e('Read More', 'cbd'); ?></span>
											<i class="btn-icon i i-arrow-top-right-fat"></i>
										</a>
									</div>
								</div>
							</div>
						<?php $i++; endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php wp_reset_query(); ?>