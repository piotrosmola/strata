<?php
/**
 * Block Name: Content & Image
 */
?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
<?php $reverse = get_field('reverse'); ?>
<!-- Section - Media with content -->
<section class="section media-with-content">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row gutters-lg align-items-start justify-content-center<?php if($reverse) echo ' reverse'; ?>">
				<?php if($text): ?>
					<div class="<?php if($image) echo 'col-lg-5 col-md-6 '; ?>wysiwyg mb-layout-sm mb-md-0">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
				<?php if($image): ?>
					<div class="<?php echo ($text) ? 'col-lg-5 col-md-6' : 'col-md-12'; ?>">
						<!-- Media -->
						<div class="media">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>