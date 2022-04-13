<?php
/**
 * Sidebars are registered here.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.13
 */

add_action( 'widgets_init', 'axel_sidebars' );

/**
 * Registers sidebar.
 */
function axel_sidebars() {
	$args = array(
		'id'            => 'sidebar',
		'name'          => __( 'Główny sidebar', 'axel-twig' ),
		'description'   => __( 'Główny sidebar', 'axel-twig' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
