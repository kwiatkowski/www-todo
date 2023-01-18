<?php get_header(); ?>

<?php get_template_part( 'src/partials/page-top' ); ?>

<section class="section">
	<div class="container mv--30">
		<div class="row">
			<div class="col-xs-12 col-md-8 content">

				<?php if ( have_posts() ): ?>
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-xs-12 col-md-6">
								<?php get_template_part( 'src/partials/post-short' ); ?>
							</div> <!-- .col -->
						<?php endwhile; ?>
					</div> <!-- .row .posts -->
				<?php else: ?>
					<div class="content mv--50 text--center">
						<h5><?php _e( 'Brak postów do wyświetlenia', THEME_NAME ); ?></h5>
					</div> <!-- .content -->
				<?php endif; ?>

			</div> <!-- .col -->
			<div class="col-xs-12 col-md-3 col-md-offset-1">

				<?php get_sidebar(); ?>

			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .section -->

<?php get_footer(); ?>