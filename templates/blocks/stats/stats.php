<?php
/**
 * Block Name: Stats
 */
?>
<?php $stats = get_field('stats'); ?>
<!-- Section - Stats -->
<section class="section stats">
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
        	<?php if($stats): ?>
	            <div class="row stats-row">
	            	<?php foreach($stats as $stat): ?>
	            		<?php $value = $stat['value']; ?>
	            		<?php $unit = $stat['unit']; ?>
	            		<?php $title = $stat['title']; ?>
		                <div class="col-sm-4">
		                    <!-- Stat -->
		                    <div class="stat">
		                    	<?php if($value || $unit): ?>
		                        	<div class="stat-value">
		                        		<?php if($value) echo '<span data-animate="count" data-count-to="'.$value.'">0</span>'; ?><?php echo $unit; ?>
		                        	</div>
		                        <?php endif; ?>
		                        <?php if($title): ?>
		                        	<h5 class="stat-title"><?php echo $title; ?></h5>
		                        <?php endif; ?>
		                    </div>
		                </div>
		            <?php endforeach;; ?>
	            </div>
	        <?php endif; ?>
        </div>
    </div>
</section>