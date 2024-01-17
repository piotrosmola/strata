<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 * @package CBD
 */
if(!function_exists('wp_body_open')) {
	/**
	 * Shim for sites older than 5.2.
	 */
	function wp_body_open() {
		do_action('wp_body_open');
	}
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cbd_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if(!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if(!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}
	//Adds the page slug to body class.
	global $post;
	if(isset($post)) {
		$classes[] = $post->post_name;
	}
	return $classes;
}
add_filter('body_class', 'cbd_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cbd_pingback_header() {
	if(is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'cbd_pingback_header');

//Localize Theme Paths as JS variables
function cbd_js_variables() { ?>
	<script>
	  var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	  var siteurl = '<?php echo get_site_url(); ?>';
	  var themeurl = '<?php echo get_template_directory_uri(); ?>';
	</script>
<?php }
add_action ('wp_head', 'cbd_js_variables');

//Remove admin bar page bump
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

// Automatic Plugin Updates
add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_translation', '__return_true');

/**
 * Disable plugin update for stable version prioritet
 */
function filter_plugin_updates($value) {
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');

/**
* Gravity Forms Submit Button
*/
function custom_gform_submit_button($button, $form) {
	$text = $form['button']['text'];
	return "<button type='submit' id='gform_submit_button_{$form['id']}' class='btn btn-primary' data-mp><span class='btn-outline' data-mp-item data-mp-scale='1.1'></span><span class='btn-label'>{$text}</span><i class='btn-icon i i-arrow-top-right-fat'></i></button>";
}
add_filter('gform_submit_button', 'custom_gform_submit_button', 10, 2);