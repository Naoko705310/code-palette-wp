<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- ヘッダー -->
  <header class="header">
    <div class="header__inner">

      <!-- ヘッダーロゴ -->
      <h1 class="header__logo header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/header-logo.png" alt="ヘッダーロゴ" width="200" height="50">
        </a>
      </h1>
          <!-- SP 言語切り替え -->
          <div class="sp-nav__lang-switcher lang-switcher">
            <?php
            if (function_exists('pll_the_languages')) {
              pll_the_languages(array(
                'show_names' => true,
                'show_flags' => true,
                'hide_if_no_translation' => true,
              ));
            }
            ?>
          </div>
      <!-- ハンバーガーメニュー -->
      <button class="header__hamburger hamburger js-hamburger" aria-label="メニューを開く">
        <span class="hamburger__bar hamburger__bar--top"></span>
        <span class="hamburger__bar hamburger__bar--middle"></span>
        <span class="hamburger__bar hamburger__bar--bottom"></span>
      </button>

      <!-- SPナビ -->
      <nav class="header__sp-nav sp-nav js-drawer-menu">
        <div class="sp-nav__item-wrapper">
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="#works">works <span>制作実績</span></a></li>
            <li class="sp-nav__item"><a href="#concept">concept <span>理念</span></a></li>
            <li class="sp-nav__item"><a href="#service">service <span>サービス</span></a></li>
            <li class="sp-nav__item"><a href="#about">about <span>私について</span></a></li>
            <li class="sp-nav__item"><a href="#contact">contact <span>お問い合わせ</span></a></li>
          </ul>
        </div>
      </nav>

      <!-- PCナビ -->
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="#works">works <span>制作実績</span></a></li>
          <li class="pc-nav__item"><a href="#concept">concept <span>理念</span></a></li>
          <li class="pc-nav__item"><a href="#service">service <span>サービス</span></a></li>
          <li class="pc-nav__item"><a href="#about">about <span>私について</span></a></li>
          <li class="pc-nav__item"><a href="#contact">contact <span>お問い合わせ</span></a></li>
        </ul>
      </nav>
      <!-- 言語切り替えメニュー -->
      <div class="header__lang-switcher lang-switcher">
        <?php
        if (function_exists('pll_the_languages')) {
          pll_the_languages(array(
            'show_names' => false, // テキストを非表示（trueで "日本語" などの表示に）
            'show_flags' => true,  // 国旗を表示
            'hide_if_no_translation' => true,
            'display_names_as' => 'slug', // slug, name, or translated
            'raw' => 0,
          ));
        }
        ?>
      </div>

    </div>
  </header>