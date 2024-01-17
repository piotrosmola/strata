<?php
/**
 * Enqueue scripts and styles.
 */
//Cache Buster - only use for local files, CDN will not work.
function cbd_enqueue($file_handle, $relpath, $type='script', $file_deps=array()) {
	$uri = get_theme_file_uri($relpath);
	$vsn = filemtime(get_theme_file_path($relpath));

	//Dynamically 
	if($type == 'script') wp_enqueue_script($file_handle, $uri, $file_deps, $vsn, true);
	else if($type == 'style') wp_enqueue_style($file_handle, $uri, $file_deps, $vsn);
}

function cbd_scripts() {
    // Deregister dashicons if not logged in
    if(!is_user_logged_in()) {
        wp_deregister_style('dashicons');
    }

	// CSS
	// NOTE: It would be great to use original bundled files which makes me easier to maintain and keeps the published code minified and hard to read for others.
	// cbd_enqueue('style', '/css/style.css', 'style');
	cbd_enqueue('style', '/dist/style.css', 'style');
	cbd_enqueue('cbd', '/style.css', 'style');

	// JS
	cbd_enqueue('libs', '/js/libs.js', 'script');
	// NOTE: It would be great to use original bundled files which makes me easier to maintain and keeps the published code minified and hard to read for others.
	// cbd_enqueue('script', '/js/script.js', 'script');
	cbd_enqueue('script', '/dist/core.bundle.js', 'script');

	if(is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cbd_scripts');