<?php
/**
 * Menus are registered here.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.12
 */

add_action( 'init', 'axel_menus' );

/**
 * Registers all menus.
 */
function axel_menus() {
	$locations = array(
		'header_menu' => __( 'Górne menu', 'axel-twig' ),
		'footer_menu' => __( 'Dolne menu', 'axel-twig' ),
	);
	register_nav_menus( $locations );
}
