<?php
function dvla_search_result_shortcode($attrs) {
  global $dvla_search_result_data;
  global $dvla_search_fields;
  global $dvla_search_registration;
  
  $results = [];
  foreach($attrs as $key => $value){
    if( $value === 'registration' ){
      $value_to_print = strtoupper($dvla_search_registration);
      array_push($results, $value_to_print);
    } else if( isset( $dvla_search_fields[ $value ] ) ){
      $value_to_print = isset( $dvla_search_result_data[ $value ] ) ? $dvla_search_result_data[ $value ] : '';
      array_push($results, $value_to_print);
    }
  }
  if(sizeof($results)){
    return join($results, ' ');
  }
}
add_shortcode('dvla_search_result', 'dvla_search_result_shortcode');
