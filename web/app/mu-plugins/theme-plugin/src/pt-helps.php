<?php

if ( !function_exists('pt_helps') ):

	function pt_helps() {

		$labels = array(
			'name'                  => _x( 'Pomoc', 'Post type general name', PLUGIN_NAME ),
			'singular_name'         => _x( 'Pomoc', 'Post type singular name', PLUGIN_NAME ),
			'menu_name'             => _x( 'Pomoc', 'Admin Menu text', PLUGIN_NAME ),
			'parent_item_colon'     => __( 'Nadrzędny:', PLUGIN_NAME ),
			'all_items'             => __( 'Wszystkie wpisy', PLUGIN_NAME ),
			'view_item'             => __( 'Zobacz', PLUGIN_NAME ),
			'add_new_item'          => __( 'Dodaj nowy artykuł', PLUGIN_NAME ),
			'add_new'               => __( 'Dodaj nowy', PLUGIN_NAME ),
			'edit_item'             => __( 'Edytuj', PLUGIN_NAME ),
			'update_item'           => __( 'Aktualizuj', PLUGIN_NAME ),
			'search_items'          => __( 'Szukaj', PLUGIN_NAME ),
			'not_found'             => __( 'Nie odnaleziono', PLUGIN_NAME ),
			'not_found_in_trash'    => __( 'Nie odnaleziono', PLUGIN_NAME ),
		);

		$args = array(
			'label'                 => __( 'pomoc', PLUGIN_NAME ),
			'description'           => __( 'pomoc', PLUGIN_NAME ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor' ),
			// 'taxonomies'            => array( 'help-category' ),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'show_in_nav_menus'     => true,
			'show_in_admin_bar'     => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-lightbulb',
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'rewrite'               => array('slug' => 'pomoc', 'with_front' => true),
		);

		register_post_type( 'helps', $args );

	}

endif;

add_action( 'init', 'pt_helps' );