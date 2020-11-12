<?php
/**
 * The Kandinsky Child Theme Functions
 *
 * @package Kandinsky
 */

/**
 * Wp Enqueue Styles
 */
function knd_child_enqueue_styles() {
	wp_enqueue_style( 'knd-child', get_stylesheet_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'knd_child_enqueue_styles', 99 );

/**
 * Copy All Parent Theme Options
 */
function knd_child_after_switch_theme() {
	$prefix  = 'theme_mods_';
	$parent  = $prefix . get_template();
	$child   = $prefix . get_stylesheet();
	$options = get_option( $parent );
	if ( $parent ) {
		update_option( $child, $options );
	}
}
add_action('after_switch_theme', 'knd_child_after_switch_theme');
