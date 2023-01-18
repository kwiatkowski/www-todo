<?php

// theme setup
function mk_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');

    // add_editor_style();
    register_nav_menu('menu-primary', __('Menu główne', 'theme'));
    load_theme_textdomain(THEME_NAME, THEME_DIR . '/languages');
    add_image_size('thumb-380x240', 380, 240, true );
    if (!get_option('medium_crop')):
        update_option('medium_crop', '1');
    endif;

}

add_action('after_setup_theme', 'mk_theme_setup');


// add theme style and scripts
function mk_enqueue_scripts() {
    if ( WP_ENV == 'production' ):
        wp_enqueue_style('theme-style', THEME_URI.'/style.min.css', false, THEME_VERSION, 'all');
        wp_enqueue_script('theme-js', THEME_URI . '/assets/js/app.min.js', false, THEME_VERSION, true);
    else:
        wp_enqueue_style('theme-style', THEME_URI.'/style.css', false, THEME_VERSION, 'all');
        wp_enqueue_script('theme-js', THEME_URI . '/assets/js/app.js', false, THEME_VERSION, true);
    endif;
}

add_action('wp_enqueue_scripts', 'mk_enqueue_scripts', 0);


// remove header link for REST API (wordpress 4.4)
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);


// remove wordpress generator, rsd, wlw
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );


// remove header recent comments
function mmt_remove_recent_comments_style() {

    global $wp_widget_factory;

    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

}

add_action('widgets_init', 'mmt_remove_recent_comments_style');


// remove jquery
function mmt_remove_jquery() {

    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');

}

// add_filter('wp_enqueue_scripts', 'mmt_remove_jquery', PHP_INT_MAX);


// remove jquery migrate
function mmt_remove_jquery_migrate(&$scripts) {

    if (!is_admin()):
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array('jquery-core'), '1.11.1');
    endif;

}

add_filter('wp_default_scripts', 'mmt_remove_jquery_migrate');



// remove footer link for wp-embed.js (wordpress 4.4)
function mmt_deregister_scripts() {

    wp_deregister_script('wp-embed');

}

add_action('wp_footer', 'mmt_deregister_scripts');

add_action('wp_footer', function() {
    wp_dequeue_style('core-block-supports');
});

add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
});

function mkco_deregister_jquery() {

    if ( !is_admin() ):
        wp_deregister_script('jquery');
    endif;

}

// add_action( 'wp_enqueue_scripts', 'mkco_deregister_jquery' );





function mkco_deregister_block_library() {
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_print_styles', 'mkco_deregister_block_library', 100 );






// remove acf from admin menu
if ( ( WP_ENV == 'staging' ) || ( WP_ENV == 'production' ) ):
    add_filter('acf/settings/show_admin', '__return_false');
endif;


// remove elements form admin menu
function mmt_admin_menu_remove() {

    global $menu;
    global $submenu;

    /* dashboard */
    // unset($menu[2]);
        // unset($submenu['index.php'][0]); // home
        // unset($submenu['index.php'][10]); // updates

    /* posts */
    // unset($menu[5]);
        // unset($submenu['edit.php'][5]); // all posts
        // unset($submenu['edit.php'][10]); // add new
        // unset($submenu['edit.php'][15]); // category
        // unset($submenu['edit.php'][16]); // tags

    /* media */
    // unset($menu[10]);
        // unset($submenu['upload.php'][5]); // library
        // unset($submenu['upload.php'][10]); // add new

    /* pages */
    // unset($menu[20]);
        // unset($submenu['edit.php?post_type=page'][5]); // all pages
        // unset($submenu['edit.php?post_type=page'][10]); // add new


    /* comments */
    unset($menu[25]);
        //unset($submenu['edit-comments.php'][0]); // all comments

    /* appearance */
    // unset($menu[60]);
        /* tools submenu */
        // unset($submenu['themes.php'][5]); // themes
        // unset($submenu['themes.php'][7]); // widgts
        // unset($submenu['themes.php'][10]); // menus
        // remove_submenu_page('themes.php','theme-editor.php'); // editor

    /* plugins */
    // unset($menu[65]);
        // unset($submenu['plugins.php'][5]); // instaled plugins
        // unset($submenu['plugins.php'][10]); // add new
        // unset($submenu['plugins.php'][15]); // editor

    /* users */
    unset($menu[70]);
        // unset($submenu['users.php'][5]); // all users
        // unset($submenu['users.php'][10]); // add new
        // unset($submenu['users.php'][15]); // your profile

    /* tools */
    // unset($menu[75]);
        // unset($submenu['tools.php'][5]); // tools
        // unset($submenu['tools.php'][10]); // import
        // unset($submenu['tools.php'][15]); // export
        // remove_submenu_page('tools.php', 'dbs_options');

    /* settings */
    // unset($menu[80]);
        // unset($submenu['options-general.php'][10]); // settings
        // unset($submenu['options-general.php'][15]); // writting
        // unset($submenu['options-general.php'][20]); // reading
        // unset($submenu['options-general.php'][25]); // discussion
        // unset($submenu['options-general.php'][30]); // media
        // unset($submenu['options-general.php'][35]); // privacy
        // unset($submenu['options-general.php'][40]); // permalinks

    /* forms */
    //remove_menu_page('wpcf7');

}

add_action('admin_menu', 'mmt_admin_menu_remove', 999);

add_filter('script_loader_tag', 'clean_script_tag');

function clean_script_tag($input) {
    $input = str_replace("type='text/javascript' ", '', $input);
    return str_replace("'", '"', $input);
}

//
function dbms_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\']text\/(javascript|css)['\']/", '', $tag );
}

add_filter('style_loader_tag', 'dbms_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'dbms_remove_type_attr', 10, 2);


function my_deregister_styles() {
    wp_deregister_style( 'dashicons' );
}

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );



/**
 * www_custom_admin_title
 *
 * @return $title
 */

function www_custom_admin_title($admin_title, $title){
    return 'Dashboard';
}

add_filter('admin_title', 'www_custom_admin_title', 10, 2);



/**
 * Add favicon to wordpress panel
 *
 * add favicon to header
 *
 * @return echo
 */

function www_add_favicon() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/assets/images/favicon/favicon-16x16.png" />';
}

add_action('wp_head', 'www_add_favicon');
add_action('admin_head', 'www_add_favicon');
add_action('login_head', 'www_add_favicon');
