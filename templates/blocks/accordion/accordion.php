<?php
/**
 * Block Name: Accordion
 */
?>
<?php $accordion = get_field('accordion'); ?>
<!-- Section - Accordion -->
<section class="section">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<?php if($accordion): ?>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<?php $i = 1; foreach($accordion as $item): ?>
							<?php $color = $item['color'] ?? 'green'; ?>
							<?php $title = $item['title']; ?>
							<?php $text = $item['text']; ?>
							<?php $link = $item['link']; ?>
							<!-- Panel -->
							<div class="panel panel-<?php echo $color; ?>">
								<div class="panel-header">
									<div class="panel-number h4">
										<span><?php echo ($i < 10) ? '0'.$i : $i; ?></span>
										<span><?php echo ($i < 10) ? '0'.$i : $i; ?></span>
									</div>
									<?php if($title): ?>
										<h4 class="panel-title"><?php echo $title; ?></h4>
									<?php endif; ?>
									<div class="panel-indicator">
										<i class="i i-arrow-top-right"></i>
									</div>
								</div>
								<div class="panel-content">
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
							</div>
						<?php $i++; endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
