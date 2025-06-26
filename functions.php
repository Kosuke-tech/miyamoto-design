<?php

/*----------------------------------------------------------------------------
    cssファイルとjsファイルをfunctions.phpで管理。
-----------------------------------------------------------------------------*/

function theme_preconnect_google_fonts() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'theme_preconnect_google_fonts', 10 );

function theme_files() {
  wp_enqueue_style('min.css', get_theme_file_uri('/css/style.min.css'));
//   wp_enqueue_style('style.css', get_theme_file_uri('/css/style.css'), ['min.css'], '6.7.2');
  wp_enqueue_script('jquery'); // WordPressに同梱されているjQueryを読み込む場合は引数なしでOK
  wp_enqueue_script('script.js', get_theme_file_uri('/js/script.js'), ['jquery'], null, true);
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wdth,wght@0,75..100,100..900;1,75..100,100..900&display=swap', [], null);
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/4b1ecdf8a5.js', array(), null, false );
}

add_action('wp_enqueue_scripts', 'theme_files');


/*----------------------------------------------------------------------------
    背景のsvg画像の読み込み
-----------------------------------------------------------------------------*/

function my_custom_styles() {
  $svg_code = '<svg viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">  <rect width="800" height="600" fill="#F9FAFB" />    <circle cx="50" cy="80" r="40" fill="#E0F7FA" opacity="0.3" />  <circle cx="180" cy="150" r="35" fill="#E3F2FD" opacity="0.4" />  <circle cx="80" cy="380" r="55" fill="#E8F5E9" opacity="0.5" />  <circle cx="750" cy="120" r="45" fill="#E0F7FA" opacity="0.3" />  <circle cx="650" cy="320" r="60" fill="#E3F2FD" opacity="0.2" />  <circle cx="720" cy="480" r="50" fill="#E8F5E9" opacity="0.3" />  <circle cx="250" cy="520" r="45" fill="#E0F7FA" opacity="0.4" />  <circle cx="550" cy="550" r="35" fill="#E3F2FD" opacity="0.3" />  <circle cx="400" cy="70" r="30" fill="#E8F5E9" opacity="0.3" />  <circle cx="450" cy="450" r="40" fill="#E0F7FA" opacity="0.2" />    <circle cx="120" cy="250" r="25" fill="#BAE6FD" opacity="0.2" />  <circle cx="320" cy="180" r="20" fill="#BFDBFE" opacity="0.2" />  <circle cx="220" cy="380" r="28" fill="#D1FAE5" opacity="0.3" />  <circle cx="380" cy="280" r="22" fill="#BAE6FD" opacity="0.25" />  <circle cx="620" cy="220" r="24" fill="#BFDBFE" opacity="0.2" />  <circle cx="520" cy="390" r="26" fill="#D1FAE5" opacity="0.3" />  <circle cx="130" cy="480" r="18" fill="#BAE6FD" opacity="0.25" />  <circle cx="490" cy="150" r="15" fill="#BFDBFE" opacity="0.2" />  <circle cx="680" cy="420" r="22" fill="#D1FAE5" opacity="0.3" />    <circle cx="280" cy="120" r="10" fill="#9BE1FB" opacity="0.2" />  <circle cx="350" cy="350" r="8" fill="#A5F3FC" opacity="0.3" />  <circle cx="150" cy="420" r="12" fill="#A7F3D0" opacity="0.25" />  <circle cx="540" cy="80" r="7" fill="#9BE1FB" opacity="0.3" />  <circle cx="610" cy="490" r="9" fill="#A5F3FC" opacity="0.2" />  <circle cx="420" cy="520" r="11" fill="#A7F3D0" opacity="0.3" />  <circle cx="80" cy="540" r="6" fill="#9BE1FB" opacity="0.25" />  <circle cx="380" cy="180" r="8" fill="#A5F3FC" opacity="0.2" />  <circle cx="300" cy="450" r="10" fill="#A7F3D0" opacity="0.3" />  <circle cx="700" cy="300" r="12" fill="#9BE1FB" opacity="0.25" />  <circle cx="580" cy="150" r="9" fill="#A5F3FC" opacity="0.3" />  <circle cx="200" cy="300" r="7" fill="#A7F3D0" opacity="0.2" />    <circle cx="350" cy="100" r="4" fill="#8BD8BD" opacity="0.2" />  <circle cx="100" cy="330" r="3" fill="#6CB4EE" opacity="0.25" />  <circle cx="250" cy="250" r="5" fill="#ADE5D9" opacity="0.2" />  <circle cx="550" cy="330" r="4" fill="#8BD8BD" opacity="0.3" />  <circle cx="650" cy="100" r="3" fill="#6CB4EE" opacity="0.2" />  <circle cx="400" cy="400" r="5" fill="#ADE5D9" opacity="0.25" />  <circle cx="720" cy="200" r="4" fill="#8BD8BD" opacity="0.2" />  <circle cx="180" cy="500" r="3" fill="#6CB4EE" opacity="0.3" />  <circle cx="480" cy="250" r="5" fill="#ADE5D9" opacity="0.2" />  <circle cx="300" cy="520" r="4" fill="#8BD8BD" opacity="0.3" />  <circle cx="500" cy="500" r="3" fill="#6CB4EE" opacity="0.2" />  <circle cx="650" cy="400" r="5" fill="#ADE5D9" opacity="0.25" />  <circle cx="50" cy="200" r="4" fill="#8BD8BD" opacity="0.3" />  <circle cx="420" cy="330" r="3" fill="#6CB4EE" opacity="0.2" />  <circle cx="230" cy="150" r="5" fill="#ADE5D9" opacity="0.25" /></svg>';

  // Base64エンコード
  $encoded_svg = base64_encode($svg_code);
  $data_uri = 'data:image/svg+xml;base64,' . $encoded_svg;

  wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom.css' );
  wp_add_inline_style( 'custom-styles', "body { background-image: url('" . $data_uri . "');}" );
}
add_action( 'wp_enqueue_scripts', 'my_custom_styles' );


