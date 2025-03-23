<?php
/**
 * Plugin Name: My first Plugin
 * Plugin URI: https://example.com
 * Description: A first custom WordPress plugin.
 * Version: 1.0
 * Author: Devy Muse
 * Author URI: https://devymuse.com
 * License: GPL2
*/

function my_first_plugin_footer_message() {
    echo '<p style="text-align: center; color: #777;">Powered by My first Plugin of Devy Muse</p>';
}
add_action('wp_footer', 'my_first_plugin_footer_message');
