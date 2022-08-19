<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}
add_filter( 'woocommerce_should_load_paypal_standard', '__return_true' );   


// DEFINE
define('THEME_URI',get_theme_file_uri() );

function get_homepage_sytle(){
    // register
  
    wp_register_style('homepage_style',THEME_URI.'/css/june-style.css');
    // enqueue
    wp_enqueue_style('homepage_style');
}

function get_hompage_script(){
    wp_register_script('get_hompage_script', THEME_URI. '/js/june-creative.js' );
    wp_enqueue_script('get_hompage_script');
}
add_action('wp_head','get_hompage_script');


add_action('homepage_style','get_homepage_sytle',0);


function your_theme_add_menu_link_class( $classes, $item ) {
    $classes['class'] = "anchor-link"; // Add class to every "<a>" tags
    if ( in_array('current-menu-item', $item->classes) ) {
        $classes['class'] = 'anchor-link active-nav-link'; // Add class to current menu item's "<a>" tag
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'your_theme_add_menu_link_class', 10, 2 );