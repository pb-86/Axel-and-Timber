<?php
/**
 * Controller of the main template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();

Timber::render( 'templates/index.twig', $context );
