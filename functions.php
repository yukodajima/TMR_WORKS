<?php
function my_enqueue_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_scripts', get_template_directory_uri(). '/assets/js/index.js', array());
  wp_enqueue_style('my_styles', get_template_directory_uri(). '/assets/css/style.css', array());
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');
?>
