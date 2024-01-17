<?php
/**
 * Block Name: Intro
 */
?>
<?php $title = get_field('title'); ?>
<?php $images = get_field('images'); ?>
<!-- Section - Intro -->
<section class="section intro">
	<?php if($images): ?>
		<!-- Background -->
		<div class="section-bg">
			<?php foreach($images as $image): ?>
				<?php echo wp_get_attachment_image($image, 'full'); ?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($title): ?>
				<!-- Content -->
				<div class="section-content">
					<h3 class="outline-text" data-split-lines><?php echo $title; ?></h3>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>