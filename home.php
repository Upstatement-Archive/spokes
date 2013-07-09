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
	$data = Spokes::get_context();

	$sponsors = Timber::get_post(16);
	$sponsors->sponsors = get_field("sponsors", 16);
	$data['sponsors'] = $sponsors;

	$posts = Timber::get_posts('TimberPost');
	$data['posts'] = $posts;

	$raffle = Timber::get_post(35);
	$raffle->raffle = get_field("raffle-winner", 35);
	$data['raffle'] = $raffle;

	$intro = Timber::get_post(36);
	$intro->goal = get_field("goal", 36);
	$intro->sigs = get_field("team_signatures", 36);
	$intro->bgs = get_field("background_images", 36);

	$data['intro'] = $intro;

	Timber::render('home.twig', $data);


