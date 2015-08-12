<?php

//Full width

function one_one( $atts, $content = null ) {
 
    return '<div class="col-1-1">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('pelna_szerokosc', 'one_one');

//Half width

function one_two( $atts, $content = null ) {
 
    return '<div class="col-1-2">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('jedna_druga', 'one_two');

//Half width

function one_fourth( $atts, $content = null ) {
 
    return '<div class="col-1-4">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('jedna_czwarta', 'one_fourth');


function one_eight( $atts, $content = null ) {
 
    return '<div class="col-1-8">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('jedna_osma', 'one_eight');



function three_fourth( $atts, $content = null ) {
 
    return '<div class="col-3-4">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('trzy_czwarte', 'three_fourth');




function three_eight( $atts, $content = null ) {
 
    return '<div class="col-3-8">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('trzy_osme', 'three_eight');


function five_eight( $atts, $content = null ) {
 
    return '<div class="col-3-4">' . do_shortcode( $content ) . '</div>';
 
}
 
add_shortcode('piec_osmych', 'five_eight');

?>

