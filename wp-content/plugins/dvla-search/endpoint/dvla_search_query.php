<?php
function dvla_search_whitelist_search_query_vars($vars) {
  array_push( $vars, 'dvla_search_registration' );
  array_push( $vars, 'dvla_search_type' );
  return $vars;
}
add_filter('query_vars', 'dvla_search_whitelist_search_query_vars' );

//  add_filter('the_title', function(){ return 'DVLA Search Result!!'; }, 99);

add_action('init', function (){
  add_rewrite_endpoint('dvla-search', EP_ALL, true);
});

function safe_input( $input ) {
  // Allow between 3 and 10 letters, numbers or spaces. (The space is important!)
  $regexp = '/^[0-9a-zA-Z ]{3,10}/';
  if( preg_match_all( $regexp, $input, $matches) > 0) {
    return str_replace(' ', '', $input);
  } else {
    return false;
  }

}

function dvla_search_query_results()
{
  global $wp_query;
  if( get_query_var('dvla_search_registration') ) {
      $api_key = get_option('dvla_search_api_key');
      global $dvla_search_registration;
      global $dvla_search_result_data;
      global $dvla_search_status;
      $dvla_search_registration = safe_input($wp_query->query_vars['dvla_search_registration']);
      $dvla_search_type = safe_input($wp_query->query_vars['dvla_search_type']);
       
      $result = wp_remote_get('https://dvlasearch.appspot.com/DvlaSearch?licencePlate='.$dvla_search_registration.'&apikey='.$api_key);
 
      $dvla_search_result_data = json_decode( $result['body'], true );

      if( isset($dvla_search_result_data['error']) && $dvla_search_result_data['error'] === 1 ) {
        $dvla_search_status = 'error';
      } else {
        $dvla_search_status = 'success';
      }

      if( $dvla_search_type == 'default' ){
        global $wp_query;
        $wp_query->is_404=false;
        add_action(
          'template_redirect',
          function() {
            include(plugin_dir_path( __FILE__ ).'../public/results.php');
            exit;
          },
          99
        );
      }
    }
}

add_action( 'template_redirect', 'dvla_search_query_results' );

add_filter('http_request_args', 'dvla_http_request_args', 100, 1);
function dvla_http_request_args($r)
{
	$r['timeout'] = 10;
	return $r;
}
 
add_action('http_api_curl', 'dvla_http_api_curl', 100, 1);
function dvla_http_api_curl($handle)
{
	curl_setopt( $handle, CURLOPT_CONNECTTIMEOUT, 10 );
	curl_setopt( $handle, CURLOPT_TIMEOUT, 10 );
}
