<?php

/*
Plugin Name: Advanced Custom Fields: Style Selector
Plugin URI: PLUGIN_URL
Description: Add styles to choose from
Version: 1.0.0
Author: Richard Pullinger
Author URI: http://pullin.gr
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-style_selector', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_style_selector( $version ) {

	include_once('acf-style_selector-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_style_selector');




// 3. Include field type for ACF4
function register_fields_style_selector() {

	include_once('acf-style_selector-v4.php');

}

add_action('acf/register_fields', 'register_fields_style_selector');




?>