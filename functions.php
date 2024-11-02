<?php

// アイキャッチ画像設定
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


// 投稿アーカイブの有効化(アーカイブページが1つの場合)
// function post_has_archive( $args, $post_type ) {
// 	if ( 'post' == $post_type ) {
// 		$args['rewrite'] = true;
// 		$args['has_archive'] = 'posts'; // 任意のURL
// 	}
// 	return $args;
// }
// add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// 管理画面から投稿を非表示にする
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');


// カスタム投稿タイプの追加
function custum_post_type() {

  // 作品
  register_post_type(
    'works_post',
    array(
      'labels' =>
      array(
        'name' => __('作品'),
        'singular_name' => __('works_post')
      ),
      'public' => true,
      'menu_position' => 4,
      'has_archive' => true,
    )
  );

  // ブログ
  // register_post_type(
  //   'blog_post',
  //   array(
  //     'labels' => array(
  //       'name' => __('ブログ'),
  //       'singular_name' => __('blog_post')
  //     ),
  //     'public' => true,
  //     'menu_position' => 5,
  //     'has_archive' => true,
  //   )
  // );
}
add_action('init', 'custum_post_type');

// カスタムタクソノミーの追加
function create_category_taxonomy() {
  
  // 作品用カテゴリー
  $args = array(
    'label' => 'カテゴリー',
    'public' => true,
    'hierarchical' => true
  );
  register_taxonomy('works_cat', 'works_post', $args);

  // 作品用タグ
  $args = array(
    'label' => 'タグ',
    'public' => true,
    'hierarchical' => true
  );
  register_taxonomy('works_tag', 'works_post', $args);
}
add_action('init', 'create_category_taxonomy');