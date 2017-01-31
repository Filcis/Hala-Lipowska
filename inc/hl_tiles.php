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

//register fields if AFC is active
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_kafelki',
		'title' => 'kafelki',
		'fields' => array (
			array (
				'key' => 'field_58863f51e9939',
				'label' => 'Kafelek 1',
				'name' => 'kafelek_1',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58863f87e993a',
				'label' => 'adres kafelka 1',
				'name' => 'adres_kafelka_1',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5887b5a7b12b1',
				'label' => 'etykieta kafelka 1',
				'name' => 'etykieta_kafelka_1',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5887a7d9f1f09',
				'label' => 'Kafelek 2',
				'name' => 'kafelek_2',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5887a7f0f1f0a',
				'label' => 'adres kafelka 2',
				'name' => 'adres_kafelka_2',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5887b5b6b12b2',
				'label' => 'etykieta kafelka 2',
				'name' => 'etykieta_kafelka_2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5887a809f1f0b',
				'label' => 'Kafelek 3',
				'name' => 'kafelek_3',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5887a829f1f0c',
				'label' => 'adres kafelka 3',
				'name' => 'adres_kafelka_3',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5887b5c2b12b3',
				'label' => 'etykieta kafelka 3',
				'name' => 'etykieta_kafelka_3',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5887a838f1f0d',
				'label' => 'Kafelek 4',
				'name' => 'kafelek_4',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5887a844f1f0e',
				'label' => 'adres kafelka 4',
				'name' => 'adres_kafelka_4',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'page',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5887b5c9b12b4',
				'label' => 'etykieta kafelka 4',
				'name' => 'etykieta_kafelka_4',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'hl_tiles',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
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
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_2') . '><img src="' . get_field('kafelek_2')['url'] . '">'. get_field('etykieta_kafelka_2') .'</a></div>';
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_3') . '><img src="' . get_field('kafelek_3')['url'] . '">'. get_field('etykieta_kafelka_3') .'</a></div>';
            $output .= '<div class="featured-activities"><a href=' . get_field('adres_kafelka_4') . '><img src="' . get_field('kafelek_4')['url'] . '">'. get_field('etykieta_kafelka_4') .'</a></div>';
        }
        $output .= '</div>';
    }
    wp_reset_postdata();
    
    return $output;
}

add_shortcode( 'kafelki', 'hl_tiles_shortcode' );