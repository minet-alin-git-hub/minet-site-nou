<?php
function child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_uri(), ['parent-style']);
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );

function minet_child_register_tehnologie() {
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
        'supports' => array('title','editor','thumbnail','excerpt'),
        'show_in_rest' => false
    );
    register_post_type('tehnologie', $args);
}
add_action('init', 'minet_child_register_tehnologie');
