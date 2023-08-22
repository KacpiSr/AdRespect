<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');



/*****************************************************************************************************/
/* INCLUDE SCRIP & ASSETS */
get_template_part('function-catalog/include-script-styles');

/*****************************************************************************************************/
/* MENU REGISTER */
get_template_part('function-catalog/menu-register');

/*****************************************************************************************************/
/* ADMIN AVATAR */
// get_template_part('function-catalog/avatar-change');

/*****************************************************************************************************/
/* SVG TO CMS */
get_template_part('function-catalog/svg-upload');

/*****************************************************************************************************/
/* ACF BLOCKS */
get_template_part('function-catalog/acf-blocks');

/*****************************************************************************************************/
/* ACF STYLING */
// get_template_part('function-catalog/acf-styling');

/*****************************************************************************************************/
/* ACF OPTION PAGES */
// get_template_part('function-catalog/acf-options-page');

/*****************************************************************************************************/
/* WP GUTENBERG WIDTH */
get_template_part('function-catalog/gutenberg-width');

/*****************************************************************************************************/

/* CUSTOM POST TYPE & TAXONOMIES */
// get_template_part('function-catalog/custom-post-type');

/*****************************************************************************************************/
/* REMOVE COMMENTS*/
get_template_part('function-catalog/remove-comments');

/*****************************************************************************************************/

/*  REMOVE H1 FROM TINY MCE */
// get_template_part('function-catalog/remove-tiny-h1');

/*****************************************************************************************************/





function my_custom_ajax_action() {
    $page = intval($_GET['page']);
    $per_page = intval($_GET['per_page']);

    $args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => $per_page,
        'paged'          => $page,
    );

    $query = new WP_Query($args);
    $images = array();

    while ($query->have_posts()) {
        $query->the_post();
        $image_url = wp_get_attachment_url(get_the_ID());
        array_push($images, $image_url);
    }

    wp_reset_postdata();

    wp_send_json($images);
    wp_die();
}
add_action('wp_ajax_my_custom_ajax_action', 'my_custom_ajax_action');
add_action('wp_ajax_nopriv_my_custom_ajax_action', 'my_custom_ajax_action');


function enqueue_custom_scripts() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/src/js/template-parts/macygallery.js', array('jquery'), '1.0', true);
    wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



