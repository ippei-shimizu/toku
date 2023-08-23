<?php
function my_theme_styles_and_scripts() {
  if ( ! is_admin() ) {
    $version = filemtime(get_template_directory() . '/css/style.css');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/css/style.css', array(), $version);

    $version = filemtime(get_template_directory() . '/js/common.js');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/common.js', array(), $version, true);

    if (is_front_page()) {
      $version = filemtime(get_template_directory() . '/js/top.js');
      wp_enqueue_script('top-script', get_template_directory_uri() . '/js/top.js', array(), $version, true);
    }

    if (is_page() || is_archive() || is_tax()) {
      $version = filemtime(get_template_directory() . '/js/page.js');
      wp_enqueue_script('page-script', get_template_directory_uri() . '/js/page.js', array(), $version, true);
    }  

    if (is_singular('portfolio')) {
      $version = filemtime(get_template_directory() . '/js/portfolio.js');
      wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/js/portfolio.js', array(), $version, true);
    }

    if (is_page('flow')) {
      $version = filemtime(get_template_directory() . '/js/flow.js');
      wp_enqueue_script('flow-script', get_template_directory_uri() . '/js/flow.js', array(), $version, true);
    }
  }
}

add_action('wp_enqueue_scripts', 'my_theme_styles_and_scripts');

function my_admin_theme_style() {
  wp_enqueue_style('my-admin-theme', get_template_directory_uri() . '/admin-style.css');
}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');

//アイキャッチ画像を有効化//
add_theme_support('post-thumbnails');

//URLスラッグの自動生成
function auto_post_slug($slug, $post_ID, $post_status, $post_type)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

function custom_posts_per_page($query) {
  if (!is_admin() && $query->is_main_query()) { // 管理画面でない & メインクエリのときに実行
      if (is_post_type_archive('topix')) {
          $query->set('posts_per_page', 12); // 投稿タイプが 'topix' のアーカイブページのとき表示件数を12に設定
      }
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');
