<?php
/**
 * Block Name: Image Caption
 */
?>
<?php $image = get_field('image'); ?>
<?php $caption = get_field('caption'); ?>
<!-- Section - Media + Caption -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row gutters-lg reverse align-items-end">
				<?php if($image): ?>
					<div class="<?php if($caption) echo 'col-sm-8 '; ?>mb-layout-xs mb-sm-0">
						<!-- Media -->
						<div class="media">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if($caption): ?>
					<div class="<?php if($image) echo 'col-xl-3 col-sm-4 col-10 '; ?>ml-auto">
						<h5 class="text-sm border-right text-right mb-0" data-animation="fade-in-left"><?php echo $caption; ?></h5>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>