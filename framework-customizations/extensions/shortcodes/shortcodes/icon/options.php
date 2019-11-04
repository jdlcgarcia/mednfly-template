<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'set' => 'font-awesome',
		'label' => esc_html__( 'Icon', 'medina' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => esc_html__( 'Title', 'medina' ),
		'desc'  => esc_html__( 'Icon title', 'medina' ),
	)
);