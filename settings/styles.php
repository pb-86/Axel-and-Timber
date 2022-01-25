<?php
/**
 * Styles are registered and enqueued here.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

add_action( 'wp_enqueue_scripts', 'axel_styles' );

/**
 * Registers and enqueues all required CSS files.
 */
function axel_styles() {
	wp_register_style( 'master', esc_url( AXEL_THEME_STYLES . 'master.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	wp_register_style( 'singular', esc_url( AXEL_THEME_STYLES . 'singular.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	wp_register_style( 'e404', esc_url( AXEL_THEME_STYLES . 'e404.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	wp_register_style( 'search', esc_url( AXEL_THEME_STYLES . 'search.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	wp_register_style( 'category', esc_url( AXEL_THEME_STYLES . 'category.min.css' ), false, AXEL_THEME_VERSION, 'all' );
	wp_register_style( 'author', esc_url( AXEL_THEME_STYLES . 'author.min.css' ), false, AXEL_THEME_VERSION, 'all' );

	if ( is_singular() ) {
		wp_enqueue_style( 'singular' );
	} elseif ( is_category() ) {
		wp_enqueue_style( 'category' );
	} elseif ( is_search() ) {
		wp_enqueue_style( 'search' );
	} elseif ( is_author() ) {
		wp_enqueue_style( 'author' );
	} elseif ( is_404() ) {
		wp_enqueue_style( 'e404' );
	} else {
		wp_enqueue_style( 'master' );
	}
}
