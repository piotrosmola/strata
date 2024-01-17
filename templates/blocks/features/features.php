<?php
/**
 * Block Name: Features
 */
?>
<?php $image = get_field('image'); ?>
<?php $features = get_field('features'); ?>
<!-- Section - Features -->
<section class="section features">
	<!-- Background -->
	<div class="section-bg">
		<?php if($image): ?>
			<div class="bg-image"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
		<?php else: ?>
			<div class="waves bg-video">
				<div class="waves-inner">
					<video src="<?php echo get_template_directory_uri(); ?>/img/waves.mp4" autoplay loop muted playsinline></video>
					<img src="<?php echo get_template_directory_uri(); ?>/img/waves.jpg" alt="waves">
				</div>
			</div>
		<?php endif; ?>
	</div>
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="section-content">
				<?php if($features): ?>
					<?php foreach($features as $key => $feature): ?>
						<!-- Feature Card -->
						<div class="section-card wysiwyg">
							<?php if($feature['title']) echo '<h5>'.$feature['title'].'</h5>'; ?>
							<?php echo $feature['text']; ?>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>