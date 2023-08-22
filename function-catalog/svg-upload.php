<?php 

function kastarter_allow_svg($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'kastarter_allow_svg');

?>