<?php
function include_my_scripts()
{
    /* STYLES */
    wp_enqueue_style('swiperStyle', get_template_directory_uri() . '/dist/vendors/swiper/swiper-bundle.min.css', array(), '6.7.5', 'all');
    // wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/dist/vendors/jquery/jquery-ui.min.css', array(), '1.12.1', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.04', 'all');

    /* SCRIPTS */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/dist/vendors/jquery/jquery.min.js', array(), '3.5.1', true);
    // wp_enqueue_script('jquery-ui',  get_template_directory_uri() . '/dist/vendors/jquery/jquery-ui.min.js', array(), '1.12.1', true);
    wp_enqueue_script('swiperJs',  get_template_directory_uri() . '/dist/vendors/swiper/swiper-bundle.min.js', array(), '6.7.6', true);
    wp_enqueue_script('matchHeight',  get_template_directory_uri() . '/dist/vendors/jquery/jquery.matchHeight.min.js', array(), '0.7.2', true);
    wp_enqueue_script('fslightbox',  get_template_directory_uri() . '/dist/vendors/fslightbox/fslightbox.js', array(), '3.3.0', true);

    wp_enqueue_script('main',  get_template_directory_uri() . '/dist/js/main.js', array(), '1.04', true);
}

add_action('wp_enqueue_scripts', 'include_my_scripts');;