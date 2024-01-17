<?php
/**
 * The template for displaying CTA
 * @package CBD
 */
?>
<?php $cta = get_field('cta', 'option'); ?>
<?php $title = $cta['title']; ?>
<?php $text = $cta['text']; ?>
<?php $link = $cta['link']; ?>
<?php if($title || $text || $link): ?>
	<!-- Section - CTA -->
	<section class="section cta">
	    <!-- Background -->
	    <div class="section-bg">
	        <div class="waves reversed bg-video">
	            <div class="waves-inner">
	                <video src="<?php echo get_template_directory_uri(); ?>/img/waves.mp4" autoplay loop muted playsinline></video>
	                <img src="<?php echo get_template_directory_uri(); ?>/img/waves.jpg" alt="waves">
	            </div>
	        </div>
	    </div>
	    <!-- Container -->
	    <div class="section-container container">
	        <div class="container-inner">
	            <div class="row justify-content-center">
	                <div class="col-lg-8 col-md-8 wysiwyg mb-2 mb-md-0">
	                	<?php if($title || $text): ?>
		                    <!-- Content -->
		                    <div class="section-content">
		                    	<?php if($title): ?>
			                        <h2 data-split-chars data-animate="true">
			                            <?php echo $title; ?>
			                        </h2>
			                    <?php endif; ?>
			                    <?php if($text): ?>
			                        <p class="lead">
			                            <?php echo $text; ?>
			                        </p>
		                        <?php endif; ?>
		                    </div>
		                <?php endif; ?>
	                </div>
	                <div class="col-lg-4 col-md-4 text-md-right">
	                	<?php if($link): ?>
		                    <!-- Button -->
		                    <a href="<?php echo $link['url']; ?>"<?php if($link['target']) echo ' target="'.$link['target'].'"'; ?> class="btn btn-oval" data-mp>
		                        <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
		                        <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
		                        <i class="btn-icon i i-arrow-top-right"></i>
		                        <span class="btn-label"><?php echo $link['title']; ?></span>
		                    </a>
		                <?php endif; ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<?php endif; ?>