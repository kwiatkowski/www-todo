
<?php /* Template Name: Homapge */ ?>

<?php get_header(); ?>

<?php $sections = array('offer', 'contact' ); ?>

<?php if ( is_front_page() ): ?>
    <?php foreach ( $sections as &$section ): ?>
        <section id="<?php echo $section; ?>" class="section" data-waypoint>
            <div class="container mt-5" data-waypoint-effect="fadeIn">
                <?php get_template_part(THEME_PARTIALS . 'page-index', $section); ?>
            </div>
        </section>
    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer(); ?>
