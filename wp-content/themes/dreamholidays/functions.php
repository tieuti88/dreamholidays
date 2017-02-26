<?php
require_once('wp_bootstrap_navwalker.php');
if (!isset($content_width)) {
    $content_width = 1200;
}

if (!function_exists('dreamholidays_setup')) {
    function dreamholidays_setup() {
        load_theme_textdomain('dreamholidays', get_template_directory() . '/languages');

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(270, 170, true);

        register_nav_menus([
            'primary' => __('Primary Menu', 'dreamholidays'),
            'social' => __('Social Links Menu', 'dreamholidays')
        ]);

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ]);

        // Optimize, clean WP theme system
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'feed_links_extra', 3 );
        remove_action('wp_head', 'feed_links', 2 );
        remove_action('wp_head', 'wp_shortlink_wp_head');
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
        remove_action('template_redirect', 'rest_output_link_header', 11, 0);
        add_filter('the_generator', '__return_false');
        add_filter('show_admin_bar', '__return_false');

        // Remove emoji js
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
    }
}

function dreamholidays_remove_embed_js() {
    if(!is_admin()) {
        wp_deregister_script('wp-embed');
        // Remove the REST API endpoint.
        remove_action('rest_api_init', 'wp_oembed_register_route');

        // Turn off oEmbed auto discovery.
        add_filter('embed_oembed_discover', '__return_false');

        // Don't filter oEmbed results.
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

        // Remove oEmbed discovery links.
        remove_action('wp_head', 'wp_oembed_add_discovery_links');

        // Remove oEmbed-specific JavaScript from the front-end and back-end.
        remove_action('wp_head', 'wp_oembed_add_host_js');

        // Remove all embeds rewrite rules.
        add_filter('rewrite_rules_array', 'disable_embeds_rewrites');
    }
}

function dreamholidays_scripts() {
    wp_register_style('dreamholidays-boostrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('dreamholidays-template-style', get_template_directory_uri() . '/css/template-homepage.css');
    wp_enqueue_script('dreamholidays-template-script', get_template_directory_uri() . '/js/template-homepage.js',array('jquery'));
    wp_enqueue_script('dreamholidays-boostrap-script', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_style('dreamholidays-style', get_stylesheet_uri(), array('dreamholidays-boostrap-style'));
    wp_enqueue_style( 'dreamholidays-template-style' );


}

function dreamholidays_widgets_init() {
    register_sidebar([
        'name' => __('Widget Area', 'dreamholidays'),
        'id' => 'dreamholidays-sidebar',
        'description' => __('Add widgets here to appear in your sidebar.', 'dreamholidays'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ]);
}

add_action('after_setup_theme', 'dreamholidays_setup');
add_action('wp_enqueue_scripts', 'dreamholidays_scripts');
add_action('init', 'dreamholidays_remove_embed_js');
add_action('widgets_init', 'dreamholidays_widgets_init');
