<?php
add_action('admin_menu', 'dvla_search_setup_menu');

include( 'dvla_search_admin_header.php');
include( 'dvla_search_api_key_page.php');
include( 'dvla_search_simple_results_page.php');
include( 'dvla_search_shortcode_help_page.php');

function dvla_search_setup_menu(){
  add_menu_page(
    'DVLA Search',
    'DVLA Search',
    'manage_options',
    'dvla_search',
    'dvla_search_api_key_page_html'
  );

  add_submenu_page(
    'dvla_search', // $parent_slug
    'DVLA Search: Setup', // $page_title
    'Setup and API Key', // $menu_title
    'manage_options', // $capabilities
    'dvla_search', //$menu_slug Matches add_menu_page key so is the default view
    'dvla_search_api_key_page_html' // $function
  );

  add_submenu_page(
    'dvla_search', // $parent_slug
    'DVLA Search: Results Fields', // $page_title
    'Results Fields', // $menu_title
    'manage_options', // £capability
    'dvla_search_results_fields', // $menu_slug
    'dvla_search_simple_results_page_html' // $function
  );

  add_submenu_page(
    'dvla_search', // $parent_slug
    'DVLA Search: Custom Results Page and Shortcode Help', // $page_title
    'Custom Results Page and Shortcode Help', // $menu_title
    'manage_options', // Ecapability
    'dvla_search_custom_results_help', // $menu_slug
    'dvla_search_shortcode_help_page_html' // $function
  );

}
