<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'style' => array(
	    'type'  => 'select',
	    'value' => 'style1',
	    'label' => esc_html__('Blog style', 'medina'),
	    'choices' => array(
	        'style1' => esc_html__('Style 1', 'medina'),
	        'style2' => esc_html__('Style 2', 'medina'),
	    ),
	),
	'number_posts' => array(
	    'type'  => 'text',
	    'value' => '4',
	    'label' => esc_html__('Number posts', 'medina'),
	),
    'orderby' => array(
	    'type'  => 'select',
	    'value' => 'date',
	    'label' => esc_html__('Order by', 'medina'),
	    'choices' => array(
	        'author' => esc_html__('Author', 'medina'),
	        'category' => esc_html__('Category', 'medina'),
	        'date' => esc_html__('Date', 'medina'),
	        'ID' => esc_html__('ID', 'medina'),
	        'title' => esc_html__('Title', 'medina'),
	    ),
	),
    'order' => array(
	    'type'  => 'select',
	    'value' => 'ASC',
	    'label' => esc_html__('Order', 'medina'),
	    'choices' => array(
	        'ASC' => esc_html__('Ascending order', 'medina'),
	        'DESC' => esc_html__('Descending order', 'medina'),
	    ),
	),
    'items' => array(
	    'type'  => 'multi-select',
	    'label' => esc_html__('Select category', 'medina'),
	    'desc'  => esc_html__('Description', 'medina'),
	    'population' => 'array',
	    'prepopulate' => 10,
	    'choices' => FW_Shortcode_Blog::medina_get_blog_categ(),
	    'limit' => 100,
	),
	'desc_size' => array(
	    'type'  => 'text',
	    'label' => esc_html__('Description size', 'medina'),
	    'desc'  => esc_html__('Description size in characters ', 'medina'),
	),
);