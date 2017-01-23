<?php

$hl_theme_color = get_theme_mod( 'hl_color_motive' );
//function responsive for overwriting default color styles
function hl_color_motive_add_style() {
    wp_enqueue_style(  'hl_winter', get_stylesheet_directory_uri() . '/hl_winter.css' );
}

if( $hl_theme_color != '' ) {
        switch ( $hl_theme_color ) {
            case 'hl_color_l':
                // Do nothing, default setting
                break;
            case 'hl_color_w':
                add_action( 'wp_enqueue_scripts', 'hl_color_motive_add_style' );
                break;
    }
}
//function responsive for overwriting default logo color
function hl_logo() {
    $hl_theme_color = get_theme_mod( 'hl_color_motive' );
    if ($hl_theme_color === 'hl_color_w'){
        $logo_url = get_stylesheet_directory_uri() . '/images/logopttkzima.svg';
    } else {
        $logo_url = get_stylesheet_directory_uri() . '/images/logopttk.svg';
    }
    
?>
<img id="logo" src= "<?php echo $logo_url?>">
<?php 
} 
?>