<?php 

class product_new_field
{

	public function __construct()
	{

		add_action( 'all_admin_notices', [ $this, 'test' ] );

	}

	public function test()
	{

		

	}


}
new product_new_field();
