<?php

Class SGLTN_Order extends SGLTN_Config {
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
                'name' => 'Orders',
                'singular_name' => 'Order',
                'add_new' => 'Add Order',
                'add_new_item' => 'Add Order Item',
                'edit' => 'Edit',
                'edit_item' => 'Edit Order',
                'new_item' => 'New Order',
                'view' => 'View',
                'view_item' => 'View Order',
                'search_items' => 'Search Order',
                'not_found' => 'No Orders Found',
                'not_found_in_trash' => 'No Order found in the trash',
                'parent' => 'Parent Order view'
                ),
            'public' => true,            
            'supports' => array( 'editor','title','thumbnail'),            
            'has_archive' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => false,
            'menu_position' => 5, // places menu item directly below Posts
            'menu_icon' => $this->admin_order_icon, // image icon
            'taxonomies' => array( 'category' )
        );

        register_post_type( 'sgltn_order', $args );
	}
}