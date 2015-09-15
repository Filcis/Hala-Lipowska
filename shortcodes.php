<?php

//Full width

function hl_columns( $atts = null, $content = null ) {
		$atts = shortcode_atts( array(
				'size'   => '1',
				'center' => 'no',
				'last'   => null,
				'class'  => ''
			), $atts, 'hl_columns' );
		if ( $atts['last'] !== null && $atts['last'] == '1' ) $atts['class'] .= 'column-last';
		if ( $atts['center'] === 'yes' ) $atts['class'] .= ' centered';
		return '<div class="grid__col--' . $atts['size'] . '">' . do_shortcode( $content ) . '</div>';
	}

add_shortcode('kolumny', 'hl_columns');

?>

