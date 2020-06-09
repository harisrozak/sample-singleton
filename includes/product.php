<?php

Class SGLTN_Product extends SGLTN_Config {
	// instance
	private static $instance;
	
	// getInstance
	public static function getInstance() {
		if( ! isset( self::$instance ) ) {
			self::$instance = new self;
		}

		return self::$instance;
	}
	
	// __construct
	private function __construct() {		
		// register post type product
		add_action( 'init', array( $this, 'register_post_type' ) );	
	}
	
	// register post type
	public function register_post_type() {
		$args = array(
			'labels' => array(
				'name' => 'Products',
				'singular_name' => 'Product',
				'add_new' => 'Add Product',
				'add_new_item' => 'Add Product Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Product',
				'new_item' => 'New Product',
				'view' => 'View',
				'view_item' => 'View Product',
				'search_items' => 'Search Product',
				'not_found' => 'No Products Found',
				'not_found_in_trash' => 'No Product found in the trash',
				'parent' => 'Parent Product view'
				),
			'public' => true,            
			'supports' => array( 'editor','title','thumbnail'),            
			'has_archive' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => false,
			'menu_position' => 5, // places menu item directly below Posts
			'menu_icon' => $this->admin_product_icon, // image icon
			'taxonomies' => array( 'category' )
		);

		register_post_type( 'sgltn_product', $args );
	}
}