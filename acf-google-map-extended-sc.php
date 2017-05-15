<?php

    $shortcode_name = 'acf_gme';    
    include_once('acf-google-map-extended-sc-template.php');
    add_shortcode($shortcode_name, 'acf_gme_shortcode' );
?>