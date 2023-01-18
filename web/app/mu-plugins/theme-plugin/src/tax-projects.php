<?php

if (!function_exists('tax_product_icon')):

	function tax_product_icon() {

		$labels = array(
			'name'              => _x( 'Projekty', 'taxonomy general name', THEME_NAME ),
			'singular_name'     => _x( 'Ikona', 'taxonomy singular name', THEME_NAME ),
			'search_items'      => __( 'Szukaj ikony', THEME_NAME ),
			'all_items'         => __( 'Wszystkie ikony', THEME_NAME ),
			'parent_item'       => __( 'Nadrzędna ikona', THEME_NAME ),
			'parent_item_colon' => __( 'Nadrzędna ikona:', THEME_NAME ),
			'edit_item'         => __( 'Edytuj', THEME_NAME ),
			'update_item'       => __( 'Aktualizuj', THEME_NAME ),
			'add_new_item'      => __( 'Dodaj nową ikonę', THEME_NAME ),
			'new_item_name'     => __( 'Nowa ikona', THEME_NAME ),
			'menu_name'         => __( 'Projekty', THEME_NAME ),
		);

		$args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => false,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'projects' ),
		);

		register_taxonomy( 'projects', array( 'project' ), $args );

	}

	add_action('init', 'tax_product_icon', 0);

endif;