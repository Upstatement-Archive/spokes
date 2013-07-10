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
	$post->intro = get_field('intro', 8);
	$post->winners = get_field('raffle_winners', 8);
	$post->info = get_field('raffle_info', 8);
	$post->shirt = get_field('raffle_shirt', 8);	
	$context['post'] = $post;
	render_twig(array('page-'.$post->post_name.'.twig', 'page-raffle.twig'), $context);
