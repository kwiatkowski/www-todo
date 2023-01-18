<?php

/**
	*	display menu
	*
	*	@author Marcin Kwiatkowski <kwiatkowski.co>
	*	@return wp_nav_menu($defaults);
	*/

	function display_menu() {

		if (is_front_page()):

			$defaults = array(
				'menu' => 'menu-primary-home',
				'menu_class' => 'menu',
				'items_wrap' => '<ul>%3$s</ul>',
				'container' => 'nav', 
				'container_id' => '', 
				'container_class' => 'menu-container',
			);

		else:

			$defaults = array(
				'menu' => 'menu-primary',
				'menu_class' => 'menu',
				'items_wrap' => '<ul>%3$s</ul>',
				'container' => 'nav', 
				'container_id' => '', 
				'container_class' => 'menu-container',
			);

		endif;

		wp_nav_menu($defaults);

	}