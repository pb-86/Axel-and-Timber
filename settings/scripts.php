<?php
/**
 * Scripts are registered and enqueued here.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.0
 */

add_action( 'wp_enqueue_scripts', 'axel_scripts' );

/**
 * Registers and enqueues all required JS files.
 */
function axel_scripts() {
	wp_register_script( 'master', esc_url( AXEL_THEME_SCRIPTS . 'master.min.js' ), array(), AXEL_THEME_VERSION, true );
	wp_enqueue_script( 'master' );
}
