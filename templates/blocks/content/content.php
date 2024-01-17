<?php
/**
 * Block Name: Content
 */
?>
<?php $content = get_field('content'); ?>
<?php $nav = get_field('nav'); ?>
<!-- Section - Article -->
<section class="section ">
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
            <div class="row gutters-lg reverse">
                <!-- Wysiwyg -->
                <div class="col-md-9 wysiwyg mb-layout mb-md-0 content-block">
                    <?php echo $content; ?>
                </div>
                <?php if($nav): ?>
	                <!-- Sidebar -->
	                <div class="col-md-3">
	                    <h6><?php esc_html_e('Navigation', 'cbd'); ?></h6>
	                    <ul class="nav nav-vertical nav-content"></ul>
	                </div>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</section>