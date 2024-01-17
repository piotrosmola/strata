<?php
/**
 * Block Name: Cards
 */
?>
<?php $cards = get_field('cards'); ?>
<!-- Section - Media with content #2 -->
<section class="section bg-white inverted">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($cards): ?>
				<div class="row gutters-lg">
					<?php $i = 1; foreach($cards as $card): ?>
						<?php $title = $card['title']; ?>
						<?php $image = $card['image']; ?>
						<?php $text = $card['text']; ?>
						<?php $link = $card['link']; ?>
						<div class="col-md-6<?php if($i < count($cards)) echo ' mb-layout-sm mb-md-0'; ?>">
							<?php if($title): ?>
								<h4 class="mb-layout-xs"><?php echo $title; ?></h4>
							<?php endif; ?>
							<?php if($image): ?>
								<!-- Media -->
								<div class="media mb-layout-xs">
									<?php echo wp_get_attachment_image($image, 'large'); ?>
								</div>
							<?php endif; ?>
							<?php if($text || $link): ?>
								<div class="wysiwyg">
									<?php echo $text; ?>
									<?php if($link): ?>
										<a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-primary" data-mp>
											<span class="btn-outline" data-mp-item data-mp-scale="1.1"></span>
											<span class="btn-label"><?php echo $link['title']; ?></span>
											<i class="btn-icon i i-arrow-top-right-fat"></i>
										</a>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php $i++; endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>