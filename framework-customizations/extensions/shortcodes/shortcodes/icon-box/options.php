<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'type' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'type' => array(
			    'type'  => 'select',
			    'label' => esc_html__('Icon box style', 'medina'),
			    'choices' => array(
			    	'style1' => esc_html__('Style 1', 'medina'),
			    	'style2' => esc_html__('Style 2', 'medina'),
			    	'style3' => esc_html__('Style 3', 'medina'),
			    ),
			),
		),
		'choices' => array(
			'style1' => array(
				'cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Cols', 'medina'),
				    'value' => '6',
				    'choices' => array(
				        '12' => esc_html__('1', 'medina'),
				        '6' => esc_html__('2', 'medina'),
				        '4' => esc_html__('3', 'medina'),
				        '3' => esc_html__('4', 'medina'),
				    ),
				),
				'add' => array(
				    'type' => 'addable-popup',
				    'label' => esc_html__('Addable Popup', 'medina'),
				    'template' => '{{- title }}',
				    'size' => 'medium', // small, medium, large
				    'add-button-text' => esc_html__('Add', 'medina'),
				    'popup-options' => array(
						'icon'    => array(
							'type' => 'icon',
							'set' => 'font-awesome',
							'label' => esc_html__('Choose an Icon', 'medina'),
						),
						'title' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Title of the Box', 'medina' ),
						),
						'text' => array(
							'type'  => 'textarea',
							'label' => esc_html__( 'Text', 'medina' ),
						),   
				    ),
				)
			),
			'style2' => array(
				'animate' => array(
				    'type'  => 'switch',
				    'value' => 'yes',
				    'left-choice' => array(
				        'value' => 'no',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'yes',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				    'label' => esc_html__('Animate', 'medina'),
				),
				'uppercase' => array(
				    'type'  => 'switch',
				    'value' => 'no',
				    'left-choice' => array(
				        'value' => 'no',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'yes',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				    'label' => esc_html__('Uppercase', 'medina'),
				),
				'light' => array(
				    'type'  => 'switch',
				    'value' => 'no',
				    'left-choice' => array(
				        'value' => 'no',
				        'label' => esc_html__('No', 'medina'),
				    ),
				    'right-choice' => array(
				        'value' => 'yes',
				        'label' => esc_html__('Yes', 'medina'),
				    ),
				    'label' => esc_html__('Light', 'medina'),
				),
				'mobile_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Mobile cols', 'medina'),
				    'value' => '6',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'tablet_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Tablet cols', 'medina'),
				    'value' => '6',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'desktop_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Desktop cols', 'medina'),
				    'value' => '3',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'large_desktop_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Large desktop cols', 'medina'),
				    'value' => '',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
				'add' => array(
				    'type' => 'addable-popup',
				    'label' => esc_html__('Addable Popup', 'medina'),
				    'template' => '{{- title }}',
				    'size' => 'medium', // small, medium, large
				    'add-button-text' => esc_html__('Add', 'medina'),
				    'popup-options' => array(
						'icon'    => array(
							'type' => 'icon',
							'set' => 'font-awesome',
							'label' => esc_html__('Choose an Icon', 'medina'),
						),
						'pre' => array(
							'type'  => 'text',
							'value' => 'over',
							'label' => esc_html__( 'Pre text', 'medina' ),
						),
						'title' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Title of the Box', 'medina' ),
						),
						'num' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Number', 'medina' ),
						), 
				    ),
				)
			),
			'style3' => array(
				'mobile_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Mobile cols', 'medina'),
				    'value' => '12',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'tablet_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Tablet cols', 'medina'),
				    'value' => '4',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'desktop_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Desktop cols', 'medina'),
				    'value' => '3',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
			    'large_desktop_cols' => array(
				    'type'  => 'select',
				    'label' => esc_html__('Large desktop cols', 'medina'),
				    'value' => '',
				    'choices' => array(
				    	'' => esc_html__('No', 'medina'),
				        '12' => esc_html__('1/1', 'medina'),
				        '6' => esc_html__('1/2', 'medina'),
				        '4' => esc_html__('1/3', 'medina'),
				        '3' => esc_html__('1/4', 'medina'),
				        '15' => esc_html__('1/5', 'medina'),
				        '2' => esc_html__('1/6', 'medina'),
						'8' => esc_html__('2/3', 'medina'),
				    ),
				),
				'add' => array(
				    'type' => 'addable-popup',
				    'label' => esc_html__('Addable Popup', 'medina'),
				    'template' => '{{- title }}',
				    'size' => 'medium', // small, medium, large
				    'add-button-text' => esc_html__('Add', 'medina'),
				    'popup-options' => array(
						'icon'    => array(
							'type' => 'icon',
							'set' => 'font-awesome',
							'label' => esc_html__('Choose an Icon', 'medina'),
						),
						'big' => array(
						    'type'  => 'switch',
						    'value' => 'no',
						    'left-choice' => array(
						        'value' => 'yes',
						        'label' => esc_html__('Yes', 'medina'),
						    ),
						    'right-choice' => array(
						        'value' => 'no',
						        'label' => esc_html__('No', 'medina'),
						    ),
						    'label' => esc_html__('Big size icon', 'medina'),
						),
						'title' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Title of the Box', 'medina' ),
						),
						'text' => array(
							'type'  => 'textarea',
							'label' => esc_html__( 'Text', 'medina' ),
						),
						'link' => array(
							'type'  => 'text',
							'label' => esc_html__( 'Link', 'medina' ),
						),
						'link_text' => array(
							'type'  => 'text',
							'value' => 'read more',
							'label' => esc_html__( 'Link text', 'medina' ),
						),
				    ),
				)
			),
		)
	)
);