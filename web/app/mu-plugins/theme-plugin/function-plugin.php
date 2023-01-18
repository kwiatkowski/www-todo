<?php
/*
	Plugin Name: _THEME
	Description: Zapewnia strukturę oraz funkcjonalności serwisu.
	Author: marcin kwiatkowski
	Author URI: http://kwiatkowski.co
	Text Domain: theme-plugin
	Domain Path: /languages/
	Version: 2022.12.03
*/

define('PLUGIN_NAME', 'kwiatkowski-plugin');


// assets
require 'assets/assets.php';


// settings
// require 'src/settings.php';


// custom types
require 'src/pt-posts.php';
require 'src/pt-helps.php';
// require 'src/pt-projects.php';


/* custom taxonomies */
// require 'src/tax-projects.php';


// custom fields for page
require 'src/cf-page-home.php';


// custom fields for option page
// require 'src/cf-op-name.php';