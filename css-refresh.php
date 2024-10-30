<?php
/*
Plugin Name: CSS Refresh
Plugin URI: http://www.uniquewebdevelopment.com/
Description: Automatic refresh of CSS files on your WordPress website.  Based on cssrefresh.frebsite.nl.
Version: 2.1
Author: Unique Web Development
Author URI: http://www.uniquewebdevelopment.com/
License: MIT & GPL
*/

/*
Loads css-refresh.js to the top of the scripts section
*/

function loadcssrefresh() {
	
	if ( ! is_admin() ) {
		
		wp_enqueue_script( 'css_refresh', plugins_url('/css-refresh-automatically/css-refresh.js' ));
		
	}
	
}    
add_action('init', 'loadcssrefresh', -1);

/**
 * Loads style.css from the template directory at the end of the style scripts.
 */

function loadcssfile() {

wp_register_style('stylesheet', get_stylesheet_uri());
wp_enqueue_style('stylesheet');

}

add_action('wp_print_styles','loadcssfile', 1000);

/**
 * Checks if we should add links to the bar.
 */
function css_refresh_admin_bar_init() {
	// Is the user sufficiently levelled, or has the bar been disabled?
	if (!is_super_admin() || !is_admin_bar_showing() )
		return;
		
	// Good to go, lets do this!
	add_action('admin_bar_menu', 'css_refresh_admin_bar_links', 500);
}

/**
 * Adds links to the bar.
 */
function css_refresh_admin_bar_links() {
	global $wp_admin_bar;
	
	// Add the Parent link.
	$wp_admin_bar->add_menu( array(
		'title' => 'CSS Refresh Active',
		'href' => false,
		'parent' => false
	));

}


// Get things running!
add_action('admin_bar_init', 'css_refresh_admin_bar_init');

?>