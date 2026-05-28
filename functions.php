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
	$version = date( 'Y.m.d-H:i:s', filemtime( get_stylesheet_directory() .'/style.css' ) );
	wp_enqueue_style( 'knd-child', get_stylesheet_directory_uri() . '/style.css', array( 'knd' ), $version );
}
add_action('wp_enqueue_scripts', 'knd_child_enqueue_styles' );

/**
 * Copy All Parent Theme Options
 */
function knd_child_after_switch_theme() {
	$prefix     = 'theme_mods_';
	$parent     = $prefix . get_template();
	$child      = $prefix . get_stylesheet();
	$child_opts = get_option( $child );
	if ( empty( $child_opts ) ) {
		$parent_opts = get_option( $parent );
		if ( ! empty( $parent_opts ) ) {
			update_option( $child, $parent_opts );
		}
	}
}
add_action('after_switch_theme', 'knd_child_after_switch_theme');

/**
 * Add your custom code below this comment.
 */
