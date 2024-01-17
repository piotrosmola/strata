<?php
/**
 * Block Name: Text & Image
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $link = get_field('link'); ?>
<?php $image = get_field('image'); ?>
<?php $images = get_field('images'); ?>
<!-- Section - Media with content #2 -->
<section class="section bg-white inverted">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($title): ?>
				<h4 class="mb-layout-xs"><?php echo $title; ?></h4>
			<?php endif; ?>
			<?php if($image || $images || $text || $link): ?>
				<div class="row gutters-lg">
					<?php if($image || $images): ?>
						<div class="<?php if($text || $link) echo 'col-md-6 '; ?>mb-layout-xs mb-md-0">
							<!-- Media -->
							<div class="media absolute">
								<?php if($image) echo wp_get_attachment_image($image, 'full'); ?>
								<?php if($images): ?>
									<ul class="list-logotypes">
										<?php foreach($images as $key => $image): ?>
											<li data-animation="fade-in-down" data-animation-delay="<?php echo 250 * $key; ?>">
												<?php echo wp_get_attachment_image($image, 'medium'); ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					<?php if($text || $link): ?>
						<div class="<?php if($image || $images) echo 'col-md-6 '; ?>mb-md-0">
							<?php echo $text; ?>
							<?php if($link): ?>
								<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-primary" data-mp>
									<span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
									<span class="btn-label"><?php echo $link['title']; ?></span>
									<i class="btn-icon i i-arrow-top-right-fat"></i>
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>