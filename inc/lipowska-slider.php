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
	add_image_size('lslider_function', 2000, 1500, true);
}
add_action('init', 'l_slider_init');

//--------------------------------------------------------------------


function l_slider_function($type='l_slider_function') {
    $args = array(
        'post_type' => 'lslider_images',
        'posts_per_page' => 5
    );
    $result = '<div class="slider_wrapper">';
    $result .= '<div class="image_slider">';
 
    //the loop
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
		$result .='<div style="background-image: url('. $the_url[0] .');"></div>';
//        $result .='<img title="'.get_the_title().'" src="' . $the_url[0] . '" data-thumb="' . $the_url[0] . '" alt=""/>';
    }
	
    $result .= '</div>';
	$result .='<div id="mainheader"><img class="logo" src="'. get_stylesheet_directory_uri() . '/logo.svg"><h1>Czas na relaks</h1></div>
        	<div class="arrow_wrapper"><img class="arrow-down-button"  src="'. get_stylesheet_directory_uri() . '/ikony/arrow-down.svg"></div>';
    $result .='</div>';
    return $result;
}


add_action('wp_print_scripts', 'lslider_register_scripts');
function lslider_register_scripts() {
wp_register_script('hl_slider-script', plugins_url('js/hl-slider.js', __FILE__), array( 'jquery' ));
 wp_enqueue_script('hl_slider-script');
}
?>