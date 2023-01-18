<?php

// add custom styles

function theme_assets() {

	wp_register_style(PLUGIN_NAME, plugin_dir_url(__FILE__) . 'css/style.css', false, '1.0');
	wp_enqueue_style(PLUGIN_NAME);

}

add_action('admin_enqueue_scripts', 'theme_assets', 500, 2);