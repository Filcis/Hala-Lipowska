<?php
/*
    Plugin Name: Lipowska-slider
    Description: slider
    Author: Filip Ciślak
    Version: 1.0
*/


function lipowska-slider_init() {
    $args = array(
        'public' => true,
        'label' => 'Lipowska slider',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('lipowska-slider_images', $args);
}
add_action('init', 'lipowska-slider_init');

?>