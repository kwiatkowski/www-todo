<?php get_header(); ?>

<section class="section mt--60 mt-md--100" data-waypoint>
	<div class="container mv--20" data-waypoint-effect="fadeIn">

		<div class="row">
			<div class="col-xs-12 col-lg-8 col-lg-offset-2 text--center">
				<h1 class="post__title"><?php _e('Błąd 404','theme'); ?></h1>
			</div> <!-- .col .text .m -->
		</div> <!-- .row -->

		<div class="content text--center">

			<p class="text--xxl"><?php _e('Uuuups! Nie odnaleziono strony ;(','theme'); ?></p>

			<p>
				<?php _e('Na serwerze nie znaleziono poszukiwanej przez Ciebie strony.','theme'); ?>
				<br>
				<?php _e('Możliwe, że zmieniła nazwę lub została usunięta.','theme'); ?>
			</p>

			<div class="mt--30">
				<div class="vulture--404"></div>
				<br>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn"><?php _e('Wróć na stronę główną','theme'); ?></a>
			</div>

		</div> <!-- .content -->

	</div> <!-- .container -->
</section> <!-- .section -->

<?php get_footer(); ?>