<?php
/**
 * Block Name: Shortext
 */
?>
<?php $title = get_field('title'); ?>
<?php $text = get_field('text'); ?>
<!-- Section - Content #2 -->
<section class="section">
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
            <div class="row gutters-lg justify-content-center">
            	<?php if($title): ?>
	                <div class="<?php if($text) echo 'col-lg-5 col-md-6 '; ?>wysiwyg mb-layout-xs mb-md-0">
	                    <p class="lead"><?php echo $title; ?></p>
	                </div>
	            <?php endif; ?>
                <?php if($text): ?>
	                <div class="<?php if($title) echo 'col-lg-5 col-md-6 '; ?>wysiwyg">
	                    <?php echo $text; ?>
	                </div>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</section>