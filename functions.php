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
	wp_enqueue_style('knd-child', get_stylesheet_directory_uri() .'/style.css' );
}
add_action('wp_enqueue_scripts', 'knd_child_enqueue_styles', 99 );

/**
 * Copy All Parent Theme Options
 */
function knd_child_after_switch_theme() {
	$parent_theme_options = get_option( 'theme_mods_kandinsky' );
	if ( $parent_theme_options ) {
		update_option( 'theme_mods_kandinsky-child-theme', $parent_theme_options );
	}
}
add_action('after_switch_theme', 'knd_child_after_switch_theme');
