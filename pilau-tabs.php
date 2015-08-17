<?php

add_shortcode( 'tab', 'pilau_tab' );
function pilau_tab( $atts ) {
	global $pilau_tabs;
	$output = '';
	// Enqueue jQuery UI tabs
	wp_enqueue_script( 'jquery-ui-tabs' );
	// Get attributes
	extract( shortcode_atts( array( "label" => __( 'Tab' ) ), $atts ) );
	if ( empty( $pilau_tabs ) ) {
		// First tab - initialize
		$pilau_tabs = array();
		$output = '<div class="pilau-tabs">' . "\n" . '#pilau_tabs#' . "\n" . '<section class="content" id="' . pilau_tabs_id( $label ) . '"><div class="post-content">' . "\n";
	} else {
		// Close a pane, open a pane
		$output .= '</div></section>' . "\n" . '<section class="content" id="' . pilau_tabs_id( $label ) . '"><div class="post-content">' . "\n";
	}
	// No-JS fallback sub-headings
	$output .= '<h2 class="hide-if-js">' . esc_html( $label ) . '</h2>' . "\n";
	// Add label to array
	$pilau_tabs[] = $label;
	return $output;
}
/**
 * Filter content to place tabs list
 *
 * @uses	$pilau_tabs
 * @uses	pilau_tabs_id()
 * @uses	esc_html()
 * @param	string	$content
 * @return	string
 */
add_filter( 'the_content', 'pilau_tabs_content', 1000 );
function pilau_tabs_content( $content ) {
	global $pilau_tabs;
	if ( count( $pilau_tabs ) ) {
		// Construct the tabs list
		$tabs_list = '';
		foreach ( $pilau_tabs as $tab ) {
			$tabs_list .= '<li><a href="#' . pilau_tabs_id( $tab ) . '">' . esc_html( $tab ) . '</a></li>' . "\n";
		}
		// Put the list in - hidden if no JS
		$content = str_replace( '#pilau_tabs#', '<ul class="tabs hide-if-no-js">' . "\n" . $tabs_list . '</ul>', $content );
		// Close the last pane, and the overall tabs wrapper
		$content .= '</section>' . "\n" . '</div>';
	}
	// Reset tabs
	$pilau_tabs = array();
	return $content;
}
/**
 * Helper function to create IDs for tabs
 *
 * @uses	sanitize_title_with_dashes()
 * @param	string	$label
 * @param	string	$prefix
 * @return	string
 */
function pilau_tabs_id( $label, $prefix = 'tab-' ) {
	return sanitize_title_with_dashes( $prefix . $label );
}

?>