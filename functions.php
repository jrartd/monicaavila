<?php add_theme_support ("post-thumbnails");
add_theme_support( 'title-tag' );
add_image_size( 'cover size', 900, 510 );
add_image_size( 'post-thumbnail', 800, 240 );
add_image_size( 'homepage-thumb', 360, 220 );
add_image_size( 'fullpage-thumb', 1200, 719 );
function wp_example_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');

function my_theme_scripts_function() {
  wp_enqueue_script( 'myscript', get_template_directory_uri() . '/bootstrap.min.js');
}
?>

