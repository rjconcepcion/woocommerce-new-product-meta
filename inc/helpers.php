<?php 
/**
 * Support functions of the plugin
 *
 * @author      Robert John Concepcion
 * @category    Core
 * @version     1
 */

if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly


if( !function_exists( 'bert_template' ) ) {

/**
 * bert_template - is a templating function
 * @param  string $template filename
 * @param  array  $vars     varname as key, value as value
 * @param  boolean $echo    default[true] tells if return or echo
 * @return html
 */
function bert_template( $template, $vars = array(), $echo = true ) {
	
	$path = PNM_DIR . '/templates/' . $template . '.php';

	if ( file_exists( $path ) ):
            
		extract( $vars );

		if( !$echo ):

			ob_start();

				include $path;

			return ob_get_clean();

		endif;

		include $path;
		
	endif;
}/* end brace bert_template() */
}