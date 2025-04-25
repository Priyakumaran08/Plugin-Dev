<?php
/**
 * Plugin Name: Custom Portfolio Plugin
 * Plugin URI: https://priyakumaran.com
 * Description: A Custom Portfolio plugin.
 * Version: 1.0
 * Author: Priya Kumaran
 * Author URI: https://priyakumaran.com
 * License: GPL2
*/

// In your plugin file
function custom_portfolio() {
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio Item'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'custom_portfolio');

function portfolio_shortcode() {
    $args = array('post_type' => 'portfolio');
    $query = new WP_Query($args);
    $output = '<div class="portfolio-grid">';
    while ($query->have_posts()) {
        $query->the_post();
        $output .= '<div class="portfolio-item">';
        $output .= '<h3>' . get_the_title() . '</h3>';
        $output .= get_the_content();
        $output .= '</div>';
    }
    wp_reset_postdata();
    $output .= '</div>';
    return $output;
}
add_shortcode('portfolio', 'portfolio_shortcode');
