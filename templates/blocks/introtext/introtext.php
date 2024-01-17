<?php
/**
 * Block Name: Introtext
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $link = get_field('link'); ?>
<?php $images = get_field('images'); ?>
<!-- Section - Content #1 -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row gutters-lg justify-content-center">
				<div class="<?php if($text || $link) echo 'col-lg-5 col-md-6 '; ?>wysiwyg mb-layout-xs mb-md-0">
					<?php if($title): ?>
						<h4><?php echo $title; ?></h4>
					<?php endif; ?>
					<?php if($images): ?>
						<ul class="list-logotypes">
							<?php foreach($images as $image): ?>
								<li><?php echo wp_get_attachment_image($image, 'full'); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="<?php if($title || $images) echo 'col-lg-5 col-md-6 '; ?>wysiwyg">
					<?php echo $text; ?>
					<?php if($link): ?>
						<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-primary" data-mp>
							<span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
							<span class="btn-label"><?php echo $link['title']; ?></span>
							<i class="btn-icon i i-arrow-top-right-fat"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>