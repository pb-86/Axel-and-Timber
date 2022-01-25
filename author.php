<?php
/**
 * Controller of the author page template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context                = Timber::context();
$context['author_name'] = get_the_author_meta( 'display_name' );
$context['author_bio']  = get_the_author_meta( 'description' );
$context['posts']       = new Timber\PostQuery();

Timber::render( 'templates/author.twig', $context );
