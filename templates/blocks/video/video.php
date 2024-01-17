<?php
/**
 * Block Name: Video
 */
?>
<?php $image = get_field('image'); ?>
<?php $video = get_field('video'); ?>
<?php $color = get_field('color') ?? 'pink'; ?>
<?php if($image || $video): ?>
	<!-- Media -->
	<div class="media">
		<?php if($image) echo wp_get_attachment_image($image, 'full'); ?>
		<?php if($video): ?>
			<button data-toggle="video-modal" data-video="<?php echo $video; ?>" class="play play-<?php echo $color; ?>"></button>
		<?php endif; ?>
	</div>
<?php endif; ?>