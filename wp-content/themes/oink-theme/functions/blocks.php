<?php
// Blocks

function oink_theme_setup() {

    // Add Align Wide and Full Width options to blocks.
    // This is done by adding the corresponding classname to the block’s wrapper.
    add_theme_support( 'align-wide' );

    // Stop users picking their own colours in the block editor
    add_theme_support( 'disable-custom-colors' );

    // Stop users from changing font sizes
    add_theme_support('disable-custom-font-sizes');

// Adds support for editor color palette.
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Navy' ),
            'slug'  => 'navy',
            'color'	=> '#262838',
        ),
        array(
            'name'  => __( 'Slate' ),
            'slug'  => 'slate',
            'color' => '#7F8C9B',
        ),
        array(
            'name'  => __( 'Terracotta' ),
            'slug'  => 'terracotta',
            'color' => '#AF4D2D',
        ),
        array(
            'name'  => __( 'Black' ),
            'slug'  => 'black',
            'color'	=> '#000',
        ),
        array(
            'name'  => __( 'White' ),
            'slug'  => 'white',
            'color' => '#fff',
        ),
        array(
            'name'  => __( 'Natural' ),
            'slug'  => 'natural',
            'color' => '#F6F7F7',
        ),
        array(
            'name'  => __( 'sand' ),
            'slug'  => 'sand',
            'color'	=> '#f5f5f5',
        ),
        array(
            'name'  => __( 'cement' ),
            'slug'  => 'cement',
            'color' => '#A7A49E',
        ),
    ) );

    // Add a stylesheet for editing in the Dashboard
    add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
    add_editor_style( 'dashboard.css' );
}
add_action( 'after_setup_theme', 'oink_theme_setup' );

// Add Reusable blocks to menu
function linked_url() {
    add_menu_page( 'linked_url', 'Reusable Blocks', 'read', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
add_action( 'admin_menu', 'linked_url' );

function linkedurl_function() {
    global $menu;
    $menu[1][2] = "/wp-admin/edit.php?post_type=wp_block";
}
add_action( 'admin_menu' , 'linkedurl_function' );


// Category for custom blocks
function gwg_block_categories( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );
    return in_array( 'yukawa', $category_slugs, true ) ? $categories : array_merge(
        $categories,
        array(
            array(
                'slug'  => 'themeslug',
                'title' => __( 'Theme Custom Blocks', 'themeslug' ),
                'icon'  => null,
            ),
        )
    );
}

add_filter( 'block_categories', 'gwg_block_categories' );


// Register ACF Blocks
function register_acf_block_types() {

    // sample buttons block.
    // acf_register_block_type(array(
    //     'name'              => 'buttons',
    //     'title'             => __('Button(s)'),
    //     'description'       => __('A custom button(s) block.'),
    //     'render_template'   => 'partials/blocks/buttons.php',
    //     'category'          => 'formatting',
    //     'icon'              => 'dashicons-layout',
    //     'keywords'          => array( 'buttons', 'button' ),
    // ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}