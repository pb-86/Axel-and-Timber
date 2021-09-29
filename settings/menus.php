<?php
/**
 * Menus are registered here.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.4
 */

add_action( 'init', 'axel_menu' );

/**
 * Registers all menus.
 */
function axel_menu() {
	$locations = array(
		'header_menu' => __( 'Górne menu', 'axel-twig' ),
		'footer_menu' => __( 'Dolne menu', 'axel-twig' ),
	);
	register_nav_menus( $locations );
}
