<?php
global $dvla_search_result_data;
global $dvla_search_fields;
global $dvla_search_registration;
?>


<?= get_header(); ?>
<div class="wrap">
  <div id="results">
    <div class="section-title">
      <h2>Search Results</h2>
    </div>
<?php if( isset($dvla_search_result_data['error']) && $dvla_search_result_data['error'] == "1"): ?>
  <b>Sorry, There was an error searching for <em><?= $dvla_search_registration; ?></em>.</b>
<?php else: ?>
    <div class="plate-and-summary__container">
      <div class="plate-and-summary__plate">
        <h3>Plate Number</h3>
        <div class="plate-wrapper">
          <div class="euGB-plate__container">
            <div class="euGB-plate__bg">
              <span class="euGB-plate__eu">&nbsp;</span>
              <span class="euGB-plate__cc">GB</span>
            </div>
          </div>
          <div class="registration-ui__container">
            <div class="registration-ui">
              <span class="registration-ui__span"><?= strtoupper($dvla_search_registration); ?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="plate-and-summary__summary">
        <h3>Vehicle Details</h3>
        <ul id="vehicleOneDetails">
          <?php
            foreach($dvla_search_result_data as $key => $value){
              if( get_option('dvla_search_fields_show_'.$key ) ) {
                if ($key === 'taxed' || $key === 'mot' ) {
                  echo '<li><span>'.$dvla_search_fields[ $key ].':</span><strong> '. ( $value ? 'Yes' : 'No') .' </strong></li>';  
                } else
                  echo '<li><span>'.$dvla_search_fields[ $key ].':</span><strong> '. (empty($value) ? '&nbsp;' : $value) .' </strong></li>';
                }
            }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?= get_footer(); ?>
