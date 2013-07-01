<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */
?>
<?php
	
	$context = Spokes::get_context();
	$post = new TimberPost();
	$post->hero = get_field('hero_image');
	$post->winners = get_field('raffle_winners');
	$post->headline = get_field('headline');
	$context['post'] = $post;
	render_twig(array('page-'.$post->post_name.'.twig', 'page.twig'), $context);