/*----------------------------------------------------------------------------
    投稿編集画面で、アイキャッチ画像の設定を有効化する
-----------------------------------------------------------------------------*/

add_theme_support('post-thumbnails', ['post', 'notice', 'blog', 'work']);
// ※add_theme_supportは、テーマの機能を追加する関数。
// add_theme_supportが持っているオブジェクトのpost-thumbnailsというプロパティを引数に指定し、
// アクセスすることで、投稿画面にてサムネイルの設定を有効化することができる。
// 特定の投稿タイプに限定して機能を追加したい場合は、
// 第二引数に配列で、投稿タイプのslugを指定する。


/*----------------------------------------------------------------------------
    投稿編集画面使用する画像やサムネイルの制御
-----------------------------------------------------------------------------*/

// カスタム画像サイズの追加
function my_custom_image_sizes() {
    add_image_size( 'post-thumbnail1', 350, 9999, false );
    add_image_size( 'post-thumbnail2', 500, 9999, false ); // 幅500pxに収め、高さは比率維持して伸縮させる。
}
add_action( 'after_setup_theme', 'my_custom_image_sizes' );
// post-thumbnail1などの値をthe_post_thumbnailの引数に指定して使い回す。
// the_post_thumbnailは、自動的にHTMLとしてsrcsetを出力するので、2倍サイズの画像も作っておく。

function img_uncompressed() {
    return 100;
}
add_filter('jpeg_quality', 'img_uncompressed');
// リサイズされたjpeg画像の品質を100%にした。


// the_post_thumbnailで出力されるHTMLのwidthとheightを削除。

function remove_thumbnail_dimensions($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10);



/*----------------------------------------------------------------------------
    カスタム投稿タイプの作成（お知らせ）
-----------------------------------------------------------------------------*/

// カスタム投稿タイプの登録(お知らせ)

