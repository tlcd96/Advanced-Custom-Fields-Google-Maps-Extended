<?php

    $shortcode_name = 'acf_gme';

    include_once('acf-google-map-extended-sc-template.php');
    add_shortcode($shortcode_name, 'acf_gme_shortcode' );    

    // CSS Files
    wp_register_style( 
        'acf-gme-frontend-helpers-style', 
        plugins_url( '/css/acf-gme-helpers.css', __FILE__), 
        array(), 
        null, 
        true
    );

    wp_enqueue_style('acf-gme-frontend-helpers-style');


    add_action('init', function(){
         //JS Files
        $apiKey = apply_filters('acf/fields/google_map/api', $apiKey)['key'];

        $url = 'https://maps.googleapis.com/maps/api/js';
        $url = add_query_arg([
            'key' => $apiKey
        ], $url );

        wp_register_script( 'acf-gme-frontend', $url, array(), null, true );
        wp_register_script( 'acf-gme-frontend-helpers', plugins_url( '/js/acf-google-map-extended-sc-helpers.js', __FILE__), array(), null, true );

        wp_enqueue_script('acf-gme-frontend');
        wp_enqueue_script('acf-gme-frontend-helpers');
    });

   
    
?>