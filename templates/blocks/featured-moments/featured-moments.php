<?php
/**
 * Block Name: Featured Moments
 */
?>
<?php global $post; ?>
<?php $title = get_field('title'); ?>
<?php $moments = get_field('moments'); ?>
<?php $border_top = get_field('border_top'); ?>
<!-- Section - Moments Carousel -->
<section class="section<?php if($border_top) echo ' border-top'; ?>">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($title): ?>
				<h3 class="outline-text mb-layout-xs"><?php echo $title; ?></h3>
			<?php endif; ?>
			<?php if($moments): ?>
				<div class="carousel carousel-moments swiper" data-breakpoints="[['0', 1, 30], ['575', 2, 30], ['991', 3, 60]]" data-autoplay="true" data-loop="true">
					<div class="swiper-wrapper">
						<?php foreach($moments as $post):setup_postdata($post); ?>
							<div class="swiper-slide">
								<!-- Moment Card -->
								<a href="<?php the_permalink(); ?>" class="moment-card" data-cursor="oval">
									<div class="moment-card-media">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="moment-card-content">
										<?php $categories = get_the_terms(get_the_ID(), 'moment_cat');  ?>
										<?php if($categories): ?>
											<?php foreach($categories as $category): ?>
												<span class="badge badge-<?php echo (get_field('color', $category)) ?? 'green'; ?>"><?php echo $category->name; ?></span>
											<?php endforeach; ?>
										<?php endif; ?>
										<h5><?php the_title(); ?></h5>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
					<?php if(count($moments) > 3): ?>
						<div class="swiper-button-prev" data-cursor="arrow-left"></div>
						<div class="swiper-button-next" data-cursor="arrow-right"></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php wp_reset_postdata(); ?>