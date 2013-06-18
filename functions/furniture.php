<?php

register_post_type('furniture', array(  'label' => 'Furniture','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','thumbnail',),'labels' => array (
    'name' => 'Furniture',
  'singular_name' => 'Furniture',
  'menu_name' => 'Furniture',
  'add_new' => 'Add Furniture',
  'add_new_item' => 'Add New Furniture',
  'edit' => 'Edit',
  'edit_item' => 'Edit Furniture',
  'new_item' => 'New Furniture',
  'view' => 'View Furniture',
  'view_item' => 'View Furniture',
  'search_items' => 'Search Furniture',
  'not_found' => 'No Furniture Found',
  'not_found_in_trash' => 'No Furniture Found in Trash',
  'parent' => 'Parent Furniture',
),) );