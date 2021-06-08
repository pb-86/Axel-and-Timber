<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.2.2
 */

define( 'AXEL_THEME_VERSION', '1.2.2' );

define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images/compressed/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/styles/css/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts/minified/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor/' );

require_once 'settings/setup.php';    // Basic theme setup.
require_once 'settings/menus.php';    // Registering menus.
require_once 'settings/sidebars.php'; // Registering sidebar.
require_once 'settings/styles.php';   // Registering CSS styles.
require_once 'settings/scripts.php';  // Registering JS scripts.

/**
 * Adds additional data to the main Timber context.
 *
 * @param array $context Timber context.
 *
 * @return $array $context Timber context.
 */
function add_to_context( $context ) {
	$context['header_menu'] = new \Timber\Menu( 'header_menu' );
	$context['footer_menu'] = new \Timber\Menu( 'footer_menu' );
	if ( ! is_404() ) {
		$context['sidebar'] = Timber::get_widgets( 'sidebar' );
	}
	return $context;
}
add_filter( 'timber/context', 'add_to_context' );
