<?php
/**
 * Block Name: About
 */
?>
<?php $text = get_field('text'); ?>
<?php $link = get_field('link'); ?>
<!-- Section - Text + CTA -->
<section class="section pb-0">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row align-items-end">
				<?php if($text): ?>
					<div class="<?php if($link) echo 'col-md-6 col-lg-offset-1 '; ?>wysiwyg mb-2 mb-md-0">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
				<?php if($link): ?>
					<div class="<?php if($text) echo 'col-lg-4 col-md-6 '; ?>text-md-right">
						<!-- Button -->
						<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-oval" data-mp>
							<span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
							<span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
							<i class="btn-icon i i-arrow-top-right"></i>
							<span class="btn-label"><?php echo $link['title']; ?></span>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>