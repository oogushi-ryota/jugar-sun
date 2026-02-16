<?php
/*-------------------------------------------------
  基本設定
-------------------------------------------------*/
// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');

//自動補完リダイレクト機能を停止
add_filter( 'do_redirect_guess_404_permalink', '__return_false' );

// title-tag サポートを有効にする
function my_theme_support() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_theme_support' );

//スラッグの変更によるリダイレクト機能を停止
remove_action( 'template_redirect', 'wp_old_slug_redirect' );

// 404ページをトップにリダイレクト
add_action('template_redirect', function() {
	if (is_404()) {
		wp_redirect(home_url(), 301); // 301は恒久的リダイレクト
		exit;
	}
});

/*-------------------------------------------------
  セキュリティ対策
-------------------------------------------------*/
// ユーザー名の特定を防ぐ
function my_filter_rest_endpoints( $endpoints ) {
  if ( isset( $endpoints['/wp/v2/users'] ) ) {
    unset( $endpoints['/wp/v2/users'] );
  }
  if ( isset( $endpoints['/wp/v2/users/(?P<id>\d+)'] ) ) {
    unset( $endpoints['/wp/v2/users/(?P<id>\d+)'] );
  }
  return $endpoints;
}
add_filter( 'rest_endpoints', 'my_filter_rest_endpoints', 10, 1 );

// wp_head() で出力される <meta name="generator"> を削除
remove_action('wp_head', 'wp_generator');

/*-------------------------------------------------
  エディタ関連
-------------------------------------------------*/
// Gutenberg を無効にする
add_filter('use_block_editor_for_post', '__return_false', 10);

/*-------------------------------------------------
  表示カスタマイズ
-------------------------------------------------*/
// デフォルトの「投稿」を非表示
add_action('admin_menu', function() {
  remove_menu_page('edit.php'); // 投稿メニューを削除
});

// wp_head() で出力される style.css を解除
function dequeue_duplicate_style() {
  wp_dequeue_style('style');
  wp_deregister_style('style');
}
add_action('wp_enqueue_scripts', 'dequeue_duplicate_style', 20);

// 画像貼り付け時の自動挿入タグを削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
  $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
  $html = preg_replace( '/title=[\'"]([^\'"]+)[\'"]/i', '', $html );
  $html = preg_replace( '/<a href=".+">/', '', $html );
  $html = preg_replace( '/<\/a>/', '', $html );
  return $html;
}

// 画像をpタグで囲わない
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// 自動整形無効（固定ページ）
function disable_page_wpautop() {
  if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );

// 投稿記事のスラッグに英数以外が入っていたら処理
function my_create_urlslug( $override_slug, $slug, $post_ID, $post_status, $post_type ){
  if( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ){
    $override_slug = utf8_uri_encode( $post_type ). '-'. $post_ID;
  }
  return $override_slug;
}
add_filter( 'pre_wp_unique_post_slug', 'my_create_urlslug', 10, 5 );

/*-------------------------------------------------
  フォーム関連
-------------------------------------------------*/
// CF7で自動挿入されるp・brタグを削除
add_filter('wpcf7_autop_or_not', '__return_false');

// MW WP Formで自動挿入されるp・brタグを削除
function mvwpform_autop_filter()
{
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mvwpform_autop_filter();

// MW WP Form のショートコードに独自変数を追加
function my_mwform_custom_shortcode( $shortcode, $atts, $content, $form_key ) {
	if ( $shortcode === 'home_url' ) {
			return esc_url( home_url( '/' ) );
	}
	return $shortcode;
}
add_filter( 'mwform_shortcode_mw-wp-form-24', 'my_mwform_custom_shortcode', 10, 4 );

/*-------------------------------------------------
  カスタム投稿タイプ：ニュース
-------------------------------------------------*/
add_action('init', function() {
  register_post_type('news', [
    'labels' => [
      'name'               => 'ニュース',
      'singular_name'      => 'ニュース',
      'menu_name'          => 'ニュース',
      'name_admin_bar'     => 'ニュース',
      'add_new'            => '新規追加',
      'add_new_item'       => '新規ニュースを追加',
      'edit_item'          => 'ニュースを編集',
      'new_item'           => '新規ニュース',
      'view_item'          => 'ニュースを表示',
      'search_items'       => 'ニュースを検索',
      'not_found'          => 'ニュースが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にニュースはありません',
      'all_items'          => 'ニュース一覧',
    ],
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'rewrite' => ['slug' => 'news'],
    'supports' => ['title', 'editor', 'thumbnail'],
    'show_in_rest' => false, // Gutenbergを無効化（クラシックエディタで編集）
  ]);
});

// ニュース投稿のアーカイブページの最大表示件数
add_action('pre_get_posts', function($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('news')) {
    $query->set('posts_per_page', 9); // 1ページあたり9件表示
  }
});

/*-------------------------------------------------
  カスタム投稿タイプ：クリエイター
-------------------------------------------------*/
add_action('init', function() {
  register_post_type('creators', [
    'labels' => [
      'name'               => 'クリエイター',
      'singular_name'      => 'クリエイター',
      'menu_name'          => 'クリエイター',
      'name_admin_bar'     => 'クリエイター',
      'add_new'            => '新規追加',
      'add_new_item'       => '新規クリエイターを追加',
      'edit_item'          => 'クリエイターを編集',
      'new_item'           => '新規クリエイター',
      'view_item'          => 'クリエイターを表示',
      'search_items'       => 'クリエイターを検索',
      'not_found'          => 'クリエイターが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にクリエイターはありません',
      'all_items'          => 'クリエイター一覧',
    ],
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'rewrite' => ['slug' => 'creators'],
    'supports' => ['title', 'thumbnail'],
    'show_in_rest' => false, // Gutenbergを無効化（クラシックエディタで編集）
  ]);
});

// クリエイター投稿のアーカイブページの最大表示件数
add_action('pre_get_posts', function($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('creators')) {
    $query->set('posts_per_page', -1); // 1ページあたり全件表示
  }
});

/*-------------------------------------------------
  カスタム投稿タイプ：メンバー
-------------------------------------------------*/
add_action('init', function() {
  register_post_type('member', [
    'labels' => [
      'name'               => 'メンバー',
      'singular_name'      => 'メンバー',
      'menu_name'          => 'メンバー',
      'name_admin_bar'     => 'メンバー',
      'add_new'            => '新規追加',
      'add_new_item'       => '新規メンバーを追加',
      'edit_item'          => 'メンバーを編集',
      'new_item'           => '新規メンバー',
      'view_item'          => 'メンバーを表示',
      'search_items'       => 'メンバーを検索',
      'not_found'          => 'メンバーが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にメンバーはありません',
      'all_items'          => 'メンバー一覧',
    ],
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'rewrite' => ['slug' => 'member'],
    'supports' => ['title', 'thumbnail'],
    'show_in_rest' => false, // Gutenbergを無効化（クラシックエディタで編集）
  ]);
});

// メンバー投稿のアーカイブページの最大表示件数
add_action('pre_get_posts', function($query) {
  if (!is_admin() && $query->is_main_query() && is_post_type_archive('member')) {
    $query->set('posts_per_page', -1); // 1ページあたり全件表示
  }
});
?>