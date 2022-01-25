<?php
/**
 * Controller of the 404 error page template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context = Timber::context();

Timber::render( 'templates/404.twig', $context );
