<?php

define('THEME_NAME', 'kwiatkowski-theme');
define('THEME_VERSION', '2022.12.03');

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_IMAGES', get_template_directory_uri() . '/assets/images');
define('THEME_PARTIALS', '/src/partials/');

define('LIBS_DIR', THEME_DIR . '/src/');

require_once(LIBS_DIR . 'functions-setup.php');
require_once(LIBS_DIR . 'functions-defaults.php');
require_once(LIBS_DIR . 'functions-login.php');
require_once(LIBS_DIR . 'functions-theme.php');
require_once(LIBS_DIR . 'functions-sidebars.php');
require_once(LIBS_DIR . 'functions-widgets.php');
