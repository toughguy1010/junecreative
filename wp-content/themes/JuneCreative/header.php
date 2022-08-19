<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<!DOCTYPE html>

<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <script src="jquery-3.6.0.min.js"></script>
	<?php 
	do_action('homepage_style');
	wp_head();
	
	?>
	
</head>

<body>


<!-- Navbar hear -->
<div class="header-desktop-section">
	<?php
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'primary', 
                        'container' => 'false', 
                        'menu_id' => 'header-menu', 
                        'menu_class' => 'header-desktop-menu-list'
                     ) 
                  ); 
                ?> 
</div>
<!-- Navbar hear -->