<?php

function dvla_search_render_field_input($args) {
  echo '<tr>';
  echo '<td>';
  echo $args['label'];
  echo '</td>';
  echo '<td>';
  echo '<input type="checkbox" ';
  echo ' name="' . $args['field_setting'] .'" ';
  echo ' value="1"';
  if( get_option( $args['field_setting'] ) === "1" ) {
    echo ' checked ';
  }
  echo '/>';
  echo '</td>';
  echo '</tr>';
}

function dvla_search_render_options_page_header(){
  global $dvla_search_fields;
  echo '<table>';
  foreach( $dvla_search_fields as $field => $label ){
    dvla_search_render_field_input( [
      'field_setting' => 'dvla_search_fields_show_' . $field,
      'label' => $label,
    ] );
  }
  echo '</table>';
}

function dvla_search_field_options_page() {
  add_settings_section(
    'dvla_search_field_options', // $id
    'Results Fields To Display', // $title
    'dvla_search_render_options_page_header', // $callback
    'dvla_search_field_options' // $page
  );
  global $dvla_search_fields;
  // Register a setting value for each field
  foreach( $dvla_search_fields as $field => $label ){
    $field_setting = 'dvla_search_fields_show_' . $field;
    register_setting(
      'dvla_search_settings_results_group', // $option_group
      $field_setting // $option_name
    );
    add_settings_field(
      $field_setting, // $id
      $label, // $title
      'dvla_search_render_field_input', // $callback
      'dvla_search_results_fields', // $page
      'dvla_search_field_options', // $section
      [ 'field' => $field, 'field_setting'=> $field_setting, 'label' => $label ] // $args
    );
  }
}
