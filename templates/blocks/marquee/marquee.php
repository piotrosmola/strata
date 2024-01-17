<?php
/**
 * Block Name: Marquee
 */
?>
<?php $title = get_field('title'); ?>
<?php $image = get_field('image'); ?>
<!-- Section - Marquee -->
<section class="section marquee">
	<!-- Background -->
	<div class="section-bg">
		<?php if($image): ?>
			<div class="bg-image">
				<?php echo wp_get_attachment_image($image, 'full'); ?>
			</div>
		<?php endif; ?>
	</div>
	<!-- Content -->
	<div class="section-content">
		<?php if($title): ?>
			<h2><span><?php echo $title; ?></span></h2>
		<?php endif; ?>
	</div>
</section>