<?php
/**
 * Controller of the post template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context              = Timber::context();
$context['post']      = new Timber\Post();
$context['revisions'] = wp_get_post_revisions();

Timber::render( 'templates/single.twig', $context );
