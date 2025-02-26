<?php
/**
 * Ajax Scripts
 */
function custom_ajax_scripts() {
	wp_register_script('ajax_scripts', get_template_directory_uri().'/js/ajax.js', array(), '', true);
	wp_localize_script('ajax_scripts', 'ajax_params', array(
		'ajax_url' => admin_url('admin-ajax.php'),
	));
	wp_enqueue_script('ajax_scripts');
}
add_action('wp_enqueue_scripts', 'custom_ajax_scripts');

/**
 * Load Careers
 */
function load_posts() { ?>
<?php
		global $wp_query;
		$paged = ($_POST['paged']) ? $_POST['paged'] : 1;
		$posts_per_page = get_option('posts_per_page');
		$category = $_POST['category'];
		$args = [
			'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
			'paged' => $paged,
		];
		if($category) $args['category_name'] = $category;
		$wp_query = new WP_Query($args);
	?>
<?php if($wp_query->have_posts()): ?>
<?php if($paged == 1) echo '<!-- Moments Grid --><div class="news-grid mb-layout-xs js-posts-row">'; ?>
<?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
<?php get_template_part('templates/posts/post'); ?>
<?php endwhile; ?>
<?php if($paged == 1) echo '</div>'; ?>
<?php if($paged == 1 && $wp_query->max_num_pages > 1): ?>
<div class="text-center">
  <!-- Button -->
  <a href="#" class="btn btn-oval js-more-posts" data-mp data-pages="<?php echo $wp_query->max_num_pages; ?>">
    <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
    <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
    <span class="btn-label"><?php esc_html_e('More Posts', 'cbd'); ?></span>
    <i class="btn-icon i i-arrow-down"></i>
  </a>
</div>
<?php endif; ?>
<?php else: ?>
<?php get_template_part('templates/posts/nofound'); ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php die();
}
add_action('wp_ajax_load_posts', 'load_posts');
add_action('wp_ajax_nopriv_load_posts', 'load_posts');

/**
 * Load Moments
 */
function load_moments() { ?>
<?php
		global $wp_query;
		$paged = ($_POST['paged']) ? $_POST['paged'] : 1;
		$posts_per_page = get_option('posts_per_page');
		$category = $_POST['category'];
		$args = [
			'post_type' => 'moment',
            'post_status' => 'publish',
            'posts_per_page' => $posts_per_page,
			'paged' => $paged,
		];
		if($category) $args['tax_query'][] = ['taxonomy' => 'moment_cat', 'field' => 'slug', 'terms' => $category];
		$wp_query = new WP_Query($args);
	?>
<?php if($wp_query->have_posts()): ?>
<?php if($paged == 1) echo '<!-- Moments Grid --><div class="moments-grid mb-layout-xs js-moments-row">'; ?>
<?php while($wp_query->have_posts()):$wp_query->the_post(); ?>
<?php get_template_part('templates/moments/moment'); ?>
<?php endwhile; ?>
<?php if($paged == 1) echo '</div>'; ?>
<?php if($paged == 1 && $wp_query->max_num_pages > 1): ?>
<div class="text-center">
  <!-- Button -->
  <a href="#" class="btn btn-oval js-more-moments" data-mp data-pages="<?php echo $wp_query->max_num_pages; ?>">
    <span class="btn-bg" data-mp-item data-mp-scale="1.15"></span>
    <span class="btn-outline" data-mp-item="0.05" data-mp-scale="1.075"></span>
    <span class="btn-label"><?php esc_html_e('More Moments', 'cbd'); ?></span>
    <i class="btn-icon i i-arrow-down"></i>
  </a>
</div>
<?php endif; ?>
<?php else: ?>
<?php get_template_part('templates/moments/nofound'); ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php die();
}
add_action('wp_ajax_load_moments', 'load_moments');
add_action('wp_ajax_nopriv_load_moments', 'load_moments');
