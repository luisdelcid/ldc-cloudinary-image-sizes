<?php

/**
 * @return void
 */
function ldc_wp_coundinary_add($size_name = '', $options = [], $use_cdn = false){
    __singleton('LDC_WP_Cloudinary\Loader')->add($size_name, $options, $use_cdn);
}

/**
 * @return void
 */
function ldc_wp_coundinary_config($config = ''){
    __singleton('LDC_WP_Cloudinary\Loader')->add($config);
}
