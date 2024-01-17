<?php
/**
 * Block Name: Image Parallax
 */
?>
<?php $image = get_field('image'); ?>
<!-- Section - Media Parallax -->
<section class="section media-parallax">
	<!-- Background -->
	<div class="section-bg">
		<?php if($image): ?>
			<div class="bg-image">
				<?php echo wp_get_attachment_image($image, 'full'); ?>
			</div>
		<?php endif; ?>
	</div>
</section>