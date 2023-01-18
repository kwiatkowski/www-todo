<?php

function mk_remove_dashboard_widgets() {

	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);

}

add_action('wp_dashboard_setup', 'mk_remove_dashboard_widgets');
