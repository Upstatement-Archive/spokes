<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Methods for PostMaster and WPHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.2
 */
	
		
		$templates = array('archive.twig', 'index.twig');

		$data = Spokes::get_context();
		$data['title'] = 'Archive';
		if (is_day()){
			$data['title'] = 'Archive: '.get_the_date( 'D M Y' );	
		} else if (is_month()){
			$data['title'] = 'Archive: '.get_the_date( 'M Y' );	
		} else if (is_year()){
			$data['title'] = 'Archive: '.get_the_date( 'Y' );	
		} else if (is_tag()){
			$data['title'] = single_tag_title('', false);
		} else if (is_category()){
			$data['title'] = single_cat_title('', false);
			array_unshift($templates, 'archive-'.get_query_var('cat').'.twig');
		} else if (is_post_type_archive()){
			$data['title'] = post_type_archive_title('', false);
			array_unshift($templates, 'archive-'.get_post_type().'.twig');
		}
		
		$data['posts'] = Timber::get_posts();
		$data['pagination'] = Timber::get_pagination();
		
		Timber::render($templates, $data);
