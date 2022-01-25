<?php
/**
 * Controller of the category template.
 *
 * @package WordPress
 * @subpackage Axel and Timber
 * @since 1.6
 */

$context                   = Timber::context();
$context['category_title'] = single_cat_title( '', false );
$context['posts']          = new Timber\PostQuery();

Timber::render( 'templates/category.twig', $context );
