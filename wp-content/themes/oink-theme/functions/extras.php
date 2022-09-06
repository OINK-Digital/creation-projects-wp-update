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