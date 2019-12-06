<?php
function dvla_search_result_number_plate_shortcode($attrs) {
	global $dvla_search_result_data;
	global $dvla_search_fields;
	global $dvla_search_registration;

	$content =
		'<div class="plate-wrapper">' .
		'<div class="euGB-plate__container">' .
		'<div class="euGB-plate__bg">' .
		'<span class="euGB-plate__eu">&nbsp;</span>' .
		'<span class="euGB-plate__cc">GB</span>' .
		'</div>' .
		'</div>' .
		'<div class="registration-ui__container">' .
		'<div class="registration-ui">' .
		'<span class="registration-ui__span">' . strtoupper($dvla_search_registration) . '</span>' .
		'</div>' .
		'</div>' .
		'</div>';

	return $content;
}

add_shortcode('dvla_search_result_number_plate', 'dvla_search_result_number_plate_shortcode');
