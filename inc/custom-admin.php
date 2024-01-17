<?php
// Admin Area CSS
add_action('admin_head', 'cbd_custom_styles');

function cbd_custom_styles() {
  echo '<style>
    #cbd_dashboard_widget .ui-sortable-handle,
    #cbd_ticket_widget .ui-sortable-handle {
        background: #b508cd;
        background: -moz-linear-gradient(to bottom right, #fe7531, #b508cd);
        background: -webkit-linear-gradient(to bottom right, #fe7531, #b508cd);
        background: linear-gradient(to bottom right, #fe7531, #b508cd);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fe7531",endColorstr="#b508cd",GradientType=1);
        color: #fff;
    }
    #cbd_dashboard_widget .handle-actions,
    #cbd_ticket_widget .handle-actions {
        display: none;
    }
    #cbd_dashboard_widget .toggle-indicator,
    #cbd_ticket_widget .toggle-indicator {
        color: #fff;
    }
    .wp-block-spacer {
    	margin-top: 0;
    	margin-bottom: 0;
    }
    
    .wp-block-spacer.is-style-small {
    	height: clamp(12px, 3vw, 36px) !important;
    }
    
    .wp-block-spacer.is-style-medium {
    	height: clamp(24px, 5vw, 48px) !important;
    }
    
    .wp-block-spacer.is-style-large {
    	height: clamp(36px, 8vw, 72px) !important;
    }
    
    .wp-block-spacer.is-style-x-large {
    	height: clamp(36px, 9vw, 96px) !important;
    }
  </style>';
}

//Disable Comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

//Custom Dashboard Widget
add_action( 'wp_dashboard_setup', 'register_cbd_dashboard_widget' );
function register_cbd_dashboard_widget() {
    wp_add_dashboard_widget(
		'cbd_ticket_widget',
		'Creative Brand Design Support',
		'cbd_ticket_widget_display'
	);
}

function cbd_ticket_widget_display() { ?>
    <div style="display: flex; align-items: center; justify-content: space-around;">
        <img decoding="async" loading="lazy" style="width: 50%;" src="<?php echo get_theme_file_uri('/img/cbd-logo-black.png'); ?>" alt="Creative Brand Design Logo">
        <a target="_blank" rel="noopener noreferrer" class="button button-primary open-ticket" href="https://portal.creativebranddesign.co.uk/forms/ticket">Create Ticket</a>
    </div>
    <div>
        <p><strong>Thanks for choosing Creative Brand Design!</strong></p>
        <hr>
        <p>Got a problem with your site, or want to make some changes & need us to take a look for you?</p>
        <p>Use the link above to raise a support ticket on our Portal & we'll get back to you ASAP.</p>
    </div>
<?php }

add_filter( 'login_headerurl', 'custom_login_url' );
function custom_login_url($url) {
    return home_url();
}
add_filter( 'login_headertext', 'custom_login_text' );
function custom_login_text($text) {
    return get_option( 'blogname' );
}

//Custom Login Styling
function cbd_login_styling() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 0px;
            margin-bottom: 0;
        }
        .login form {
            border-radius: 5px;
        }
        body.login.wp-core-ui .button-primary{
            color: #fff !important;
            text-shadow: none;
        }
        .featuresp label + label input {
            width: 500px;
        }
        .login #backtoblog, .login #nav {
            background: #fff;
            padding: 8px 24px !important;
            border-radius: 5px;
			border: 1px solid #c3c4c7;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'cbd_login_styling' );
add_action( 'admin_enqueue_scripts', 'cbd_login_styling' );