<?php

function style_theme()
{
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 1.0);
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/fonts/font-new/stylesheet.css', array(), 1.0);
    wp_enqueue_style('simplebar', get_template_directory_uri() . '/assets/css/simplebar.css', array(), 1.0);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1.0);
};


add_action('wp_enqueue_scripts', 'style_theme');
