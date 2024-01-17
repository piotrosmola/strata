<?php
/**
 * The template for displaying post
 * @package CBD
 */
?>
<?php $categories = get_the_category(); ?>
<!-- News Card -->
<a href="<?php the_permalink(); ?>" class="news-card" data-cursor="oval" data-cursor-text="<?php esc_html_e('Read More', 'cbd'); ?>">
	<div class="news-card-media">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="news-card-content">
		<span class="btn btn-arrow btn-<?php echo (get_field('color', $categories[0])) ?? 'green'; ?>"><i class="btn-icon i i-arrow-top-right"></i></span>
		<?php if($categories): ?>
			<?php foreach($categories as $category): ?>
				<span class="badge badge-<?php echo (get_field('color', $category)) ?? 'green'; ?>"><?php echo $category->name; ?></span>
			<?php endforeach; ?>
		<?php endif; ?>
		<h5><?php the_title(); ?></h5>
	</div>
</a>