<?php get_header(); ?>

<?php get_template_part( 'src/partials/page-top' ); ?>

<section class="section">
	<div class="container mv--30">
		<div class="row">
			<div class="col-xs-12 content">

				<article class="post">
					<div class="post__content">
						<?php the_content(); ?>
					</div> <!-- .post__content -->
				</article> <!-- .post -->

			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .section -->

<?php get_footer(); ?>