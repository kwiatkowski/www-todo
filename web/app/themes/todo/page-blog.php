<?php get_header(); ?>

<?php get_template_part( 'src/partials/page-top' ); ?>

<section class="section">
	<div class="container mv--30">
		<div class="row">
			<div class="col-xs-12 col-md-8 content">

				<?php

					if ( get_query_var('paged') ):
						$paged = get_query_var('paged');
					elseif ( get_query_var('page') ):
						$paged = get_query_var('page');
					else:
						$paged = 1;
					endif;

					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'paged' => $paged,
						'order' => 'DESC',
						'orderby' => 'date',
					);

					$the_query = new WP_Query($args);

				?>

				<?php if ( $the_query->have_posts() ): ?>
					<div class="row">
						<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<div class="col-xs-12 col-md-6">
								<?php get_template_part( 'src/partials/post-short' ); ?>
							</div> <!-- .col -->
						<?php endwhile; ?>
					</div> <!-- .row -->
				<?php else: ?>
					<?php _e( 'Brak postów do wyświetlenia', THEME_NAME ); ?>
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			</div> <!-- .col -->
			<div class="col-xs-12 col-md-3 col-md-offset-1">

				<?php get_sidebar(); ?>

			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .section -->