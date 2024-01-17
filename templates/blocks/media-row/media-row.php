<?php
/**
 * Block Name: Media Row
 */
?>
<?php $media = get_field('media'); ?>
<!-- Section - Media Row -->
<section class="section media-row">
	<!-- Container -->
	<div class="section-container container pt-layout-xs pb-layout-xs">
		<div class="container-inner">
			<div class="carousel swiper" data-breakpoints="[['0', 1, 30], ['575', 2, 30], ['991', 3, 60]]">
				<div class="swiper-wrapper">
					<?php foreach($media as $item): ?>
						<?php $image = $item['image']; ?>
						<?php $video = $item['video']; ?>
						<?php $color = $item['color'] ?? 'green'; ?>
						<div class="swiper-slide">
							<div class="media">
								<?php if($image) echo wp_get_attachment_image($image, 'full'); ?>
								<?php if($video): ?>
									<button data-toggle="video-modal" data-video="<?php echo $video; ?>" class="play play-<?php echo $color; ?>"></button>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>