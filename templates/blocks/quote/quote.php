<?php
/**
 * Block Name: Quote
 */
?>
<?php $video = get_field('video'); ?>
<?php $quote = get_field('quote'); ?>
<?php $cite = get_field('cite'); ?>
<!-- Section - Media + Quote -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row gutters-lg align-items-center">
				<?php if($video): ?>
					<div class="<?php if($quote || $cite) echo 'col-sm-4 '; ?>mb-layout-sm mb-sm-0">
						<!-- Media -->
						<div class="media">
							<video src="<?php echo $video; ?>" autoplay muted playsinline></video>
						</div>
					</div>
				<?php endif; ?>
				<?php if($quote || $cite): ?>
					<div class="<?php if($video) echo 'col-sm-8 col-xxl-7 '; ?>ml-auto">
						<!-- Blockquote -->
						<blockquote data-animate>
							<?php echo $quote; ?>
							<?php if($cite) echo '<footer>'.$cite.'</footer>'; ?>
						</blockquote>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>