function register_custom_post_type_notice()
{
    $args = [
        'label' => 'お知らせ', //管理画面のサイドバーに表示するボタンの名前
        'labels' => [
            'singular_name' => 'お知らせ', //複数形の名前を指定する。日本語であれば、単数形の名前と同じでOK
            'add_new_item' => '新規お知らせを追加', //新規投稿画面の新規投稿のボタンの名前を引数の文字列に変更。
            'edit_item' => 'お知らせを編集', // 編集画面のタイトルを変更。(クラシックエディターにしか表示されない。)
        ],
        'public' => true, //カスタム投稿タイプを一般公開にするか。
        'show_in_rest' => true, //カスタム投稿タイプでブロックエディタを使う場合はtrueを指定する。
        'has_archive' => true, //アーカイブ(記事一覧)ページを持たせるかどうか。
        'rewrite' =>['slug' => 'notice'], // slugをデフォルトのものから、blogに変更。
        'delete_with_user' => false, //投稿したユーザー情報を削除した場合、そのユーザーが投稿した記事などのコンテンツも削除するかどうか。
        'exclude_from_search' => false, //検索から除外するかどうか。
        'hierarchical' => false, //階層化させるかどうか。(親子関係を持たせるか、つまりカテゴリー的な使い方をするか、タグ的な使い方をするか。)
        'query_var' => true, // プレビュー画面を使えるようにするには、trueを指定する。
        'menu_position' => 5, //管理画面のサイドバーに表示する位置。
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom_fields', //エディター画面で使いたい機能
        ],
    ];
    register_post_type('notice', $args);
}

add_action('init', 'register_custom_post_type_notice');


// カテゴリー型タクソノミーの登録

function tax_register_notice_category()
{
    $args = [
        'label' => 'カテゴリー',
        'labels' => [
            'singular_name' => 'カテゴリー',
            'edit_item' => 'カテゴリーを編集',
            'add_new_item' => '新規カテゴリーを追加',
        ],
        'hierarchical' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ];
    register_taxonomy('notice_category', 'notice', $args);
}

add_action('init', 'tax_register_notice_category');

// タグ型タクソノミーの登録

function tax_register_notice_tag() {
    $labels = [
        'name'                       => 'タグ',
        'singular_name'              => 'タグ',
        'search_items'               => 'タグを検索',
        'popular_items'              => 'よく使われるタグ',
        'all_items'                  => 'すべてのタグ',
        'edit_item'                  => 'タグを編集',
        'update_item'                => 'タグを更新',
        'add_new_item'               => '新規タグを追加',
        'new_item_name'              => '新しいタグ名',
        'separate_items_with_commas' => 'カンマで区切ってタグを追加',
        'add_or_remove_items'        => 'タグを追加または削除',
        'choose_from_most_used'      => 'よく使われているタグから選択',
        'menu_name'                  => 'タグ',
    ];

    $args = [
        'labels'            => $labels,
        'hierarchical'      => false,               // ← 非階層型に
        'public'            => true,
        'show_in_rest'      => true,                // Gutenberg & REST API 対応
        'show_tagcloud'     => true,                // タグクラウド表示
        'rewrite'           => ['slug' => 'notice_tag'], 
    ];

    register_taxonomy( 'notice_tag', 'notice', $args );
}
add_action( 'init', 'tax_register_notice_tag' );


// お知らせ一覧ページで10件表示にする。(archive-notice.phpで管理)

// function change_set_notice_post($query)
// {
//     if (is_admin() || !$query->is_main_query()) {
//         return;
//     }
//     if ($query->is_post_type_archive('notice')) {
//         $query->set('posts_per_page', '10'); //-1と入れることで全件表示になる。
//         return;
//     }
// }

// add_action('pre_get_posts', 'change_set_notice_post');



/*----------------------------------------------------------------------------
    カスタム投稿タイプの作成（ブログ）
-----------------------------------------------------------------------------*/

// カスタム投稿タイプの登録(ブログ)

