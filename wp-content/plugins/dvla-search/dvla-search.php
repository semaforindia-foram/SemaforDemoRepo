<?php
/*
 * Plugin Name: DVLA Search
 * Plugin URI: https://dvlasearch.co.uk/
 * Description: Easily add results from the DVLA Search API to your site. Requires a DVLA Search subscription.
 * Version: 1.1.3
 */

include('includes/dvla_search_fields.php');
include( 'endpoint/dvla_search_query.php' );
include('includes/dvla_search_result_shortcode.php');
include('includes/dvla_search_result_number_plate_shortcode.php');
include('includes/dvla_search_success_shortcode.php');
include('includes/dvla_search_error_shortcode.php');
include( 'admin/dvla_search_admin_menu.php');

function dvla_search_section_cb(){
}

register_activation_hook( __FILE__, 'dvla_search_activation_hook' );
register_deactivation_hook( __FILE__, 'dvla_search_deactivation_hook' );

function dvla_search_render_api_key_input(){
  $input = get_option('dvla_search_api_key');
  echo '<label for="dvla_search_api_key">DVLA Search API Key:</label> <input type="text" id="dvla_search_api_key" name="dvla_search_api_key" value="' . $input . '" />';
}

function dvla_search_register_settings(){
  register_setting( 'dvla_search_settings', 'dvla_search_api_key' );
  add_settings_section(
    'dvla_search_api_key_settings_section', // $id
    'Account Settings', // $title
    'dvla_search_render_api_key_input', // $callback
    'dvla_search_api_key' // $page
  );
  add_settings_field( 'dvla_search_api_key', 'API Key', 'dvla_search_render_api_key_input', 'dvla_search', 'dvla_search_api_key_settings'  );

}

add_action('admin_init', 'dvla_search_register_settings');
include( 'includes/widget.php' );
add_action('widgets_init', function() { register_widget('DVLA_Search_Widget'); });

include('includes/dvla_search_field_options_page.php');
add_action('admin_init', 'dvla_search_field_options_page');


add_action('wp_enqueue_scripts', function() {
  $path_to_public_css = plugins_url( 'public/assets/css/style.css', __FILE__ );
  wp_enqueue_style('dvla_search_css', $path_to_public_css);
} );


function dvla_search_activation_hook() {
}

function dvla_search_deactivation_hook(){
  //
}
