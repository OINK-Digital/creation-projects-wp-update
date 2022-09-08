<?php
// Extras


// Oink API Key for ACF
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDa5QZQQ7zfWEHZrdwCi9GWR4LC5ZzkDN4';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function klf_acf_input_admin_footer() { ?>
    <script type="text/javascript">
        (function($) {
            acf.addFilter('color_picker_args', function (args) {
                var colors = ['#262838','#7F8C9B','#AF4D2D','#F6F7F7','#E3DFD7','#A7A49E']
                args.palettes = colors;
                return args;
            });
        })(jQuery);
    </script>
<?php }
add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');


//setup options page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'Theme Settings',
        'show_in_graphql' => true,
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}


add_action( 'pre_get_posts', function () {

    // access the custom post type order class
    global $CPTO;

    // if WPGraphQL isn't active or CPTUI isn't active, carry on and bail early
    if ( ! function_exists( 'is_graphql_request' ) || ! is_graphql_request() || ! $CPTO ) {
        return;
    }

    // Remove the Post Type Order plugin's "posts_orderby" filter for WPGraphQL requests
    // This filter hooks in too late and modifies the SQL directly so WPGraphQL
    // can't properly map the orderby args to generate the SQL for proper pagination
    remove_filter( 'posts_orderby', [ $CPTO, 'posts_orderby' ], 99 );

    // Add a filter
    add_filter( 'graphql_post_object_connection_query_args', function ( $args, $source, $input_args, $context, $info ) {

        $orderby = [];

        // If the connection has explicit orderby arguments set,
        // use them
        if ( ! empty( $input_args['where']['orderby'] ) ) {
            return $args;
        }

        // Else use any orderby args set on the WP_Query
        if ( isset( $args['orderby'] ) ) {
            $orderby = [];

            if ( is_string( $args['orderby'] ) ) {
                $orderby[] = $args['orderby'];
            } else {
                $orderby = $args['orderby'];
            }
        }

        $orderby['menu_order'] = ! empty( $input_args['last'] ) ? 'DESC' : 'ASC';
        $args['orderby']       = $orderby;

        return $args;
    }, 10, 5 );

});