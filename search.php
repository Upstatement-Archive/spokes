<?php
/**
 * Search results page
 * 
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */
  

	$templates = array('archive.twig', 'index.twig');
	$data = Timber::get_context();

	$data['title'] = 'Search results for '. get_search_query();
	$data['posts'] = Timber::get_posts();
	
	Timber::render($templates, $data);
