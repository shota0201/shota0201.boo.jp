<?php

/*********************************
*  カスタムヘッダー
**********************************/
$custom_header_defaults = array(
    'default-image' => get_template_directory_uri().'/img/frontpage_slide.jpg',
    'width'         => false,
    'height'        => false,
    'header-text'   => false, //画像にテキストをかぶせるか
);
add_theme_support( 'custom-header', $custom_header_defaults );

//ヘッダー画像のIDを取得
function custom_header_get_attachment_id_by_url( $url ) {
    $parse_url  = explode( parse_url( WP_CONTENT_URL, PHP_URL_PATH ), $url );
    $this_host = str_ireplace( 'www.', '', parse_url( home_url(), PHP_URL_HOST ) );
    $file_host = str_ireplace( 'www.', '', parse_url( $url, PHP_URL_HOST ) );
    if ( ! isset( $parse_url[1] ) || empty( $parse_url[1] ) || ( $this_host != $file_host ) ) {
    return;
    }
    global $wpdb;
    $attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parse_url[1] ) );
    return $attachment[0];
}

/*********************************
*  カスタムメニュー
**********************************/
register_nav_menu('mainmenu', 'メインメニュー');

//aタグのにクラスを付与
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
    function add_class_on_link($item_output, $item){
    return preg_replace('/(<a.*?)/', '$1' . " class='gnav-link link-underline link-gold'", $item_output);
}

//liタグのクラスを削除
// クラスを削除して、表示中メニューに 'current' クラスを付与する
/*add_filter( 'nav_menu_css_class', 'remove_to_currentClass', 10, 2 );
function remove_to_currentClass( $classes, $item ) {
    $classes = array();
    if( $item -> current == true ) {
        $classes[] = 'current';
    }
    return $classes;
}
*/
// ID を削除する
add_filter('nav_menu_item_id', 'removeId', 10);
function removeId( $id ){
    return $id = array();
}

/*********************************
*  投稿
**********************************/
//アイキャッチ追加
add_theme_support( 'post-thumbnails' );

/*********************************
*  自動生成されるタグを制御する方法
**********************************/
remove_filter('the_content', 'wpautop');// 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop');// 抜粋の自動整形を無効にする

/*********************************
*  カスタム投稿タイプ
**********************************/
/*add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'NEWS', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'news',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => false, // アーカイブ機能ON/OFF
        'menu_position' => 5,     // 管理画面上での配置場所
        'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    ]);
}*/

/*********************************
*  カスタムロゴ
**********************************/
add_theme_support( 'custom-logo', array(
'height' => 150,
'width' => 150,
'flex-height' => true,
) );

/*********************************
*  Contact Form 7のCSS と JavaScript の出力を制御する
**********************************/
function my_contact_enqueue_scripts(){
wp_deregister_script('contact-form-7');
wp_deregister_style('contact-form-7');
    if (is_page('contact')) {
    if (function_exists( 'wpcf7_enqueue_scripts')) {
    wpcf7_enqueue_scripts();
    }
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
    wpcf7_enqueue_styles();
    }
    }
}

?>