<?php

/*
* helpers google maps
* @see https://www.advancedcustomfields.com/resources/google-map/
*/

	$apiKey = apply_filters('acf/fields/google_map/api', $apiKey)['key'];

	$x = 1;
?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= $apiKey; ?>"></script>
<script type="text/javascript" src="<?= plugins_url( '/js/acf-google-map-extended-sc-helpers.js', __FILE__); ?>"></script>