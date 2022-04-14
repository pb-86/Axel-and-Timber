<?php
/**
 * This file loads all theme setup files
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.14
 */

define( 'AXEL_THEME_VERSION', '1.14' );

// Defining useful constants for further use.
define( 'AXEL_THEME_URI', get_template_directory_uri() );
define( 'AXEL_THEME_IMAGES', AXEL_THEME_URI . '/assets/images/compressed/' );
define( 'AXEL_THEME_STYLES', AXEL_THEME_URI . '/assets/styles/css/' );
define( 'AXEL_THEME_SCRIPTS', AXEL_THEME_URI . '/assets/scripts/minified/' );
define( 'AXEL_THEME_VENDOR', AXEL_THEME_URI . '/assets/vendor/' );

// Basic theme setup.
require_once 'settings/setup.php';

// Registering CSS styles.
require_once 'settings/styles.php';

// Registering JS scripts.
require_once 'settings/scripts.php';

// Registering menus.
require_once 'settings/menus.php';

// Registering sidebars.
require_once 'settings/sidebars.php';

// Code that helps speed up site.
require_once 'settings/optimisation.php';

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
