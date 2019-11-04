<?php 

/**
 * Enqueue child scripts and styles.
 */
function medina_child_scripts() {
	wp_enqueue_script( 'medina-child-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '', true );
	wp_enqueue_style(
		'font-awesome',
		fw_get_framework_directory_uri( '/static/libs/font-awesome/css/font-awesome.min.css' ),
		array(),
		fw()->manifest->get_version()
	);
}
add_action( 'wp_enqueue_scripts', 'medina_child_scripts', 202 );
