<?php

/**
 * Arcline Studio — functions.php
 * Theme setup, enqueues, menus, CPT, sidebars
 */

// ============================================
// THEME SETUP
// ============================================

function arcline_setup()
{

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
    ));

    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer' => 'Footer Navigation',
    ));
}

add_action('after_setup_theme', 'arcline_setup'); //hooks

// ============================================
// ENQUEUE STYLES & SCRIPTS
// ============================================
function arcline_enqueue_assets()
{

    // Google Fonts
    wp_enqueue_style(
        'arcline-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap',
        array(),
        null
    );

    // Main theme stylesheet (style.css)
    wp_enqueue_style(
        'arcline-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array('arcline-fonts'),
        '1.0.0'
    );

        wp_enqueue_script(
        'arcline-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true    // ← true = loads in footer (important!)
    );
}
add_action('wp_enqueue_scripts', 'arcline_enqueue_assets'); //hooks

// ============================================
// CUSTOM POST TYPE — SERVICES
// ============================================
function arcline_register_services()
{

    $labels = array(
        'name'          => 'Services',
        'singular_name' => 'Service',
        'add_new_item'  => 'Add New Service',
        'edit_item'     => 'Edit Service',
        'all_items'     => 'All Services',
        'not_found'     => 'No services found.',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-star-filled',
        'menu_position' => 5,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'rewrite'       => array('slug' => 'services'),
        'show_in_rest'  => true,
    );

    register_post_type('services', $args);
}
add_action('init', 'arcline_register_services');

// ============================================
// REGISTER SIDEBAR / WIDGET AREA
// ============================================
function arcline_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets here appear on blog posts.',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'Footer Widgets',
        'id'            => 'footer-widgets',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="footer-nav-heading">',
        'after_title'   => '</p>',
    ));
}
add_action('widgets_init', 'arcline_widgets_init');

// ============================================
// PERFORMANCE OPTIMIZATIONS
// ============================================

/**
 * Defer non-critical JavaScript to prevent render-blocking
 */
function arcline_defer_scripts($tag, $handle, $src)
{
    // Do not defer in admin panel
    if (is_admin()) {
        return $tag;
    }

    // Defer all scripts except jQuery (for safety and plugin compatibility)
    if (strpos($handle, 'jquery') === false) {
        return str_replace(' src', ' defer src', $tag);
    }

    return $tag;
}
add_filter('script_loader_tag', 'arcline_defer_scripts', 10, 3);

/**
 * Clean up header scripts and styles (Remove WP core bloat)
 */
function arcline_cleanup_head()
{
    remove_action('wp_head', 'rsd_link');                  // Really Simple Discovery link
    remove_action('wp_head', 'wlwmanifest_link');          // Windows Live Writer manifest
    remove_action('wp_head', 'wp_generator');              // Remove WP version (also a security benefit)
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Links to adjacent posts
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Shortlinks
    remove_action('wp_head', 'print_emoji_detection_script', 7); // Emojis
    remove_action('wp_print_styles', 'print_emoji_styles');
}
add_action('init', 'arcline_cleanup_head');

/**
 * Dequeue Gutenberg Block Library CSS since we use custom raw styling
 */
function arcline_dequeue_block_styles()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // WooCommerce block styles if present
}
add_action('wp_enqueue_scripts', 'arcline_dequeue_block_styles', 100);

