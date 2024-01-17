<?php
/**
 * Block Name: Moment
 */
?>
<?php $bg_video = get_field('bg_video'); ?>
<?php $image = get_field('image'); ?>
<?php $logo = get_field('logo'); ?>
<?php $subtitle = get_field('subtitle'); ?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $video = get_field('video'); ?>
<?php $button = get_field('button'); ?>
<!-- Section - Hero Moment -->
<section class="section hero-moment">
	<?php if($bg_video || $image): ?>
		<!-- Background -->
		<div class="section-bg">
			<?php if($bg_video): ?>
				<div class="bg-video">
					<video src="<?php echo $bg_video; ?>" autoplay muted loop playsinline></video>
				</div>
			<?php elseif($image): ?>
				<div class="bg-image">
					<?php echo wp_get_attachment_image($image, 'full'); ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
        	<?php if($logo): ?>
	            <!-- Logo -->
	            <div class="section-logo">
	                <?php echo wp_get_attachment_image($logo, 'medium'); ?>
	            </div>
	        <?php endif; ?>
	        <?php if($title || $title || $text): ?>
	            <!-- Content -->
	            <div class="section-content">
	            	<?php if($subtitle): ?>
	                	<div class="collab"><?php echo $subtitle; ?></div>
	                <?php endif; ?>
	                <?php if($title): ?>
	                	<h1 class="h2"><?php echo $title; ?></h1>
	                <?php endif; ?>
	                <?php if($text): ?>
	                	<p class="lead border-left"><?php echo $text; ?></p>
	                <?php endif; ?>
	            </div>
	        <?php endif; ?>
	        <?php if($video || $button): ?>
	            <!-- Action -->
	            <div class="section-action">
	                <!-- Button -->
	                <button class="btn btn-oval" data-toggle="video-modal" data-video="<?php echo $video; ?>" data-mp>
	                    <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
	                    <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
	                    <i class="btn-icon i i-play"></i>
	                    <?php if($button) echo '<span class="btn-label">'.$button.'</span>'; ?>
	                </button>
	            </div>
	        <?php endif; ?>
        </div>
    </div>
</section>