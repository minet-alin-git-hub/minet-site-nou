<?php

// Update CSS within in Admin
function my_theme_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'my_theme_editor_styles' );

// Load HTML5 Blank styles
function ws_styles(){

    wp_register_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0', 'all');
    wp_enqueue_style('slick-css');

    wp_register_style('fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('fonts-montserrat');

    wp_register_style('fonts-bebas', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('fonts-bebas');

    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.0', 'all');
    wp_enqueue_style('general');

    wp_register_style('waio-landing-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0', 'all');
    wp_enqueue_style('waio-landing-theme');

    wp_register_style('overwrite-css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('overwrite-css');
}
// Load HTML5 Blank scripts (footer.php) * to include in header - remove the TRUE bool from wp_register_script
function ws_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('slick-js' ,'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'));
        wp_enqueue_script('slick-js');

    	  wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1', true); // Modernizr
        wp_enqueue_script('modernizr');

        wp_register_script('ws-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0', true); // Custom scripts
        wp_enqueue_script('ws-scripts');

        // Initialize Ajax-WP connection
        wp_localize_script( 'ws-scripts', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));


    }
}




?>
