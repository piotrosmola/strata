<?php
/**
 * Block Name: Contact
 */
?>
<?php $contacts = get_field('contacts'); ?>
<?php $title = get_field('title'); ?>
<?php $form = get_field('form'); ?>
<?php $image = get_field('image'); ?>
<?php $locations = get_field('locations'); ?>
<!-- Section - Contact -->
<section class="section contact">
	<!-- Container -->
	<div class="section-container container">
		<div class="container-inner">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<?php if($contacts): ?>
						<!-- Details -->
						<div class="row row-details">
							<?php foreach($contacts as $contact): ?>
								<div class="col-md-4 col-sm-6 mb-layout-sm">
									<?php if($contact['title']): ?>
										<h5 class="border-bottom"><?php echo $contact['title']; ?></h5>
									<?php endif; ?>
									<?php if($contact['text']): ?>
										<address class="text-lg"><?php echo $contact['text']; ?></address>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<?php if($title || $form || $image || $locations): ?>
						<!-- Form & Map -->
						<div class="row">
							<?php if($title || $form): ?>
								<div class="<?php if($image || $locations) echo 'col-md-5 '; ?>col-form">
									<?php if($title) echo '<h5>'.$title.'</h5>'; ?>
									<?php if($form): ?>
										<div class="form"><?php echo do_shortcode($form); ?></div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php if($image || $locations): ?>
								<div class="<?php if($title || $form) echo 'col-md-7 '; ?>col-map">
									<!-- Map -->
									<div class="section-map">
										<?php if($image): ?>
											<div class="section-map-image">
												<?php echo wp_get_attachment_image($image, 'full'); ?>
											</div>
										<?php endif; ?>
										<?php if($locations): ?>
											<?php $i = 1; $d = 0; foreach($locations as $location): ?>
											<?php $color = $location['color'] ?? 'green'; ?>
											<?php $top = $location['top'] ?? 0; ?>
											<?php $left = $location['left'] ?? 0; ?>
											<?php $title = $location['title']; ?>
											<?php $text = $location['text']; ?>
											<!-- Map Marker -->
											<div class="section-map-marker"<?php if($top || $left) echo ' style="--left: '.$left.'%; --top: '.$top.'%"'; ?>>
												<?php if($top || $left): ?>
													<span class="section-map-marker-dot <?php echo $color; ?>"></span>
												<?php endif; ?>
												<?php if($title || $text): ?>
													<div class="section-map-marker-popup<?php if($i % 2 == 0) echo ' bottom'; ?>" data-animation="fade-in-<?php echo ($i % 2 == 0) ? 'up' : 'down'; ?>" data-animation-delay="<?php echo $d; ?>">
														<?php if($title) echo '<h5>'.$title.'</h5>'; ?>
														<?php if($text) echo '<address>'.$text.'</address>'; ?>
													</div>
												<?php endif; ?>
											</div>
											<?php $i++; $d = $d + 200; endforeach; ?>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>