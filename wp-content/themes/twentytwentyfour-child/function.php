<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('twentyfour-child-style', get_stylesheet_uri());
});

register_nav_menus(array(
    'custom-menu' => __('Custom Navigation')
));
