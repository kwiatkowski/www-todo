<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'src/partials/page', 'top' ); ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 content">

					<article class="post">

						<?php the_content(); ?>

					</article> <!-- .post -->

				</div> <!-- .col -->
				<div class="col-12 col-md-4">

					<?php get_sidebar(); ?>

				</div> <!-- .col -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .section -->

<?php endwhile; ?>

<?php get_footer(); ?>
