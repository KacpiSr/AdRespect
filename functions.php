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




function add_custom_scripts() {
    wp_enqueue_script('masonry-script', get_template_directory_uri() . '/src/js/template-parts/masonry.js', array('jquery'), null, true);
    wp_localize_script('masonry-script', 'masonry_vars', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'add_custom_scripts');

function load_more_images() {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

    $args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 3,
        'paged'          => $page,
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) {
        $top_position = 0;
        while ($query->have_posts()) {
            $query->the_post();
            $image_url = wp_get_attachment_url(get_the_ID());
            ?>
            <div class="gallery-item" style="position: absolute; left: 0; top: <?php echo $top_position; ?>px;">
                <img src="<?php echo esc_url($image_url); ?>" alt="Image">
            </div>
            <?php
            $top_position += 100;
        }
        wp_reset_postdata();
    }

    $new_images_html = ob_get_clean();

    if (!empty($new_images_html)) {
        echo json_encode(array('success' => true, 'html' => $new_images_html));
    } else {
        echo json_encode(array('success' => false));
    }

    wp_die();
}
add_action('wp_ajax_load_more_images', 'load_more_images');
add_action('wp_ajax_nopriv_load_more_images', 'load_more_images');



