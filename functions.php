<?php
function cpt_register_shops()
{
  $labels = [
    "singular_name" => "shop",
    "edit_item" => 'shop',
  ];
  $args = [
    "label" => "Shop",
    "labels" => $labels,
    "description" => "",
    'public' => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "deliete_widh_user" => false,
    "map_meta_cap" => true,
    "query_var" => true,
    'menu_position' => 5,
    "suports" => ["title", "editer", "thumbnail"],
  ];
  register_post_type("shop", $args);
}
add_action("init", "cpt_register_shops");

function cpt_register_dep()
{
  $labels = [
    "single_name" => "dep",
  ];
  $args = [
    "label" => "カテゴリー",
    "labels" => $labels,
    "publicly_queryable" => true,
    "show_in_menu" => true,
    "query_var" => true,
    "rewrite" => ["slag" => "dep", "with_front" => true,],
    "show_admin_column" => false,
    "show_in_rest" => false,
    "rest_base" => "dep",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  ];
  register_taxonomy("dep", ["shop"], $args);
};


function my_enqueue_scripts()
{
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_scripts', get_template_directory_uri(). '/assets/js/index.js', array());
  wp_enqueue_style('my_styles', get_template_directory_uri(). '/assets/css/style.css', array());
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');
add_theme_support('post-thumbnails');