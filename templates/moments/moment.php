<?php
/**
 * The template for displaying moment
 * @package CBD
 */
?>
<?php $categories = get_the_terms(get_the_ID(), 'moment_cat');  ?>
<!-- Moment Card -->
<a href="<?php the_permalink(); ?>" class="moment-card" data-cursor="oval">
	<div class="moment-card-media">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="moment-card-content">
		<?php if($categories): ?>
			<?php foreach($categories as $category): ?>
				<span class="badge badge-<?php echo (get_field('color', $category)) ?? 'green'; ?>"><?php echo $category->name; ?></span>
			<?php endforeach; ?>
		<?php endif; ?>
		<h5><?php the_title(); ?></h5>
		<?php the_excerpt(); ?>
	</div>
</a>