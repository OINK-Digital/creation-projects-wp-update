<?php
// Add Shortcode
function btn_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
			array(
				'url' => '',
				'class' => '',
				'target' => '',
			), $atts )
	);

	// Code
	$out = '<a class="button '.$class.'" href="'.$url.'" target="'.$target.'">';
	$out .= $content;
	$out .= '</a>';
	return $out;

}
add_shortcode( 'theme-btn', 'btn_shortcode' );