<?php

if(function_exists('acf_add_options_page')):

	$page = acf_add_options_page(array(
		'page_title' => __('Ustawienia witryny', PLUGIN_NAME),
		'menu_title' => __('Witryna', PLUGIN_NAME),
		'menu_slug' => 'theme-website',	
		'capability' => 'edit_posts',
		'icon_url' => 'dashicons-editor-paste-word',
		'position' => 99,
		'redirect' => false,
		//'redirect' => 'acf-options-footer',
	));

	// add sub page
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Footer', PLUGIN_NAME),
		'menu_title' 	=> __('Footer', PLUGIN_NAME),
		'parent_slug' 	=> 'theme-website',
	));

endif;