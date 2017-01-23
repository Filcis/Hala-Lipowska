<?php
/**
 * Hala Lipowska Theme Customizer.
 *
 * @package Hala Lipowska
 */

function hl_customize_register( $wp_customize ) {
    
    $wp_customize->add_setting( 'hl_color_motive', array(
        'default' => 'hl_color_l',
        'transport' => 'refresh'
    ));
    
    $wp_customize->add_section( 'hl_theme_color_section', array(
        'title' => __('Motyw kolorystyczny','hl'),
        'priority' => 20
    ));
    
    $wp_customize->add_control( 'hl_color_motive', array(
        'label'=> 'Wybierz motyw kolorystyczny',
        'type' => 'radio',
        'section' => 'hl_theme_color_section',
        'settings'   => 'hl_color_motive',
        'choices'  => array(
			'hl_color_l'  => 'motyw letni',
			'hl_color_w' => 'motyw zimowy',
		)
    ));
}

add_action( 'customize_register', 'hl_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
//function hl_customize_preview_js() {
//	wp_enqueue_script( 'hl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
//}
//add_action( 'customize_preview_init', 'hl_customize_preview_js' );
