
=== DVLA Search ===
Tags: dvlasearch, widget, shortcode
Requires at least: 3.0.1
Tested up to: 5.3.0
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The DVLA Search Plugin provides subscribers to the DVLA Search API a widget, customisable results page, and shortcodes for use on custom pages.

== Description ==

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/dvla-search` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->DVLA Search screen to configure the plugin with your API Key
  1.1 If you want to test the Plugin you can use the example API Key "DvlaSearchDemoAccount" and test with a registration number beginning MT09 or FH51 such as MT09NKS.

Once you've added your API Key you can customize the fields shown on the simple results page from the Settings->DVLA Search->Results Fields screen.

= Add The Widget To Your Site =
1. Go to Appearance->Widgets
1. Drag the "DVLA Search Widget" to the sidebar or other widget area of your choice.
1. By default the widget will point at the simple results page and the widget will have no title.

= Create a Custom Results Page =

To display the results on your own page, you can use the provided shortcodes as follows:

1. Create a new page from Pages->Add New
1. Use the `[dvla_search_success][/dvla_search_success]` block to wrap the content to show if the search returned valid results.
1. Use the `[dvla_search_error][/dvla_search_error]` block to wrap a message to display if there was an error.
1. You can display the results data with the `[dvla_search_result]` shortcode by specifying one or more field to output.
  1.1 For example, to display the vin use `[dvla_search_result vin]`
  1.1 Or to display the colour and model use `[dvla_search_result colour model]`
  1.1 For a full list of fields available see the help page at DVLA Search->Shortcode Help or in the readme.
1. Save your page and take note of the slug.
1. Update the widget "Results Page" option with the slug of your custom results page.


For example, your custom results page might contain the following shortcodes:
`
    [dvla_search_success]
      Your car [dvla_search_result registration] is a [dvla_search_result colour model] and the VIN is [dvla_search_result vin]
    [/dvla_search_success]

    [dvla_search_error]
      There was an error searching for [dvla_search_result registration]
    [/dvla_search_error]
`

== Frequently Asked Questions ==

= Can I test the DVLA Search Plugin without an account? =

Yes, you can use the example API Key "DvlaSearchDemoAccount" and test with a registration number beginning MT09 or FH51 such as MT09NKS.

= How do I signup for an account with DVLASearch.co.uk? =

You can sign up for an account at [https://dvlasearch.co.uk/dvla-api-obtaining-access/](https://dvlasearch.co.uk/dvla-api-obtaining-access/)

= How many credits does each search use? =

Each time someone searches for a vehicle registration, it uses one credit.

= Available Fields =
The following API fields are available:

 * **vin** - A vehicle identification number, commonly abbreviated to VIN, or chassis number, is a unique code including a serial number, used by the automotive industry to identify individual motor vehicles, towed vehicles, motorcycles, scooters and mopeds as defined in ISO 3833. VINs were first used in 1954. eg _WVGZZZ5NZAW007903_
 * **make** - The vehicle manufacturer. eg _Vauxhall_
 * **model** - The vehicle model. eg _Vectra_
 * **cylinderCapacity** - The vehicle cylinder capacity (cc). eg _1968cc_
 * **numberOfDoors** - The number of doors on the vehicle. eg _5_
 * **sixMonthRate** - The cost of vehicle tax for 6 months. eg _112.75_
 * **twelveMonthRate** - The cost of vehicle tax for 12 months. eg _205.00_
 * **dateOfFirstRegistration** - The date on which the vehicle was registered. eg _23 July 2009_
 * **yearOfManufacture** - They year the vehicle was manufactured. eg _2009_
 * **co2Emissions** - The vehicle emissions. eg _167 g/km_
 * **fuelType** - The vehicle fuel type. eg _Diesel_ (other values: _Petrol_, _Electric_)
 * **taxStatus** - Current tax status. eg _Not taxed_
 * **transmission** - The vehicle transmission. eg _Manual_ (other values: _automatic_, _cvt_)
 * **colour** - The vehicle colour. eg _Silver_
 * **typeApproval** - The vehicle category classiﬁcation. eg _M1_
 * **wheelPlan** - The vehicle wheel plan. eg _2 AXLE RIGID BODY_
 * **revenueWeight** - The vehicle’s conﬁrmed maximum gross weight. eg _3850kg_
 * **taxDetails** - Vehicle tax information. eg _Tax due: 06 February 2015_
 * **motDetails** - MOT expiry day. eg _Expires: 23 July 2015_
 * **taxed** - States if the tax is valid. eg _false_
 * **mot** - States if the mot is valid. eg _true_

 For full details, see the "Shortcode Help" section of the DVLA Search Admin Menu, or the [DVLA Search API Documentation](https://dvlasearch.co.uk/dvla-api-documentation/)

= Advanced Customization =

If you are comfortable writing or modifying WordPress Plugins you can take advantage of the search functionality and access the results in your own code.

 * Any page with the `?dvla_search_registration=<REG>` query param will hit the API using your registered API Key and add the results to a global variable `$dvla_search_result_data`
 * The results in `$dvla_search_result_data` are an array keyed by the fields described in "Available Fields" section of the readme.
 * For more insight into how the DVLA Search shortcodes access the results, see the code in the plugin directory.
 * You could for example use this data in a your own shortcode to display on a custom results page.

For example:
`
<?php
function dvla_search_custom_shortcode() {
  global $dvla_search_result_data;
  global $dvla_search_registration;

  if( $dvla_search_result_data['mot'] ) {
    return "$dvla_search_registration has a valid MOT";
  } else {
    return "$dvla_search_registration does not have a valid MOT";
  }
}
add_shortcode('dvla_search_custom_shortcode', 'dvla_search_custom_shortcode');
`

== Changelog ==

= 1.1.3 =
 * Increase timeout of curl requests for slow connections

= 1.1.2 =
 * Fixed an issue where widget options would not display in admin menu.

= 1.1.1 =
 * Fixed the widget input height issue on some themes including Avada.

= 1.1.0 =
* Improved the widget CSS for compatibility with more themes.
* Fixed a CSS issue that could impact the sites theme font.
* Fixed a bug where on some themes the results page layout would break.

= 1.0.1 =
* Updated readme.txt formatting.

= 1.0.0 =
* Initial Release.

== Upgrade Notice ==

= 1.0.0 =
This is the initial DVLA Search Plugin release.
