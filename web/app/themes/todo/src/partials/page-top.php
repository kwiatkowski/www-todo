<?php

	if ( ( get_field('page_title_background_color') == 'dark' ) && !is_archive() ):
		$section_class = 'section section--page-top section--dark';
	else:
		$section_class = 'section section--page-top';
	endif;

	if ( is_search() ):
		$align = 'center';
	elseif ( get_field('page_title_align') ):
		$align = get_field('page_title_align');
	endif;

?>

<section class="<?php echo $section_class; ?>">

	<?php if ( is_single() ): ?>
		<div class="section__background"></div>
	<?php endif; ?>

	<div class="box--vcp">
		<div class="box--vc">

			<div class="container mv--20" data-waypoint-effect="fadeInDown" data-waypoint-repeat="true">
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">

						<?php

							if ( is_single() ):
								$categories = get_the_category();
								$separator = ', ';
								$output = '';

								if (!empty($categories)):
									foreach($categories as $category) {
										$output .= '<a class="btn btn--s btn--single-cat" href="'.esc_url(get_category_link($category->term_id)).'" title="'.esc_attr(sprintf(__('Wszystkie posty kategorii %s', 'theme'), $category->name )).'">'.esc_html($category->name ).'</a>'.$separator;
									}
									echo trim($output, $separator);
								endif;

							endif;

						?>

						<?php if ( is_search() ): ?>
							<h1 class="post__title"><?php _e( 'Wyniki wyszukiwania dla: ', THEME_NAME ); ?></h1>
							<h2 class="post__subtitle"><?php echo get_search_query(); ?></h2>
						<?php elseif ( is_archive() ): ?>
							<?php
								the_archive_title( '<h1 class="post__title">', '</h1>' );
								the_archive_description( '<h2 class="post__subtitle">', '</h2>' );
							?>
						<?php else: ?>
							<?php if ( get_field('page_alternative_title') ): ?>
								<h1 class="post__title"><?php the_field('page_alternative_title'); ?></h1>
							<?php else: ?>
								<h1 class="post__title"><?php the_title(); ?></h1>
							<?php endif; ?>
							<?php if ( get_field('page_subtitle') ): ?>
								<h2 class="post__subtitle"><?php the_field('page_subtitle'); ?></h2>
							<?php endif; ?>
						<?php endif; ?>

						<?php if ( is_single() ): ?>

							<div class="post__date"><?php echo get_the_date(); ?></div>

						<?php endif; ?>

					</div> <!-- .col -->
				</div> <!-- .row -->
			</div> <!-- .container .m -->

		</div> <!-- .box -->
	</div> <!-- .box -->
</section> <!-- .section -->