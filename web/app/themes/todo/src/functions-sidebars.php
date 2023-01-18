<?php

add_action( 'widgets_init', 'theme_slug_widgets_init' );

function theme_slug_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Blog sidebar', THEME_NAME ),
		'id' => 'sidebar',
		'description' => __( 'Wyświetlany na stronie bloga.', THEME_NAME ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	));

}