function register_custom_post_type_blog()
{
    $args = [
        'label' => 'ブログ', //管理画面のサイドバーに表示するボタンの名前
        'labels' => [
            'singular_name' => 'ブログ', //複数形の名前を指定する。日本語であれば、単数形の名前と同じでOK
            'add_new_item' => '新規ブログを追加', //新規投稿画面の新規投稿のボタンの名前を引数の文字列に変更。
            'edit_item' => 'ブログを編集', // 編集画面のタイトルを変更。(クラシックエディターにしか表示されない。)
        ],
        'public' => true, //カスタム投稿タイプを一般公開にするか。
        'show_in_rest' => true, //カスタム投稿タイプでブロックエディタを使う場合はtrueを指定する。
        'has_archive' => true, //アーカイブ(記事一覧)ページを持たせるかどうか。
        'rewrite' =>['slug' => 'blog'], // slugをデフォルトのものから、blogに変更。
        'delete_with_user' => false, //投稿したユーザー情報を削除した場合、そのユーザーが投稿した記事などのコンテンツも削除するかどうか。
        'exclude_from_search' => false, //検索から除外するかどうか。
        'hierarchical' => false, //階層化させるかどうか。(親子関係を持たせるか、つまりカテゴリー的な使い方をするか、タグ的な使い方をするか。)
        'query_var' => true, // プレビュー画面を使えるようにするには、trueを指定する。
        'menu_position' => 5, //管理画面のサイドバーに表示する位置。
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'custom_fields', //エディター画面で使いたい機能
        ],
    ];
    register_post_type('blog', $args);
}

add_action('init', 'register_custom_post_type_blog');


// カテゴリー型タクソノミーの登録(ブログ_カテゴリー)

function tax_register_blog_category()
{
    $args = [
        'label' => 'カテゴリー',
        'labels' => [
            'singular_name' => 'カテゴリー',
            'edit_item' => 'カテゴリーを編集',
            'add_new_item' => '新規カテゴリーを追加',
        ],
        'hierarchical' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ];
    register_taxonomy('blog_category', 'blog', $args);
}

add_action('init', 'tax_register_blog_category');

// タグ型タクソノミーの登録(ブログ_タグ)

function tax_register_blog_tag() {
    $labels = [
        'name'                       => 'タグ',
        'singular_name'              => 'タグ',
        'search_items'               => 'タグを検索',
        'popular_items'              => 'よく使われるタグ',
        'all_items'                  => 'すべてのタグ',
        'edit_item'                  => 'タグを編集',
        'update_item'                => 'タグを更新',
        'add_new_item'               => '新規タグを追加',
        'new_item_name'              => '新しいタグ名',
        'separate_items_with_commas' => 'カンマで区切ってタグを追加',
        'add_or_remove_items'        => 'タグを追加または削除',
        'choose_from_most_used'      => 'よく使われているタグから選択',
        'menu_name'                  => 'タグ',
    ];

    $args = [
        'labels'            => $labels,
        'hierarchical'      => false,               // ← 非階層型に
        'public'            => true,
        'show_in_rest'      => true,                // Gutenberg & REST API 対応
        'show_tagcloud'     => true,                // タグクラウド表示
        'rewrite'           => ['slug' => 'blog_tag'], 
    ];

    register_taxonomy( 'blog_tag', 'blog', $args );
}
add_action( 'init', 'tax_register_blog_tag' );


// ブログを一覧ページで10件表示にする。(archive-blog.phpで管理)

// function change_set_blog_post($query)
// {
//     if (is_admin() || !$query->is_main_query()) {
//         return;
//     }
//     if ($query->is_post_type_archive('blog')) {
//         $query->set('posts_per_page', '5'); //-1と入れることで全件表示になる。
//         return;
//     }
// }

// add_action('pre_get_posts', 'change_set_blog_post');




/*----------------------------------------------------------------------------
    カスタム投稿タイプの作成（制作実績ページ）
-----------------------------------------------------------------------------*/

// カスタム投稿タイプの登録(制作実績)

function register_custom_post_type_work()
{
    $args = [
        'label' => '制作実績', //管理画面のサイドバーに表示するボタンの名前
        'labels' => [
            'singular_name' => '制作実績', //複数形の名前を指定する。日本語であれば、単数形の名前と同じでOK
            'add_new_item' => '新規制作実績を追加', //新規投稿画面の新規投稿のボタンの名前を引数の文字列に変更。
            'edit_item' => '制作実績を編集', // 編集画面のタイトルを変更。(クラシックエディターにしか表示されない。)
        ],
        'public' => true, //カスタム投稿タイプを一般公開にするか。
        'show_in_rest' => true, //カスタム投稿タイプでブロックエディタを使う場合はtrueを指定する。
        'has_archive' => true, //アーカイブ(記事一覧)ページを持たせるかどうか。
        'rewrite' =>['slug' => 'work'], // slugをデフォルトのものから、workに変更。
        'delete_with_user' => false, //投稿したユーザー情報を削除した場合、そのユーザーが投稿した記事などのコンテンツも削除するかどうか。
        'exclude_from_search' => false, //検索から除外するかどうか。
        'hierarchical' => false, //階層化させるかどうか。(親子関係を持たせるか、つまりカテゴリー的な使い方をするか、タグ的な使い方をするか。)
        'query_var' => true, // プレビュー画面を使えるようにするには、trueを指定する。
        'menu_position' => 5, //管理画面のサイドバーに表示する位置。
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'custom_fields', //エディター画面で使いたい機能
        ],
    ];
    register_post_type('work', $args);
}

