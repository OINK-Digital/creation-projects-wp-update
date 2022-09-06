<?php
function get_the_excerpt_max_charlength($id, $charlength) {
	$excerpt = get_the_excerpt($id);
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$out = mb_substr( $subex, 0, $excut );
		} else {
			$out = $subex;
		}
		$out .= '....';
	} else {
		$out = $excerpt;
	}
	return $out;
}

function print_v($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function custom_wp_trim_excerpt($text, $wordcount=500) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
		//Retrieve the post content.
		$text = get_the_content('');
	}
	//Delete all shortcode tags from the content.
	$text = strip_shortcodes( $text );

	$text = apply_filters('the_content', $text);
	$text = str_replace(']]>', ']]&gt;', $text);

	$allowed_tags = ''; /*** MODIFY THIS. Add the allowed HTML tags separated by a comma.***/
	$text = strip_tags($text, $allowed_tags);

	$excerpt_word_count = $wordcount; /*** MODIFY THIS. change the excerpt word count to any integer you like.***/
	$excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);

	$excerpt_end = ''; /*** MODIFY THIS. change the excerpt endind to something else.***/
	$excerpt_more = apply_filters('excerpt_more', '' . $excerpt_end);

	$words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
	if ( count($words) > $excerpt_length ) {
		array_pop($words);
		$text = implode(' ', $words);
		$text = $text . $excerpt_more;
	} else {
		$text = implode(' ', $words);
	}
	return $text;
//	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

// remove woocommerce styles if ther are there
add_filter( 'woocommerce_enqueue_styles', '__return_false');

//function woocommerce_cat_to_class($cat){
//
//	switch($cat){
//		case 'art-style':
//			$class = 'art';
//			break;
//
//		case 'computers-business':
//			$class = 'gov';
//			break;
//
//		case 'cooking-hospitality':
//			$class = 'child';
//			break;
//
//		case 'dance-music':
//			$class = 'music';
//			break;
//
//		case 'health-wellbeing':
//			$class = 'health';
//			break;
//
//		case 'kids-youth':
//			$class = 'main';
//			break;
//
//		case 'languages':
//			$class = 'lang';
//			break;
//
//		case 'people-with-disability':
//			$class = 'comm';
//			break;
//
//		default:
//			$class = 'main';
//			break;
//	}
//	return $class;
//}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}


// remove image height and width
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

//add_filter( 'gform_ajax_spinner_url', 'my_wpcf7_ajax_loader' );
//add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
//function my_wpcf7_ajax_loader () {
//	return  get_bloginfo('stylesheet_directory') . '/imgs/301.gif';
//}