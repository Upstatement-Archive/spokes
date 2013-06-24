<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

	if (!class_exists('Timber')){
		echo 'Timber not activated';
	}
	$sponsors = Timber::get_post(17);
	$sponsors->sponsors = get_field("sponsor", 17);
	$data = Timber::get_context();
	$posts = Timber::get_posts('TimberPost');
	$data['posts'] = $posts;
	$data['sponsors'] = $sponsors;
	render_twig('home.twig', $data);


