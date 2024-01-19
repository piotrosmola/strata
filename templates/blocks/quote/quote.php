<?php
/**
 * Block Name: Quote
 */
?>
<?php $type = get_field('type'); ?>
<?php $video = get_field('video'); ?>
<?php $image = get_field('image'); ?>
<?php $quote = get_field('quote'); ?>
<?php $cite = get_field('cite'); ?>
<!-- Section - Media + Quote -->
<section class="section">
  <!-- Container -->
  <div class="section-container container">
    <div class="container-inner">
      <div class="row gutters-lg">
        <?php if($type === 'video' && $video): ?>
        <div class="<?php if($quote || $cite) echo 'col-sm-4 '; ?>mb-layout-sm mb-sm-0">
          <!-- Media -->
          <div class="media">
            <video src="<?php echo $video; ?>" autoplay muted playsinline></video>
          </div>
        </div>
        <?php endif; ?>
        <?php if($type === 'image' && $image): ?>
        <div class="<?php if($quote || $cite) echo 'col-sm-4 '; ?>mb-layout-sm mb-sm-0">
          <!-- Media -->
          <div class="media">
            <?php echo wp_get_attachment_image($image, 'medium'); ?>
          </div>
        </div>
        <?php endif; ?>
        <?php if($quote || $cite): ?>
        <div class="<?php if($video || $image) echo 'col-sm-8 col-xxl-7 '; ?>ml-auto">
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