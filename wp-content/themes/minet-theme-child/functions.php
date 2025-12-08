<?php
function child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    wp_enqueue_style('child-custom', get_stylesheet_directory_uri() . '/custom.css', array('parent-style', 'child-style'));
    wp_enqueue_style('minet-footer', get_stylesheet_directory_uri() . '/css/footer.css', array('parent-style', 'child-style', 'child-custom'));
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 20);

function minet_child_register_tehnologie()
{
    $labels = array(
        'name' => 'Tehnologii',
        'singular_name' => 'Tehnologie',
        'add_new_item' => 'Add New Tehnologie',
        'edit_item' => 'Edit Tehnologie',
        'all_items' => 'All Tehnologii'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => false
    );
    register_post_type('tehnologie', $args);
}
add_action('init', 'minet_child_register_tehnologie');

function minet_enqueue_scroll_to_top()
{
    if (is_front_page()) {
        wp_enqueue_script('minet-scroll-top', get_stylesheet_directory_uri() . '/js/scroll-top.js', array(), null, true);
        wp_enqueue_style('minet-scroll-top-style', get_stylesheet_directory_uri() . '/css/scroll-top.css');
    }
}
add_action('wp_enqueue_scripts', 'minet_enqueue_scroll_to_top');

function minet_child_enqueue_tabs_assets()
{
    wp_enqueue_style('minet-tabs-css', get_stylesheet_directory_uri() . '/css/tabs.css', array(), null);
    wp_enqueue_script('minet-tabs-js', get_stylesheet_directory_uri() . '/js/tabs.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'minet_child_enqueue_tabs_assets');

// Enqueue mobile menu JS
function minet_child_mobile_menu_js()
{
    wp_enqueue_script(
        'minet-mobile-menu',
        get_stylesheet_directory_uri() . '/js/mobile-menu.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'minet_child_mobile_menu_js');

// Enqueue mobile-bar JS
function minet_child_mobile_bar_js()
{
    wp_enqueue_script(
        'minet-mobile-bar',
        get_stylesheet_directory_uri() . '/assets/js/mobile-bar.js',
        array('jquery'),
        filemtime(get_stylesheet_directory() . '/assets/js/mobile-bar.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'minet_child_mobile_bar_js');

// Add class to parent menu items for mobile toggle
function minet_add_mobile_toggle_class($items)
{
    foreach ($items as $item) {
        if (in_array('menu-item-has-children', $item->classes)) {
            $item->classes[] = 'mobile-toggle';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'minet_add_mobile_toggle_class');
