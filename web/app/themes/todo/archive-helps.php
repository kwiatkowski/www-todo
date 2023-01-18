<?php get_header(); ?>

<?php get_template_part( 'src/partials/page-top' ); ?>

<section class="section">
	<div class="container">

		<?php if ( have_posts() ): ?>

			<div class="row">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="col-12 col-md-4">

						<?php get_template_part( 'src/partials/post-short' ); ?>

					</div> <!-- .col -->

				<?php endwhile; ?>

			</div> <!-- .row .posts -->

		<?php else: ?>

			<div class="content mv--50 text--center">

				<h5><?php _e( 'Brak postów do wyświetlenia', THEME_NAME ); ?></h5>

			</div> <!-- .content -->

		<?php endif; ?>

	</div> <!-- .container -->
</section> <!-- .section -->

<?php get_footer();
