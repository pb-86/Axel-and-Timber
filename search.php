<?php
/**
 * Controller of the search results template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context                 = Timber::context();
$context['posts']        = new Timber\PostQuery();
$context['search_query'] = get_search_query();

Timber::render( 'templates/search.twig', $context );
