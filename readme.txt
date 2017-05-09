=== ACF: Google Map Extended ===
Contributors: codewahoo
Tags: admin, acf, advanced custom field, custom field, map field, google maps, maps, gmap, map, map zoom, map scroll, coordinates
Requires at least: 3.8
Tested up to: 4.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

ACF field. Saves map center, zoom level. Disables map zooming on scroll. Shows location coordinates. Bonus for programmers.

== Description ==

This plugin creates a new field for [Advanced Custom Fields (ACF)](https://wordpress.org/plugins/advanced-custom-fields/ "Advanced Custom Fields") 
extending the functionality of the built-in Google Map field with several handy features:

* Saves map center. You can center your maps wherever you want and indicate that you want to save that place as map center. This can be handy, if you want your front-end map to show some specific place in the center of the map (not necessary the location marker).
* Saves zoom level.
* Disables (optionally) map zooming with a scrollwheel. Sometimes you can get annoyed with your maps starting to zoom, when you scroll the post in the admin area. This feature comes handy here.
* Shows location coordinates. It is easy to get any place's location coordinates (latitude and longitude) with this plugin by setting a marker to the place you need using user friendly map interface.
* Compatible with the data format of the Google Map field coming with ACF. See F.A.Q. for details.
* Saves all maps shown at a page in the global array. This is a bonus for programmers. See F.A.Q. for details.

The plugin makes use of the Google Maps API version 3.
The plugin doesn't use an API key and is therefore operating under the [restrictions of the free Google Maps API](https://developers.google.com/maps/faq#usage_pricing),
which should be more than enough for most websites.

= Compatibility =

This ACF field type is compatible with:

* ACF 4
* ACF 5 (PRO version)
* Google Map field coming with ACF 4/5. See F.A.Q.

= Translations =

The plugin is translated to:

== Changelog ==

= 1.0.4 =

* Corrected the user input's
* Add shortcode feature

= 1.0.3 =

* Addered the API key to the field creation screen

= 1.0.2 =

* Bug fixes

= 1.0.1 =

* Fix minor UI bugs
* Language: Updated POT file
* Language: Updated Netherlands translation
* Language: Updated Russian translation
* Language: Updated Ukrainian translation
* Language: Added French translation
* Language: Added German translation

= 1.0.0 =

* Initial Release