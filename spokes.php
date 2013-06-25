<?php

	class Spokes extends Inkwell {

		public static $bg_count = 5;

		function __construct(){
			add_theme_support( 'post-thumbnails' );
			require_once('functions/furniture.php');
			add_shortcode( 'caption', array(&$this, 'caption_shortcode'));
			add_action('init', array(&$this, 'load_header_scripts'), 1);
			add_action('init', array(&$this, 'load_scripts'));
			add_action( 'init', array(&$this, 'set_permalinks'));
			add_filter('404_template', array(&$this, 'check_404_template'));
			$this->add_routes();
		}

		function get_context(){
			$context = Timber::get_context();
			$context['footer'] = array();
			//$context['footer']['sponsors'] = whatever();
			return $context;
		}

		function load_header_scripts(){
			wp_enqueue_script( 'jquery');
			
		}

		function load_scripts(){
			Inkwell::load_script(THEME_URL.'/js/site.js', array('jquery'));
		}

		function set_permalinks(){
			global $wp_rewrite;
			// //$wp_rewrite->set_permalink_structure('/articles/%year%/%monthnum%/%postname%/');

			// $req = '^nutrition/([^/]*)/([^/]*)/?';
			// $route = 'index.php?page_id=12&food=$matches[1]&variety=$matches[2]';
			// add_rewrite_rule($req, $route, 'top');
		}

		function add_routes(){
			Timber::add_route('blog', function($params){
				$query = 'posts_per_page=1&post_type=post';
				query_posts($query);
				Timber::load_template('archive.php');
			});

			Timber::add_route('blog/page/:pg', function($params){
				$query = 'posts_per_page=1&post_type=post&paged='.$params['pg'];
				query_posts($query);
				Timber::load_template('archive.php');
			});
		}

		function check_404_template($temp){
			$args = explode('/', trim(strtolower($_SERVER['REQUEST_URI'])));
			if ($args[1] == 'page'){
				header('HTTP/1.1 200 OK');
				
				return get_query_template('home');
			}
			return $temp;
		} 

		function caption_shortcode($atts, $content = null){
			$doc = phpQuery::newDocument($content);
			$id = str_replace('attachment_', '', $atts['id']);
			$data['image'] = new InkwellImage($id);
			return render_twig('components/core-image.twig', $data, false);
		}

		function get_options(){
			$options = new stdClass();
			$options->feed_add_every = 6;
			return $options;
		}

		function get_data(){
			$data = parent::get_data();
			$primary = wp_get_nav_menu_object('main-navigation');
			$primary = wp_get_nav_menu_items($primary);
			$data['main_nav'] = array();
			$data['base'] = 'base.twig';
			$data['theme_path'] = '/wp-content/themes/spokes/';

			$data['site_tools'] = Inkwell::get_menu('site-tools');
			$data['options'] = self::get_options();
			$data['footer_copyright'] = get_field('footer_copyright', 'options');
			$data['footer'] = array();
	
			$data['footer']['menu'] = new TimberMenu('site-tools');
			
			
			return $data;
		}
	}

	new Spokes();