add_action('init', 'register_custom_post_type_work');


// カテゴリー型タクソノミーの登録(業種)

function tax_register_work_category()
{
    $args = [
        'label' => '業種',
        'labels' => [
            'singular_name' => '業種',
            'edit_item' => '業種を編集',
            'add_new_item' => '新規業種を追加',
        ],
        'hierarchical' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ];
    register_taxonomy('work_category', 'work', $args);
}

add_action('init', 'tax_register_work_category');


// タグ型タクソノミーの登録（制作実績タグ）

function tax_register_work_tag() {
    $labels = [
        'name'                       => 'タグ',
        'singular_name'              => 'タグ',
        'search_items'               => 'タグを検索',
        'popular_items'              => 'よく使われるタグ',
        'all_items'                  => 'すべてのタグ',
        'edit_item'                  => 'タグを編集',
        'update_item'                => 'タグを更新',
        'add_new_item'               => '新規タグを追加',
        'new_item_name'              => '新しいタグ名',
        'separate_items_with_commas' => 'カンマで区切ってタグを追加',
        'add_or_remove_items'        => 'タグを追加または削除',
        'choose_from_most_used'      => 'よく使われているタグから選択',
        'menu_name'                  => 'タグ',
    ];

    $args = [
        'labels'            => $labels,
        'hierarchical'      => false,               // ← 非階層型に
        'public'            => true,
        'show_in_rest'      => true,                // Gutenberg & REST API 対応
        'show_tagcloud'     => true,                // タグクラウド表示
        'rewrite'           => ['slug' => 'work_tag'], 
    ];

    register_taxonomy( 'work_tag', ['work'], $args );
}
add_action( 'init', 'tax_register_work_tag' );


// 制作実績のページを一覧ページで10件表示にする。(archive-work.phpで管理)

// function change_set_work_post($query)
// {
//     if (is_admin() || !$query->is_main_query()) {
//         return;
//     }
//     if ($query->is_post_type_archive('work')) {
//         $query->set('posts_per_page', '10'); //-1と入れることで全件表示になる。
//         return;
//     }
// }

// add_action('pre_get_posts', 'change_set_work_post');

/*----------------------------------------------------------------------------
    Breadcrumb NavXT
-----------------------------------------------------------------------------*/

// bcn_displayの未定義エラーの解消
if (!function_exists('bcn_display')) {
    function bcn_display() {
        // 開発環境用のダミーコードなので、中身は記載しない。
    }
}


function remove_category_archive_from_work_single_breadcrumb($trail) {
    // 投稿タイプが 'work' の単一記事ページでのみ処理を実行
    if (is_singular('work') && !empty($trail->breadcrumbs)) {
        $new_breadcrumbs = [];
        foreach ($trail->breadcrumbs as $breadcrumb) {
            // パンくずのURLがカテゴリーアーカイブのURLと一致するかどうかを確認
            // ここでは、work_categoryというカスタムタクソノミーを想定しています。
            // 実際のタクソノミー名に合わせて変更してください。
            if (isset($breadcrumb->url) && strpos($breadcrumb->url, '/work_category/') !== false && strpos($breadcrumb->url, 'single-work') === false) {
                // カテゴリーアーカイブへのリンクであればスキップ（追加しない）
                continue;
            }
            $new_breadcrumbs[] = $breadcrumb;
        }
        $trail->breadcrumbs = $new_breadcrumbs;
    }
    return $trail;
}
add_filter('bcn_after_fill', 'remove_category_archive_from_work_single_breadcrumb');

