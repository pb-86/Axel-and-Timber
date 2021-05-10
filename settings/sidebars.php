<?php
/**
 * Sidebars are registered here.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.0
 */

add_action( 'widgets_init', 'axel_sidebar' );

/**
 * Registers sidebar.
 */
function axel_sidebar() {
	$args = array(
		'id'            => 'sidebar',
		'name'          => __( 'Główny sidebar', 'axel' ),
		'description'   => __( 'Główny sidebar', 'axel' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<section>',
		'after_widget'  => '</section>',
	);
	register_sidebar( $args );
}
