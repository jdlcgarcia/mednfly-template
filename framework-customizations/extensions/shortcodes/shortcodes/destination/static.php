<?php if (!defined('FW')) die('Forbidden');

wp_enqueue_script( 'medina-owlcarousel-js', get_template_directory_uri() . '/js/owl.carousel/owl.carousel.min.js' );

wp_enqueue_style( 'medina-owlcarousel', get_template_directory_uri() . '/js/owl.carousel/owl.carousel.css' );