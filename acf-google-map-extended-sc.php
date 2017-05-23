<?php

    $shortcode_name = 'acf_gme';

    include_once('acf-google-map-extended-sc-template.php');
    add_shortcode($shortcode_name, 'acf_gme_shortcode' );    

    add_action('wp_head', function(){
        include_once('acf-google-map-extended-sc-helpers-style.php');
    });

    add_action('wp_footer', function(){
        include_once('acf-google-map-extended-sc-helpers.php');
    }, 20);

    
?>