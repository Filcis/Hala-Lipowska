<?php

//Full width

function one_one( $atts, $content = null ) {
 
    return '<div class="col-1-1">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('one_one', 'one_one');

//Half width

function one_two( $atts, $content = null ) {
 
    return '<div class="col-1-2">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('one_two', 'one_two');

//Half width

function one_fourth( $atts, $content = null ) {
 
    return '<div class="col-1-4">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('one_fourth', 'one_fourth');

?>