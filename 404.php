<?php
/**
 * Controller of the 404 error page template.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.0
 */

$context = Timber::context();

Timber::render( 'templates/404.twig', $context );
