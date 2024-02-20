<?php
/*
Author: Luis del Cid
Author URI: https://luisdelcid.com
Description: Cloudinary programmable images as WordPress image sizes.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: LDC WP Cloudinary
Plugin URI: https://github.com/luisdelcid/ldc-wp-cloudinary
Requires at least: 5.6
Requires PHP: 5.6
Text Domain: ldc-wp-cloudinary
Version: 0.2.19
*/

// Make sure we don't expose any info if called directly.
defined('ABSPATH') or die('Hi there! I\'m just a plugin, not much I can do when called directly.');

add_action('plugins_loaded', function(){
    
    // Check for magic functions.
    if(!did_action('magic_loaded')){
        return;
    }
    
    // Check for updates.
    __build_update_checker('https://github.com/luisdelcid/ldc-wp-cloudinary', __FILE__, 'ldc-wp-cloudinary');
    
    // Load and initialize.
    require_once(plugin_dir_path(__FILE__) . 'src/php/loader.php');
    __singleton('LDC_WP_Cloudinary\Loader');
    
});
