<?php
/**
 * The template for displaying single post
 * @package CBD
 */
require(get_template_directory() . '/inc/breadcrumbs.php');
?>
<?php $author = get_user_by('id', get_the_author_ID()); ?>
<?php $avatar = get_field('avatar', $author); ?>
<?php $facebook = get_field('facebook', $author); ?>
<?php $instagram = get_field('instagram', $author); ?>
<?php $twitter = get_field('twitter', $author); ?>
<?php $categories = get_the_category(); ?>
<!-- Section - Hero #3 (News) -->
<section class="section hero-3">
	<?php if(has_post_thumbnail()): ?>
	    <!-- Background -->
	    <div class="section-bg">
	        <div class="bg-image"><?php the_post_thumbnail(); ?></div>
	    </div>
	<?php endif; ?>
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
            <!-- Content -->
            <div class="section-content fullwidth">
              <?php echo get_breadcrumbs(); ?>
            	<?php if($categories): ?>
            		<?php foreach($categories as $category): ?>
                		<span class="badge badge-<?php echo (get_field('color', $category)) ?? 'green'; ?>"><?php echo $category->name; ?></span>
                	<?php endforeach; ?>
                <?php endif; ?>
                <h1 class="mt-3 h3"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- Section - Article -->
<section class="section ">
    <!-- Container -->
    <div class="section-container container">
        <div class="container-inner">
            <div class="row gutters-lg reverse">
                <!-- Wysiwyg -->
                <div class="col-md-9 wysiwyg mb-layout mb-md-0">
                    <?php the_content(); ?>
                </div>
                <!-- Author -->
                <div class="col-md-3">
                    <!-- Author -->
                    <div class="author author-orange">
                    	<?php if($avatar): ?>
	                        <div class="author-image">
	                            <?php echo wp_get_attachment_image($avatar, 'medium'); ?>
	                        </div>
	                    <?php endif; ?>
                        <div class="author-content">
                            <h6><?php esc_html_e('Written by', 'cbd'); ?></h6>
                            <h5><?php echo get_the_author(); ?></h5>
                            <span class="text-muted"><?php echo get_the_date('j M Y'); ?></span>
                            <?php if($facebook || $instagram || $twitter): ?>
	                            <ul class="social-icons">
	                            	<?php if($facebook) echo '<li><a href="'.$facebook.'" target="_blank"><i class="i i-facebook"></i></a></li>'; ?>
	                            	<?php if($instagram) echo '<li><a href="'.$instagram.'" target="_blank"><i class="i i-instagram"></i></a></li>'; ?>
	                            	<?php if($twitter) echo '<li><a href="'.$twitter.'" target="_blank"><i class="i i-twitter"></i></a></li>'; ?>
	                            </ul>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('templates/posts/related'); ?>