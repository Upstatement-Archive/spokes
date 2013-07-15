<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

	$context = Spokes::get_context();
	$post = new TimberPost();
	$post->hero = get_field('hero');

	$context['post'] = $post;
	$context['wp_title'] .= ' - '.$post->post_title;

	Timber::render(array('single-'.$post->post_type.'.twig','single.twig'), $context);
?>