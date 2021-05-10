<?php
/**
 * Controller of the page template.
 *
 * @package WordPress
 * @subpackage Axel-Twig
 * @since 1.0
 */

$context              = Timber::context();
$context['page']      = new Timber\Post();
$context['revisions'] = wp_get_post_revisions();

Timber::render( 'templates/page.twig', $context );
