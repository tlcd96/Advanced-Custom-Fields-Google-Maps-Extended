<?php 
        
  /**
  * acf_gme_shortcode($atts)
  * 
  * shortcode feature for acf google maps extended
  * @see https://www.advancedcustomfields.com/resources/google-map/
  * @param  $atts  - attributes of shortcode
  * @return shorcode_template
  */
    function acf_gme_shortcode($atts){

        global $acf_gme_data;

        $atts = shortcode_atts( array(
            'api_key' => '',
            'post_id' => '',
            'field_name' => '',
            'zoom' => 18,
            'zoom_range' => '18, 20',
            'width' => '100%',
            'height' => '400px',
            'icon' => '',
            'animation' => '',
        ), $atts, $shortcode_name);

        include_once 'acf-google-map-extended-sc-single-marker.php';        
    }

?>