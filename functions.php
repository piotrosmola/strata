<?php
/**
 * CBD functions and definitions
 * @package CBD
 */
if(!function_exists('cbd_setup')) {
	function cbd_setup() {
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'header' => __('Header'),
			'footer' => __('Footer'),
			'legal' => __('Legal'),
		));
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		add_theme_support('customize-selective-refresh-widgets');
	}
}
add_action('after_setup_theme', 'cbd_setup');

/**
 * Enqueue scripts and styles.
 */
require get_template_directory().'/inc/enqueue.php';

/**
 * Custom Admin Features.
 */
require get_template_directory().'/inc/custom-admin.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory().'/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if(defined('JETPACK__VERSION')) {
	require get_template_directory().'/inc/jetpack.php';
}

/**
 * Register ACF Blocks
 */
require get_template_directory().'/inc/register-blocks.php';

/**
 * Ajax Scripts
 */
require get_template_directory().'/inc/ajax.php';