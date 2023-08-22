<?php
//disable default posts
function remove_posts_menu()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_posts_menu');



//register custom post types
function kastarter_custom_post_type()
{
    
}
add_action('init', 'kastarter_custom_post_type', 0);


//register taxonomies
function kastarter_register_taxonomy()
{

}
add_action('init', 'kastarter_register_taxonomy');



//show edit taxonomies buttons
function kastarter_custom_admin_archive_link()
{
    //aktualnosci sample
    // function kastarter_custom_admin_archive_link_news()
    // {
    //     echo '<div class="wrap" style="margin-top: 15px"><a href="' . get_site_url() . '/wp-admin/edit-tags.php?taxonomy=localization&post_type=aktualnosci_cpt" class="page-title-action">Edytuj lokalizację</a></div>';
    // }
    // add_filter('views_edit-aktualnosci_cpt', 'kastarter_custom_admin_archive_link_news');

}
add_action('init', 'kastarter_custom_admin_archive_link');
