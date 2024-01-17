<?php
/**
 * Block Name: Image
 */
?>
<?php $image = get_field('image'); ?>
<!-- Section - Single Media -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($image): ?>
				<!-- Media -->
				<div class="media" data-blur-in>
					<?php echo wp_get_attachment_image($image, 'full'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>