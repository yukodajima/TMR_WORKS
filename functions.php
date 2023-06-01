<?php


//店舗詳細のカスタム投稿設定
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
    "supports" => ["title", "editer", "thumbnail", 'taxonomies'],
  ];
  register_post_type("shop", [
    "labels" => [
      "name" => "店舗",
    ],
    "public" => true,
    "has_archive" => true,
    "hierarchical" => false,
    "menu_position" => 5,
    "menu_icon" => "",
    'supports' => array('title','editor','thumbnail', 'taxonomies')
  ]);
  register_taxonomy("shop_category", "shop", [
    "labels" => [
      "name" => "都道府県別",
    ],
    "hierarchical" => true,
    "show_in_rest" => true,
  ]);
}
add_action("init", "cpt_register_shops");
// function custom_post_type_tags() {
//   $args = array(
//       'hierarchical' => false,
//       'labels' => array(
//           'name' => 'タグ',
//           'singular_name' => 'タグ',
//       ),
//       'show_ui' => true,
//       'show_admin_column' => true,
//       'query_var' => true,
//       'rewrite' => array( 'slug' => 'tag' ),
//   );
//   register_taxonomy( 'custom_tags', array( 'cpt_register_shops', 'init_func' ), $args );
// }
// add_action( 'init', 'custom_post_type_tags', 0 );

//「お知らせ」のカスタム投稿タイプの設定
function init_func() {
  // add_theme_support("title-tag");
  // add_theme_support("post-thumbnails");

  register_post_type("news", [
    "labels" => [
      "name" => "お知らせ"
    ],
    "public" => true, //メニューから使えるようにする
    "has_archive" => true,
    "hierarchical" => false,
    "menu_position" => 5,
    "menu_icon" => "",
    'supports' => array('title','editor','thumbnail', 'taxonomies'),
    'taxonomies' => array( 'custom_tags' ),
  ]);
}
add_action("init", "init_func");
// function custom_post_type_tags() {
//   $args = array(
//       'hierarchical' => false,
//       'labels' => array(
//           'name' => 'タグ',
//           'singular_name' => 'タグ',
//       ),
//       'show_ui' => true,
//       'show_admin_column' => true,
//       'query_var' => true,
//       'rewrite' => array( 'slug' => 'tag' ),
//   );
//   register_taxonomy( 'custom_tags', array( 'init_func' ), $args );
// }
// add_action( 'init', 'custom_post_type_tags', 0 );


//ブログ投稿のカスタム投稿設定
function cpt_register_blog() {
  // add_theme_support('title-tag');
  // add_theme_support('post-thumbnails');

  register_post_type('blog', [
    'labels' => [
      'name' => 'ブログ投稿'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => '',
    'supports' => array('title','editor','thumbnail')
  ]);
}
add_action('init', 'cpt_register_blog');

//お客様の声のカスタム投稿
function cpt_register_revue() {
  register_post_type('revue', [
    'labels' => [
      'name' => 'お客様の声'
    ],
    'public' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' =>'',
    'supports' => array('title', 'editor', 'thumbnail')
  ]);
}
add_action('init', 'cpt_register_revue');

//お知らせと店舗詳細にタグを追加
function add_tags_to_custom_post_types() {
  $args = array(
      'hierarchical' => false,
      'labels' => array(
          'name' => 'タグ',
          'singular_name' => 'タグ',
      ),
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'tag' ),
  );
  register_taxonomy( 'custom_tags', array( 'shop', 'news' ), $args );
  register_taxonomy_for_object_type( 'custom_tags', 'cpt_register_shops' );
  register_taxonomy_for_object_type( 'custom_tags', 'init_func' );
}
add_action( 'init', 'add_tags_to_custom_post_types' );

function my_enqueue_scripts()
{
  wp_enqueue_script('jquery');
  wp_enqueue_script('my_scripts', get_template_directory_uri(). '/assets/js/index.js', array());
  wp_enqueue_style('my_styles', get_template_directory_uri(). '/assets/css/style.css', array());
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');
add_theme_support('post-thumbnails');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
};

function taxonomy_orderby_description( $orderby, $args ) {

  if ( $args['orderby'] == 'description' ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );
?>