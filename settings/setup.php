<?php
/**
 * Main configurations of the theme.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.0
 */

add_action( 'after_setup_theme', 'axel_setup' );

/**
 * Configures the theme.
 */
function axel_setup() {
	// Sets the maximum allowed width for any content in the theme.
	if ( ! isset( $content_width ) ) {
		$content_width = 1120;
	}

	// Enables post thumbnails support.
	add_theme_support( 'post-thumbnails' );

	// Enables custom header support.
	add_theme_support( 'custom-header', array() );

	// Enables custom logo support.
	add_theme_support( 'custom-logo', array() );

	// Enables of use of HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	// Allows plugins to manage the document title tag.
	add_theme_support( 'title-tag' );

	// Loads a CSS file with custom editor styles.
	add_editor_style( AXEL_THEME_STYLES . 'editor.min.css' );

	// Loads the theme language files.
	load_theme_textdomain( 'axel', AXEL_THEME_URI . '/language' );

	// Adds new image size.
	add_image_size( 'axel-thumb', 672, 432, true );

	// Updates reserved images sizes.
	update_option( 'large_size_w', 672 );
	update_option( 'large_size_h', 672 );
	update_option( 'medium_size_w', 320 );
	update_option( 'medium_size_h', 320 );
	update_option( 'thumbnail_size_w', 152 );
	update_option( 'thumbnail_size_h', 152 );
}
