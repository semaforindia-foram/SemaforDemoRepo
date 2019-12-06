<?php
function dvla_search_shortcode_help_page_html()
{
    // check user capabilities
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>

    <div class="wrap">
        <h1><?= esc_html(get_admin_page_title()); ?></h1>
        <?= dvla_search_admin_header_html(); ?>
        <h3>Creating a Custom Results Page</h3>
        <div>
          To display a custom results page:
          <ul>
            <li>Create a page from the WordPress Admin menu <b>"Pages" -> "Add New"</b></li>
            <li>Use the shortcodes as described below to output result details and handle errors</li>
            <li>Save the page, and take note of the slug</li>
            <li>Update the DVLA Search Widget's "Results Page" attribute to point at the custom page's slug</li>
          </ul>
        </div>
        <div>
          Or, advanced users can point to DVLA Search results on any page by using the <b>?dvla_search_registration=<i>registration</i></b> URL query parameter.
        </div>
        <div>
          You should use the <b>[dvla_search_result_success][/dvla_search_result_success]</b> shortcodes to wrap the content to show on success.
        </div>

        <div>
          You should use the <b>[dvla_search_result_error][/dvla_search_result_error]</b> shortcode to wrap the content to show on error.
        </div>

        <div>
          You can display the number plate with the shortcode <b>dvla_search_result_number_plate</b>.
        <div>
        Then access the results by passing one or more fieldnames to the <b>dvla_search_result</b> shortcode.
        </div>
        <h3>Example Page Content:</h3>
        <div class="code">
          <pre>
            [dvla_search_result_number_plate]
            [dvla_search_success]
              Your car [dvla_search_result registration] is a [dvla_search_result colour model] and the VIN is [dvla_search_result vin]
            [/dvla_search_success]

            [dvla_search_error]
              There was an error searching for [dvla_search_result registration]
            [/dvla_search_error]
          </pre>
        </div>

        <h3>Available Fields for [dvla_search_result]</h3>

        <table style="width:100%; " border="0">
          <thead>
          <tr><th>Field name</th>
          <th> Description</th>
          <th> Example</th>
          </tr>
          </thead>
          <tbody>
          <tr><td>registration</td>
          <td>
            The registration number searched for.
          <td>MT09NKS</td>
          </tr>

          <tr><td>vin</td>
          <td>
            A vehicle identification number, commonly abbreviated to VIN, or chassis number is a unique code including a serial number, used by the automotive industry to identify individual motor vehicles, towed vehicles, motorcycles, scooters and mopeds as defined in ISO 3833. VINs were first used in 1954.</td>
          <td>WVGZZZ5NZAW007903</td>
          </tr>

          <tr><td>make</td>
          <td> The vehicle manufacturer</td>
          <td> Vauxhall</td>
          </tr>

          <tr><td>model</td>
          <td> The vehicle model</td>
          <td> Vectra</td>
          </tr>

          <tr><td>cylinderCapacity</td>
          <td> The vehicle cylinder capacity (cc)</td>
          <td> 1968cc</td>
          </tr>

          <tr><td>numberOfDoors</td>
          <td> The number of doors on the vehicle</td>
          <td> 5</td>
          </tr>

          <tr><td>sixMonthRate</td>
          <td> The cost of vehicle tax for 6 months</td>
          <td>112.75</td>
          </tr>

          <tr><td>twelveMonthRate</td>
          <td> The cost of vehicle tax for 12 months</td>
          <td>205.00</td>
          </tr>

          <tr><td>dateOfFirstRegistration</td>
          <td> The date on which the vehicle was registered</td>
          <td>23 July 2009</td>
          </tr>

          <tr><td>yearOfManufacture</td>
          <td> They year the vehicle was manufactured</td>
          <td> 2009</td>
          </tr>

          <tr><td>co2Emissions</td>
          <td> The vehicle emissions</td>
          <td> 167 g/km</td>
          </tr>

          <tr><td>fuelType</td>
          <td> The vehicle fuel type</td>
          <td> Diesel (other values Petrol, Electric)</td>
          </tr>

          <tr><td>taxStatus</td>
          <td> Current tax status</td>
          <td> Not taxed</td>
          </tr>

          <tr><td>transmission</td>
          <td> The vehicle transmission</td>
          <td> Manual (other values automatic, cvt)</td>
          </tr>

          <tr><td>colour</td>
          <td> The vehicle colour</td>
          <td> Silver</td>
          </tr>

          <tr><td>typeApproval</td>
          <td> The vehicle category classiﬁcation</td>
          <td> M1</td>
          </tr>

          <tr><td>wheelPlan</td>
          <td> The vehicle wheel plan</td>
          <td> 2 AXLE RIGID BODY</td>
          </tr>

          <tr><td>revenueWeight</td>
          <td> The vehicle’s conﬁrmed maximum gross weight</td>
          <td> 3850kg</td>
          </tr>

          <tr><td>taxDetails</td>
          <td> Vehicle tax information</td>
          <td> Tax due: 06 February 2015</td>
          </tr>

          <tr><td>motDetails</td>
          <td> MOT expiry day</td>
          <td> Expires: 23 July 2015</td>
          </tr>

          <tr><td>taxed</td>
          <td> States if the tax is valid</td>
          <td> No</td>
          </tr>

          <tr><td>mot</td>
          <td> States if the mot is valid</td>
          <td> Yes</td>
          </tr>
          </tbody></table>

    </div>
    <?php
}
