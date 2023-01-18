<?php
    $fields_contact = array(
        'display' => get_field('cf_home_contact_section'),
        'title' => get_field('cf_home_contact_title'),
        'subtitle' => get_field('cf_home_contact_subtitle'),
        'form' => get_field('cf_home_contact_form'),
        'contact_data' => get_field('cf_home_contact_data'),
    );
?>

<?php // if ( $fields_contact['display'] == 1 ): ?>

<div class="row justify-content-xl-center mt-5">
    <div class="col-12 col-xl-8 text--center">
        <h1 class="section__title tagline"><?php echo $fields_contact['title']; ?></h1>

        <?php if ($fields_contact['subtitle']): ?>
            <h2 class="section__lead"><?php echo $fields_contact['subtitle']; ?></h2>
        <?php endif; ?>
    </div>
</div>

<div class="row justify-content-xl-center mt-5">
    <div class="col-12 col-xl-8">
        <?php echo do_shortcode('[contact-form-7 id="'.$fields_contact['form'].'"]'); ?>
    </div>
</div>

<?php // endif; ?>
