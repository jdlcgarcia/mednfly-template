<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

class FW_Shortcode_Blog extends FW_Shortcode
{
	public static function medina_get_blog_categ(){


		$result = array();
		foreach ( get_categories() as $categ ) {
			$categories_id = $categ->term_id;
			$categories_name = $categ->name;
			$result[ $categories_id ] = $categories_name;
		}

		return $result;
	}

   
}