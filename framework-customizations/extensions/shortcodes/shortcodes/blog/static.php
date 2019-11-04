<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/blog');

wp_enqueue_style(
    'fw-shortcode-blog-shortcode',
    $uri . '/static/css/owl.carousel.min.css'
);
wp_enqueue_script(
    'fw-shortcode-blog-shortcode',
    $uri . '/static/js/owl.carousel.min.js'
);