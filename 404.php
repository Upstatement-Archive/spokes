<?php
/**
 * This is the 404 template
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
	$context['post'] = $post;
	render_twig(array('page-'.$post->post_name.'.twig', '404.twig'), $context);