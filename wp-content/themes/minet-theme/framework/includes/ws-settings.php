<?php
// Remove Admin bar
function remove_admin_bar()
{
    return false;
}
add_theme_support('post-thumbnails');
add_image_size('small-featured', 360, 300, false);
add_image_size('thumbnail-avatar', 500, 500, false);
add_image_size('article-listing', 550, 300, true);

add_theme_support( 'menus' );

// Function to add preconnect links for Google Fonts
function add_google_fonts_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'add_google_fonts_preconnect', 2);

// // Add Actions
add_action('init', 'ws_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'ws_styles'); // Add Theme Stylesheet

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// // Add Filters
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

?>
