<?php
function dvla_search_error_shortcode($attrs, $content) {
  global $dvla_search_status;
  if($dvla_search_status !== 'success') {
    return do_shortcode($content);
  } else {
    return '';
  }
}
add_shortcode('dvla_search_error', 'dvla_search_error_shortcode');
