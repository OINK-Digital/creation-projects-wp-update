<?php
/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function theme_scripts() {
//	wp_enqueue_script( 'masonry-js',
//		get_stylesheet_directory_uri().'/plugs/masonry.js',
//		array( 'jquery' )
//	);
//	wp_enqueue_script( 'fancybox-js',
//		get_stylesheet_directory_uri().'/plugs/fancybox/jquery.fancybox.js',
//		array( 'jquery' )
//	);

//	wp_enqueue_script( 'theme-nav', get_template_directory_uri() . '/plugs/navbar.js', array('jquery'));

//	wp_enqueue_style('fancybox-css',get_stylesheet_directory_uri().'/plugs/fancybox/jquery.fancybox.css');
//	wp_enqueue_style('woo-small-css',get_home_url().'/wp2016/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css', array(),'','all and (max-width:800px)');
	
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js');
	
	$version = '1';

	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), $version, true);

	wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/style.css?v='.$version );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );