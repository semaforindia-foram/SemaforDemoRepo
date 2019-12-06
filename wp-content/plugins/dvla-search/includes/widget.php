<?php
class DVLA_Search_Widget extends WP_Widget {
  public function __construct() {
    parent::__construct(
      'dvla_search_widget',
      'DVLA Search Widget',
      [
        'description' => 'DVLA Search'
      ]
    );
  }

  public function form( $instance ) {

    $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
    $results_page = isset( $instance['results_page'] ) ? $instance['results_page'] : '/dvla-search';
    $show_powered_by = isset( $instance['show_powered_by'] ) ? $instance['show_powered_by'] : 0;
    echo '<p>';
    echo  '<label for="'. $this->get_field_id( 'title' ) .'">Title:</label>';
    echo  '<input type="text" id="' . $this->get_field_id( 'title' ) .'" name="'. $this->get_field_name( 'title' ).'" value="'. esc_attr( $title ).'" />';
    echo '</p>';

    echo '<p>';
    echo  '<label for="'. $this->get_field_id( 'show_powered_by' ) .'">Show "Powered By DVLASearch.co.uk" next to search field: </label>';
    echo  '<input type="checkbox" id="' . $this->get_field_id( 'show_powered_by' ) .'" name="'. $this->get_field_name( 'show_powered_by' ).'"';
    echo $show_powered_by ? ' checked ' : '';
    echo ' />';
    echo '</p>';

    echo '<p>';
    echo '<label for="' . $this->get_field_id( 'results_page' ) . '">Results Page</label>';
    echo '<input type="text" id="' . $this->get_field_id( 'results_page' ) . '" name="' . $this->get_field_name( 'results_page' ) .'" value="'. esc_attr( $results_page ) . '" />';
    echo '</p>';
  }

  public function widget( $args, $instance ){
    extract( $args );
    $title = isset($instance[ 'title' ]) ? $instance['title'] : 'DVLA Search';
    $results_page = isset( $instance['results_page'] ) ? $instance['results_page'] : '/dvla-search';
    $show_powered_by = isset( $instance['show_powered_by'] ) ? $instance['show_powered_by'] : 0;

    echo $before_widget;
    echo '<div class="dvla_search_widget">';
    echo '<form action="' . $results_page . '">';


    echo '<label>'. $title .'</label>';

    include('render_plate.php');

    if( $results_page === '/dvla-search' ) {
      echo '<input type="hidden" name="dvla_search_type" value="default">';
    } else {
      echo '<input type="hidden" name="dvla_search_type" value="custom">';
    }

    if( isset($instance['show_powered_by']) && $instance['show_powered_by'] ) {
      echo '<span style="float:left; font-size: 11px; color: #9f9e9e;">Powered by <a href="https://dvlasearch.co.uk">DVLASearch.co.uk</a></span>';
    }

    echo '<input style="float: right;" type="submit" value="Look Up" />';
    echo '</form>';
    echo '</div>';
    echo $after_widget;
  }

}
