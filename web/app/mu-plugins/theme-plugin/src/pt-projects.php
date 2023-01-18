<?php

function pt_project_init() {

	$slug = __( 'projekty', PLUGIN_NAME );

	$labels = array(
		'name'                  => _x( 'Projekty', 'Post type general name', PLUGIN_NAME ),
		'singular_name'         => _x( 'Projekt', 'Post type singular name', PLUGIN_NAME ),
		'menu_name'             => _x( 'Projekty', 'Admin Menu text', PLUGIN_NAME ),
		'name_admin_bar'        => _x( 'Projekt', 'Add New on Toolbar', PLUGIN_NAME ),
		'add_new'               => __( 'Dodaj', PLUGIN_NAME ),
		'add_new_item'          => __( 'Dodaj nowy projekt', PLUGIN_NAME ),
		'new_item'              => __( 'Nowy projekt', PLUGIN_NAME ),
		'edit_item'             => __( 'Edytuj', PLUGIN_NAME ),
		'view_item'             => __( 'Zobacz', PLUGIN_NAME ),
		'all_items'             => __( 'Wszystkie', PLUGIN_NAME ),
		'search_items'          => __( 'Szukaj', PLUGIN_NAME ),
		'parent_item_colon'     => __( 'Nadrzędny:', PLUGIN_NAME ),
		'not_found'             => __( 'Nie odnaleziono', PLUGIN_NAME ),
		'not_found_in_trash'    => __( 'Nie odnaleziono', PLUGIN_NAME ),
	);

	$args = array(
		'labels'                => $labels,
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => $slug ),
		'capability_type'       => 'post',
		'has_archive'           => false,
		'hierarchical'          => false,
		'supports'              => array( 'title','editor', 'thumbnail' ),
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		//'taxonomies'            => array('projects', 'xxx'),
	);

	register_post_type( 'project', $args );

}

add_action( 'init', 'pt_project_init' );