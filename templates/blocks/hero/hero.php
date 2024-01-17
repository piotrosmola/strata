<?php
/**
 * Block Name: Hero
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<?php $image = get_field('image'); ?>
<?php $video = get_field('video'); ?>
<?php $button = get_field('button'); ?>
<?php $reverse = get_field('reverse'); ?>
<?php $center = get_field('center'); ?>
<?php $full_width = get_field('full_width'); ?>
<?php $align = get_field('align'); ?>
<?php $title_size = get_field('title_size') ?? 'h3'; ?>
<?php $layout = get_field('layout') ?? 'hero-2'; ?>
<!-- Section - Hero #1 -->
<section class="section <?php echo $layout; ?><?php if($align) echo ' '.$align; ?><?php if($layout == 'hero-3' && $reverse) echo ' reversed'; ?>">
    <!-- Background -->
    <div class="section-bg">
        <div class="<?php echo $image ? 'bg-image' : 'waves bg-video'; ?><?php if($layout == 'hero-2' && !$image) echo ' reversed'; ?>">
            <?php if($image): ?>
                <?php echo wp_get_attachment_image($image, 'full'); ?>
            <?php else: ?>
                <div class="waves-inner">
                    <video src="<?php echo get_template_directory_uri(); ?>/img/waves.mp4" autoplay loop muted playsinline></video>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/waves.jpg" alt="waves">
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
            <!-- Content -->
            <div class="section-content<?php if($image) echo ' has-images'; ?><?php if($center) echo ' fullwidth'; ?>">
                <?php if($center): ?>
                    <div class="row<?php if($full_width) echo ' justify-content-center'; ?>"><div class="<?php echo ($full_width) ? 'col-lg-10' : 'col-md-9 ml-auto'; ?>">
                <?php endif; ?>
                <?php if($title): ?>
                    <h1 class="<?php echo $title_size; ?>" data-split-chars data-animate="true"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if($text): ?>
                    <p class="lead border-<?php if($reversed && $align == 'right') echo 'right'; elseif(!$align) echo 'left'; else echo $align; ?>"><?php echo $text; ?></p>
                <?php endif; ?>
                <?php if($center) echo '</div>'; ?>
            </div>
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