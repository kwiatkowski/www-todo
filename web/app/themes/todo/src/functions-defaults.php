<?php

/**
*	Sanitize text or array
*
*	@author Marcin Kwiatkowski <kwiatkowski.co>
*	@return $array_or_string
*/

function kco_sanitize_text_or_array($array_or_string) {

	if ( is_string($array_or_string) ):
		$array_or_string = sanitize_text_field($array_or_string);
	elseif ( is_array($array_or_string) ):
		foreach ( $array_or_string as $key => &$value ):
			if ( is_array( $value ) ):
				$value = sanitize_text_or_array_field($value);
			else:
				$value = sanitize_text_field( $value );
			endif;
		endforeach;
	endif;

	return $array_or_string;
}


/**
*	Display category for the article
*
*	@author Marcin Kwiatkowski <kwiatkowski.co>
*	@return display
*/

function display_category_post() {

	$categories = get_the_category();
	$separator = ', ';
	$output = '';

	if (!empty($categories)):

		foreach($categories as $category) {
			$output .= '<a href="'.esc_url(get_category_link($category->term_id)).'" title="'.esc_attr(sprintf(__('Wszystkie posty kategorii %s', 'theme'), $category->name )).'">'.esc_html($category->name ).'</a>'.$separator;
		}

		echo trim($output, $separator);

	endif;

}





/**
*	Display new excerpt
*
*	@author Marcin Kwiatkowski <kwiatkowski.co>
*	@return display
*/

function display_post_short($lenght = '100', $selector = 'p') {

	$title = get_the_title();
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $lenght);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'... <a class="post-read-more" href="'.get_permalink().'" title="'.$title.'">'.__('Czytaj dalej', 'THEME_NAME').'...</a>';

	echo '<'.$selector.'>'.$excerpt.'</'.$selector.'>';

}




/**
*	df_thumb
*
*	displays post thumbnails
*
*	df_thumb('thumb-200x200');
*	df_thumb('thumb-200x200', true);
*	df_thumb('thumb-200x200', true, false);
*
*	@param size - thumbnails size
*	@param plugs - ture (default) display plugs
*	@param link - true (default) display link to post
*
*	@return img
*/

function df_thumb($size = 'medium', $link = true, $plugs = true) {

	echo '<figure class="post-thumb">';

	if ($link == true):
		echo '<a class="post-thumb-link" href="'.get_permalink().'" rel="nofollow">';
	endif;

	if (has_post_thumbnail()):
		the_post_thumbnail($size, array('class' => 'post-thumb-image'));
	else:
		$sizes = explode('-',$size);
		$sizes = explode('x',$sizes[1]);
		echo '<img class="post-thumb-image" src="' . THEME_URI . '/assets/images/thumb-default/'.$size.'.jpg" width="'.$sizes[0].'" height="'.$sizes[1].'" alt="" />';
	endif;

	if ($link == true):
		echo '</a>';
	endif;

	echo '</figure>';

}