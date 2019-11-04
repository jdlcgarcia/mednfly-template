<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'config' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'type' => array(
			    'type'  => 'select',
			    'label' => esc_html__('Type', 'medina'),
			    'choices' => array(
			    	'grid' => esc_html__('Grid', 'medina'),
			    	'slider' => esc_html__('Slider', 'medina'),
			    ),
			),
		),
		'choices'     => array(
			'grid' => array(
			    'cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Cols', 'medina'),
				    'choices' => array(
				        '6' => esc_html__('2', 'medina'),
				        '4' => esc_html__('3', 'medina'),
				        '3' => esc_html__('4', 'medina'),
				    ),
				),
			),
			'slider' => array(
				'autoplay' => array(
				    'type'  => 'switch',
				    'value' => 'true',
				    'label' => esc_html__('Autoplay', 'medina'),
				    'left-choice' => array(
				        'value' => 'false',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'true',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				),
				'autoplay-timeout' => array(
					'type'  => 'text',
					'label' => esc_html__( 'Autoplay timeout', 'medina' ),
					'value' => '5000',
			    	'desc'  => esc_html__('ms.', 'medina'),
				),
				'nav' => array(
				    'type'  => 'switch',
				    'value' => 'true',
				    'label' => esc_html__('Navigation arrows', 'medina'),
				    'left-choice' => array(
				        'value' => 'false',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'true',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				),
				'dot' => array(
				    'type'  => 'switch',
				    'value' => 'false',
				    'label' => esc_html__('Navigation dots', 'medina'),
				    'left-choice' => array(
				        'value' => 'false',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'true',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				),
			),
		),
	),
    'items' => array(
	    'type' => 'addable-popup',
	    'label' => esc_html__('Items', 'medina'),
	    'template' => '{{- name }}',
	    'size' => 'medium',
	    'add-button-text' => esc_html__('Add', 'medina'),
	    'popup-options' => array(
	        'image' => array(
			    'type'  => 'upload',
			    'label' => esc_html__('Image', 'medina'),
			    'images_only' => true,
			),
			'name' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Name', 'medina' ),
			),
			'location' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Location', 'medina' ),
			),
			'hotel' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Hotel', 'medina' ),
			),
			'weather' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Weather', 'medina' ),
			),
			'land' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Land', 'medina' ),
			),
			'link'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Profile link', 'medina' ),
			),
	    ),
	)
);