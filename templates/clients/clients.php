<?php
/**
 * The template for displaying Clients
 * @package CBD
 */
?>
<?php $clients = get_field('clients', 'option'); ?>
<?php $title = $clients['title']; ?>
<?php $images = $clients['images']; ?>
<?php if($title || $images): ?>
	<!-- Section - Clients -->
	<section class="section bg-white inverted pt-layout-sm pb-layout-sm">
	    <!-- Container -->
	    <div class="section-container container">
	        <div class="container-inner">
	        	<?php if($title): ?>
		            <h5 class="mb-layout-xs">
		                <?php echo $title; ?>
		            </h5>
		        <?php endif; ?>
		        <?php if($images): ?>
		            <div class="logotypes">
		                <div class="logotypes-wrapper">
		                    <?php foreach($images as $image): ?>
			                    <div class="logotypes-item">
			                    	<?php echo wp_get_attachment_image($image, 'medium'); ?>
			                    </div>
		                    <?php endforeach; ?>
		                </div>
		            </div>
		        <?php endif; ?>
	        </div>
	    </div>
	</section>
<?php endif; ?>