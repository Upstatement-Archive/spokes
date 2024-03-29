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
	$context['post'] = $post;
	$post->intro = get_field('intro', 5);
	render_twig(array('page-'.$post->post_name.'.twig', 'page-history.twig'), $context);