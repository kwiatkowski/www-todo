<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Marcin Kwiatkowski">
        <meta name="google" content="notranslate">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_IMAGES; ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo THEME_IMAGES; ?>/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_IMAGES; ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo THEME_IMAGES; ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_IMAGES; ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo THEME_IMAGES; ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo THEME_IMAGES; ?>/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <?php wp_head(); ?>

        <?php if ( WP_ENV == 'production'): ?>
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-13113021-2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-13113021-2');
            </script>
        <?php endif; ?>
    </head>

    <body id="body">
        <?php
            if ( WP_ENV == 'development'):
                echo '<a class="dev__btn" href="#" data-dev-toggle>x</a>';
            endif;
        ?>

        <header class="header" data-sticky-header>
            <div class="container">
                <div class="row row--sch">
                    <div class="col-xs-6 col-md-3">
                        <?php $link = is_front_page() ? '#body' : esc_url(home_url('/')); ?>

                        <a class="logo" href="<?php echo $link; ?>">
                            <img class="logo__image" src="<?php echo THEME_IMAGES; ?>/logo.png" alt="Marcin Kwiatkowski. Frontend Developer - Gliwice" width="186" height="60">
                        </a>
                    </div>

                    <div class="col-xs-6 col-md-9">
                        <div class="box--vcp">
                            <div class="box--vc">
                                <ul class="menu menu--header" data-menu>
                                    <?php if ( WP_ENV == 'development'): ?>
                                        <li class="menu__item menu__item--is-active"><a class="menu__link" href="/pomoc">Pomoc</a></li>
                                    <?php endif; ?>
                                    <li class="menu__item menu__item--is-active"><a class="menu__link" href="#offer">Oferta</a></li>
                                    <?php /*<li class="menu__item"><a class="menu__link" href="#projects">Projekty</a></li>*/ ?>
                                    <li class="menu__item"><a class="menu__link" href="#contact">Kontakt</a></li>
                                    <?php /*<li class="menu__item"><a class="menu__link external" href="/blog">Blog</a></li>*/ ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper mb-5">
