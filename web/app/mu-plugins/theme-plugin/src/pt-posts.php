<?php

function tp_posts_columns( $columns ) {

	unset( $columns['author'] );
	unset( $columns['comments'] );
	unset( $columns['tags'] );

	return $columns;

}

add_filter( 'manage_posts_columns', 'tp_posts_columns' );