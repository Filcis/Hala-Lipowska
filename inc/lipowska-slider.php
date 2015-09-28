<?php
/*
    Plugin Name: Lipowska-slider
    Description: slider
    Author: Filip Ciślak
    Version: 1.0
*/


function l_slider_init() {
	add_shortcode('l_slider-shortcode', 'l_slider_function');
    $args = array(
        'public' => true,
        'label' => 'Lipowska slider',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('lslider_images', $args);

}
add_action('init', 'l_slider_init');

//--------------------------------------------------------------------


function l_slider_function($type='l_slider_function') {
	global $post;
    $args = array(
        'post_type' => 'lslider_images',
        'posts_per_page' => 5
    );
    $result = '<div class="image_slider">';
 
    //the loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
		$result .='<div style="background-image: url('. $the_url[0] .');"></div>';
    }
	
    $result .= '</div>';

//    $result .='</div>';
    return $result;
}
?>