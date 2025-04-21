<?php
/**
 * Plugin Name: Custom Testimonial Slider
 * Description: A testimonial carousel with 3 visible slides and a popped middle one.
 * Version: 1.0
 * Author: You, the Champ
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Register Testimonial CPT
function cts_register_testimonial_cpt() {
    register_post_type( 'testimonial', [
        'labels' => [
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ],
        'public' => true,
        'has_archive' => false,
        'show_in_rest' => true, // Required for block editor + Elementor
        'show_ui' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-testimonial',
    ]);
}
add_action( 'init', 'cts_register_testimonial_cpt' );

// 2. Allow Elementor editor for testimonial post type
function cts_add_elementor_support_for_testimonial( $cpt_support, $post_type ) {
    if ( 'testimonial' === $post_type ) {
        return true;
    }
    return $cpt_support;
}
add_filter( 'elementor/cpt_support', 'cts_add_elementor_support_for_testimonial', 10, 2 );

// 3. (Optional) Make sure Elementor setting allows CPTs
function cts_force_elementor_enable_on_cpt() {
    $cpts = get_option( 'elementor_cpt_support', [] );
    if ( !in_array( 'testimonial', $cpts ) ) {
        $cpts[] = 'testimonial';
        update_option( 'elementor_cpt_support', $cpts );
    }
}
add_action( 'init', 'cts_force_elementor_enable_on_cpt' );

// Enqueue Scripts
function cts_enqueue_scripts() {
    wp_enqueue_style( 'cts-style', plugins_url('css/style.css', __FILE__) );
    wp_enqueue_script( 'cts-slider', plugins_url('js/slider.js', __FILE__), ['jquery'], false, true );
    wp_enqueue_style( 'slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], false, true );
}
add_action( 'wp_enqueue_scripts', 'cts_enqueue_scripts' );

// Shortcode
function cts_testimonial_slider_shortcode() {
    $args = [
        'post_type' => 'testimonial',
        'posts_per_page' => -1
    ];
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()): ?>
        <div class="cts-slider">
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="cts-slide">
                    <div class="cts-content">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php endif;
    return ob_get_clean();
}
add_shortcode('testimonial_slider', 'cts_testimonial_slider_shortcode');
