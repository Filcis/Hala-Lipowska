<?php 
/*Plugin Name: Tiles post type
Description: Plugin registering tiles for use in hala-lipowska theme
Version: 1.0
License: GPLv2
*/

?>

<?php

// Register Custom Post Type
add_action( 'init', 'hl_tiles_register', 0 );

function hl_tiles_register() {

	$labels = array(
		'name'                  => _x( 'Kafelki', 'Post Type General Name', 'hl' ),
		'singular_name'         => _x( 'Kafelek', 'Post Type Singular Name', 'hl' ),
		'menu_name'             => __( 'Kafelki', 'hl' ),
		'name_admin_bar'        => __( 'Kafelki', 'hl' ),
	);
	$args = array(
		'label'                 => __( 'Kafelek', 'hl' ),
		'description'           => __( 'Post Type Description', 'hl' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
        'supports'              => 'title'
	);
	register_post_type( 'hl_tiles', $args );

}

// Register shortcode to output custom post type

function hl_tiles_shortcode() {

$args = array(
        'post_type' => 'hl_tiles',
        'posts_per_page' => 1,
    );

$output = '';
    $query = new WP_Query( $args );
    if( $query->have_posts() ){
        $output .= '<div class ="tiles_flex_wrapper hide-on-mobile featured-row">';
        while( $query->have_posts() ){
            $query->the_post();
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_1') . '><img src="' . get_field('kafelek_1')['url'] . '">'. get_field('etykieta_kafelka_1') .'</a></div>';
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_2') . '><img src="' . get_field('kafelek_2')['url'] . '"></a>'. get_field('etykieta_kafelka_2') .'</div>';
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_3') . '><img src="' . get_field('kafelek_3')['url'] . '"></a>'. get_field('etykieta_kafelka_3') .'</div>';
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_4') . '><img src="' . get_field('kafelek_4')['url'] . '"></a>'. get_field('etykieta_kafelka_4') .'</div>';
        }
        $output .= '</div>';
    }
    wp_reset_postdata();
    
    return $output;
}

add_shortcode( 'kafelki', 'hl_tiles_shortcode' );



