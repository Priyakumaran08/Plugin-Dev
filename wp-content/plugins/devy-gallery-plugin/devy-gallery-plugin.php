<?php
/**
 * Plugin Name: Devy Gallery Plugin
 * Plugin URI:  https://devymuse.com/devy-galler-plugin
 * Author:      Devy Muse
 * Author URI:  Htps://devymuse.com
 * Description: This is a Gallery plugin developed by Devy Muse.
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: devy-galler-plugin
*/

//check if file is access directly
if(!defined('WPINC')){
    exit("Can't access this file directly");
}

//define plugin constants
define("DEVY_GALLERY_PLUGIN_VERSION", time());

//plugin file
define("DEVY_GALLERY_PLUGIN_FILE", __FILE__);

//plugin directory
define("DEVY_GALLERY_PLUGIN_DIR", dirname(DEVY_GALLERY_PLUGIN_FILE));

//plugin url
define("DEVY_GALLERY_PLUGIN_URL", plugins_url('', DEVY_GALLERY_PLUGIN_FILE));

//check if class exists
if(!class_exists('Devy_Gallery_Plugin')){
    //include the class file
    include_once DEVY_GALLERY_PLUGIN_DIR _ 'includes/class-devy-gallery-plugin.php';
}