<?php

// add stylesheet to login screen
function mmt_login_stylesheet() {

	wp_enqueue_style('custom-login', get_template_directory_uri() . '/assets/css/style-login.css');

}

add_action('login_enqueue_scripts', 'mmt_login_stylesheet');



// change logo url
function mmt_login_logo_url() {

	return home_url();

}

add_filter('login_headerurl', 'mmt_login_logo_url');



// change logo title
function mmt_login_logo_url_title() {

	return get_bloginfo();

}

add_filter('login_headertitle', 'mmt_login_logo_url_title');



// add favicon
function mmt_login_add_favicon() {

	$favicon_url = get_template_directory_uri() . '/assets/images/favicon.png';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '"/>';

}

add_action('login_head', 'mmt_login_add_favicon');
add_action('admin_head', 'mmt_login_add_favicon');



// redirect when logout
function mmt_logout_redirect_home() {

	wp_redirect(home_url());
	exit();

}

add_action('wp_logout','mmt_logout_redirect_home');



function mmt_login_error_override() {
	return '';
}

add_filter('login_errors', 'mmt_login_error_override');



// remove shake
function mmt_login_remove_shake() {

remove_action('login_head', 'wp_shake_js', 12);

}

add_action('login_head', 'mmt_login_remove_shake');