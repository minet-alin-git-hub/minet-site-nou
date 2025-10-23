<?php
function dev($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function devd($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die('##DEBUG##');
}

function debug($value){
  if($_SERVER['REMOTE_ADDR'] == '188.27.87.217'){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die('##DEBUG##');
  }
}


/* Declare an option page for the theme */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Theme options');
}


/* upload svg in admin */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

/* Disable Gutenberg */
add_filter("use_block_editor_for_post", "__return_false");

/* Disable Gutenberg for widgets. */
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );

/* Add custom colors to wysiwyg */
function my_mce4_options($init) {
    $custom_colours = '
        "248b3c", "Green",
        "e50017", "Red",
        "252324", "Dark Grey",
        "0d0d0d", "Black",
    ';
    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colours.']';
    $init['textcolor_rows'] = 1;
    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

?>
