<?php
// Extras


// Oink API Key for ACF
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDa5QZQQ7zfWEHZrdwCi9GWR4LC5ZzkDN4';
    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');