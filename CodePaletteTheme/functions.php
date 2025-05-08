<?php

/* --------------------------------------------
/* // ヘッド内のメタデータとOGP、ファビコンなど
/* -------------------------------------------- */

function add_custom_meta_tags()
{
  echo '
<!-- SEO基本 -->
<title>CODE PALETTE | 多言語対応・コーディング代行のWeb制作サービス</title>
<meta name="description" content="CODE PALETTEは、多言語対応・コーディング代行を中心としたWeb制作サービスです。英語・タイ語・日本語のサイト制作や、文化を意識した伝わるWebサイト構築をサポート。小規模事業者様や個人事業主様にも寄り添ったご提案を行っています。">
<meta name="keywords" content="CODE PALETTE, コーディング代行, 多言語サイト制作, 英語サイト, タイ語サイト, Web制作, フリーランス, 小規模事業者, 個人事業主, バンコク, 日本語サイト制作">
<link rel="canonical" href="https://code-palette.net/">

<!-- OGP -->
<meta property="og:title" content="CODE PALETTE | 多言語対応・コーディング代行のWeb制作サービス">
<meta property="og:type" content="website">
<meta property="og:url" content="https://code-palette.net/">
<meta property="og:image" content="https://code-palette.net/assets/images/common/code-palette-ogp.jpg">
<meta property="og:site_name" content="CODE PALETTE コーディング代行サービス">
<meta property="og:description" content="CODE PALETTEは、多言語対応・コーディング代行を中心としたWeb制作サービスです。英語・タイ語・日本語のサイト制作や、文化を意識した伝わるWebサイト構築をサポート。小規模事業者様や個人事業主様にも寄り添ったご提案を行っています。">

<!-- Favicon -->
<link rel="shortcut icon" href="' . get_theme_file_uri() . '/assets/images/common/favicon.ico">
';
}
add_action('wp_head', 'add_custom_meta_tags');


/* --------------------------------------------
/* // Googleタグマネージャー
/* -------------------------------------------- */

function add_google_tag()
{
  echo "
<script async src='https://www.googletagmanager.com/gtag/js?id=G-HFY9ZKHDMJ'></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-HFY9ZKHDMJ');
</script>
";
}
add_action('wp_head', 'add_google_tag');


/* --------------------------------------------
/* // CSSとJSの読み込み
/* -------------------------------------------- */
function add_theme_scripts()
{
  // Google Fonts
  wp_enqueue_style('google-fonts-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700&display=swap', false);
  wp_enqueue_style('google-fonts-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap', false);
  wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', false);

  // CSS
  wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), '1.0.5');
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null);

  // JS
  wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery-cdn'), '1.0.5', true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


/* --------------------------------------------
/* // ログイン中でも管理バーを非表示にする
/* -------------------------------------------- */
add_filter('show_admin_bar', '__return_false');


/* --------------------------------------------
/* // アイキャッチ画像を追加するための記述
/* -------------------------------------------- */
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');
