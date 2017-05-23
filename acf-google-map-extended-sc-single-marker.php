<?php	 

  /**
    * single mark template
    * @see https://www.advancedcustomfields.com/resources/google-map/
    */

    $location = get_field($atts['field_name'], $atts['post_id']);

    if( !empty($location) ):
?>
    <div class="acf-map" style="width: <?= $atts['width']; ?>; height: <?= $atts['height']; ?>" data-zoom="<?= $location['zoom']; ?>" data-zoom-range="<?= $atts['zoom_range']; ?>">
        <div class="marker" data-lat="<?= $location['lat']; ?>" data-lng="<?= $location['lng']; ?>" data-icon="<?= $atts['icon']; ?>" data-animation="<?= $atts['animation']; ?>"></div>
    </div>
<?php endif; ?>