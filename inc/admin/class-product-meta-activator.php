<?php 

class prod_other_fields
{

	public function __construct()
	{
		add_action( 'woocommerce_product_write_panel_tabs',	[ $this, 'new_sidebar_tab' ] );
		add_action( 'woocommerce_product_data_panels',		[ $this, 'new_sidebar_tab_content'] );
		add_action( 'woocommerce_process_product_meta', 	[ $this, 'save' ], 10, 1 );
	}

	/**
	 * Tabs new button
	 */
	public function new_sidebar_tab()
	{
		bert_template( 'admin/other-fields-tab', [
			"li_class"		=>	"new_product_meta_option",
			"a_href"		=>	"#new_product_meta_option",
			"button_label"	=>	"Other Fields",
		] );
	}

	/**
	 * New tab content
	 */
	public function new_sidebar_tab_content()
	{
		global $woocommerce, $post;

		bert_template( 'admin/other-fields-content' );

	}

	/**
	 * Saving of product
	 */
	public function save( $post_id )
	{

		$val = filter_input(INPUT_POST, 'eo_pd_field', FILTER_VALIDATE_BOOLEAN);
		
		if( !is_null($val) ) {

			update_post_meta( $post_id, 'eo_pd_field', $val );
		}

		$val = filter_input(INPUT_POST, 'eo_axis_field', FILTER_VALIDATE_BOOLEAN);

		if( !is_null($val) ) {

			update_post_meta( $post_id, 'eo_axis_field', $val );
		}

	}

}
new prod_other_fields();