<?php

/**
 * Plugin Name:       Sample Singleton Plugin
 * Plugin URI:        https://www.example.com
 * Description:       Sample plugin that uses singleton classes. For development purpose only
 * Version:           0.1
 * Author:            harisrozak
 * Author URI:        https://harisrozak.github.io
 * Text Domain:       singleton-plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 *
 */

// define plugin contants
define( 'SGLTN_FILE', __FILE__ );
define( 'SGLTN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SGLTN_URL', plugin_dir_url( __FILE__ ) );

// load required files
require_once SGLTN_PATH . 'includes/config.php';
require_once SGLTN_PATH . 'includes/product.php';
require_once SGLTN_PATH . 'includes/order.php';

// run the required instances
SGLTN_Product::getInstance();
SGLTN_Order::getInstance();