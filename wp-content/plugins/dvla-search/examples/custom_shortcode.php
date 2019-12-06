<?php
function dvla_search_custom_shortcode() {
  global $dvla_search_result_data;
  global $dvla_search_registration;

  if( $dvla_search_result_data['mot'] ) {
    return "$dvla_search_registration has a valid MOT";
  } else {
    return "$dvla_search_registration does not have a valid MOT";
  }
}
add_shortcode('dvla_search_custom_shortcode', 'dvla_search_custom_shortcode');
