<?php
/**
 * Plugin Name: Woocommerce add product meta
 * Author: Robert John Concepcion
 * Author URI: https://github.com/robert-john-concepcion
 * Description: Add new field in product page single page
 * Version: 1.0
 */

if( !defined( 'ABSPATH' ) )
	die();

/**
 * root dir
 */
define( 'PNM_DIR', dirname( __FILE__ ) );

/**
 * inc dir
 */
define( 'PNM_INC_DIR', dirname( __FILE__ ) . "/inc" );


class woo_new_prd_meta
{

	/**
	 * Initialize the plugin
	 */
	public function __construct()
	{
		$this->includes();
	}

	/**
	 * Include core files used in admin and on the frontend.
	 */
	public function includes()
	{
		
		/**
		 * Plugin support functions
		 */
		include_once PNM_INC_DIR . '/helpers.php';

		/**
		 * Others Fields
		 * backend -> product(woo custom post-type) -> product data -> Other Fields
		 */
		include_once PNM_INC_DIR . '/admin/class-product-meta-activator.php';

	}

}
new woo_new_prd_meta();