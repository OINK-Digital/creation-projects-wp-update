<?php
/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget', 'theme' ),
		'id'            => 'widget',
		'description'   => __( 'Appears on ', 'theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'theme_widgets_init' );