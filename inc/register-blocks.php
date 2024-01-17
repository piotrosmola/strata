<?php
//ACF Options Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'cbd-theme-options',
		'capability'	=> 'update_core',
		'redirect'		=> false
	));
	
}

//Hide ACF for non-Admin
add_filter('acf/settings/show_admin', 'acf_show_admin');
function acf_show_admin( $show ) {
    return current_user_can('manage_options');
}

//First register our custom category
function cbd_guten_block_category( $categories, $post ) {
	return array_merge(
        array(
            array(
                'slug' => 'cbd-blocks',
        		'title' => __( 'CBD Custom Blocks', 'cbd-blocks' )
            ),
        ),
		$categories
    );
}
add_filter( 'block_categories', 'cbd_guten_block_category', 10, 2);

//Then register our blocks...
add_action( 'init', 'register_acf_blocks', 5 );

function register_acf_blocks() {

    // Register Block Folder
    register_block_type( TEMPLATEPATH . '/templates/blocks/about' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/accordion' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/cards' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/contact' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/content' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/content-image' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/featured-moments' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/features' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/hero' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/image' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/image-caption' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/image-parallax' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/intro' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/introtext' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/marquee' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/media-row' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/moment' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/moments' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/quote' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/recent-moments' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/recent-posts' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/services' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/shortext' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/stats' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/text-image' );
    register_block_type( TEMPLATEPATH . '/templates/blocks/video' );
}

// Callback to render either Preview or Block
function cbd_block_render($block, $content = '', $is_preview = false) {
    $slug = str_replace('acf/', '', $block['name']);
    if ( $is_preview && isset( $block['example']['attributes']['image'] ) ) {
        echo '<img decoding="async" loading="lazy" src="'. get_template_directory_uri() . '/templates/blocks/' . $slug . '/' . $block['example']['attributes']['image'] .'" style="width:100%; height:auto;">';
        return;
    } else if ($block) {
        $template = $block['render_template'];
        $template = str_replace( '.php', '', $template );
        get_template_part( '/templates/blocks/' . $slug . '/' . $template );
    }
}

/**
 * Block editor scripts
 */
function custom_admin_enqueues() {

    // custom block styles
    wp_enqueue_script(
        'wd-editor',
        get_stylesheet_directory_uri() . '/inc/custom-admin.js',
        [ 'wp-blocks', 'wp-dom' ],
        filemtime( get_stylesheet_directory() . '/inc/custom-admin.js' ),
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'custom_admin_enqueues' );