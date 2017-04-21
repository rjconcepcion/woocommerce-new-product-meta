<?php 
/**
 * The added fields in other fields content area
 */
?>

<div id="new_product_meta_option" class="panel woocommerce_options_panel hidden">
	
	<div class="options_group">
		
		<input type="hidden" name="eo_pd_field" value=0>
	
		<?php 
	
		woocommerce_wp_checkbox( [
			'id'			=>	'eo_pd_field',
			'label'			=>	'Pupillary Distance(PD)',
			'description'	=>	'Enable PD(Pupillary Distance) textbox in product single page',
			'cbvalue'		=>	1,
			'name'			=>	'eo_pd_field'
		] );
	
		?>
	
	</div>

	<div class="options_group">	
		
		<input type="hidden" name="eo_axis_field" value=0>

		<?php 
	
		woocommerce_wp_checkbox( [
			'id'			=>	'eo_axis_field',
			'label'			=>	'Axis',
			'description'	=>	'Enable Axis textbox in product single page',
			'cbvalue'		=>	1,
			'name'	=>	'eo_axis_field'
		] );
	
		?>
	
	</div>

</div>