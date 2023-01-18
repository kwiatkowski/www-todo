<?php
    $fields_offer = array(
        'display' => get_field('cf_home_offer_section'),
        'title' => get_field('cf_home_offer_title'),
        'subtitle' => get_field('cf_home_offer_subtitle'),
        'offers' => get_field('cf_home_offer_offers'),
    );
?>

<?php // if ( $fields_offer['display'] == 1 ): ?>

<div class="row justify-content-xl-center mt-5">
    <div class="col-12 col-xl-8 text--center">
        <h1 class="section__title tagline"><?php echo $fields_offer['title']; ?></h1>

        <?php if ( $fields_offer['subtitle'] ): ?>
            <h2 class="section__lead"><?php echo $fields_offer['subtitle']; ?></h2>
        <?php endif; ?>
    </div>
</div>

<?php if ( is_array( $fields_offer['offers'] ) ): ?>
    <div class="row justify-content-xl-center">
        <?php foreach( $fields_offer['offers'] as $field_offers ): ?>
            <div class="col-12 col-sm-6 col-md-4 offer text--center">
                <i class="offer__icon <?php echo $field_offers['cf_home_offer_offers_icon']; ?>"></i>
                <h3 class="offer__title"><?php echo $field_offers['cf_home_offer_offers_title']; ?></h3>
                <p class="offer__description"><?php echo $field_offers['cf_home_offer_offers_text']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row justify-content-xl-center">
        <div class="col-12 col-sm-6 col-md-4 offer text--center">
            <a
            class="btn btn--light btn--rad-3"
            href="#contact"
            aria-label="Przejdź do kontaktu"
            >
                <i class="icon-down"></i>
            </a>
        </div>
    </div>
<?php endif; ?>

<?php // endif; ?>
