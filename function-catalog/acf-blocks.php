<?php

/* REGISTER CATEGORY*/
function example_block_category($categories, $post)
{
    /* ******************* */
    // SAMPLE /  GLOBAL
    /* ******************* */
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'global',
                'title' => 'Global'
            ),
        ),
    );
}
add_filter('block_categories', 'example_block_category', 10, 2);
/* END REGISTER CATEGORY*/



/* ADD BLOCK*/
function kastarter_acf_blocks_register()
{
    if (function_exists('acf_register_block_type')) {

        /* ******************* */
        // SAMPLE /  GLOBAL
        /* ******************* */

        /* full photo slider */
        // acf_register_block_type(array(
        //     'name'              => 'Full photo slider',
        //     'title'             => __('Full foto lub slider'),
        //     'render_template'   => 'template-blocks/global/full-photo-or-slider.php',
        //     'category'          => 'global',
        //     'icon'              => 'schedule',
        //     'keywords'          => array('full', 'grafika', 'zdjęcie', 'slider', 'peripherals'),
        //     'mode'    => 'edit',
        // ));
    }
}
add_action('acf/init', 'kastarter_acf_blocks_register');
/* END ADD BLOCK*/