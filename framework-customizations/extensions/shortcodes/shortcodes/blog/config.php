<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$cfg = array(
    'page_builder' => array(
        'title'         => esc_html__('Blog', 'medina'),
        'description'   => esc_html__('Add an blog items', 'medina'),
        'tab'           => esc_html__('Content Elements', 'medina'),
        'popup_size'    => 'medium', // can be large, medium or small
    )
);

?>