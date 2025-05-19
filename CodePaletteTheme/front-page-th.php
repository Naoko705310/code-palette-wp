<?php
/* Template Name: Front Page Thai */

get_header();
?>
<main>
  <!-- ファーストビュー -->
  <section id="top-fv" class="top-fv">
    <div class="top-fv__inner inner">
      <div class="top-fv__main-wrapper">
        <!-- ヘッディング -->
        <div class="top-fv__heading">
          <h2 class="top-fv__main-copy">
            support
            <span class="top-fv__main-copy-text">your</span>
            <span class="top-fv__main-copy-text top-fv__main-copy-text--pink">web</span>
            <span class="top-fv__main-copy-text">presence</span>
          </h2>

          <h3 class="top-fv__sub-copy">
            伝わるWebサイトで、あなたの想いを世界へ。<br>
            コーディングも多言語も、まるごとお任せください。
          </h3>
          <!-- Contact ボタン（PC表示用） -->
          <div class="top-fv__btn top-fv__btn--left u-desktop">
            <a href="#contact" class="button">
              <span>Contact</span>
            </a>
          </div>
        </div>
        <!-- スワイパー -->
        <div class="swiper top-fv__swiper js-top-fv-swiper">
          <div class="swiper-wrapper">
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/world.svg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/world.svg" alt="地球儀と女性のイラスト" width="1200" height="800">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pair-programming.svg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pair-programming.svg" alt="二人でPCの前に座っている画像" width="1200" height="800">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.svg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.svg" alt="女性がコーディングをしている画像" width="1200" height="800">
            </picture>
          </div>
        </div>

      </div> <!-- /.top-fv__main-wrapper -->
    </div> <!-- /.top-fv__inner -->
  </section>
  <!-- Concept 理念 -->
  <section id="concept" class="concept top-concept top-layout">
    <div class="concept__inner inner">
      <h2 class="service__section-title section-title">
        <span class="section-title__en">concept</span>
        <span class="section-title__jp">理念</span>
      </h2>

      <div class="concept__intro">
        <p>Webサイトの多言語対応は、外国人のお客様だけのためのものではありません。</p>
        <p>言葉だけでなく<span class="concept__highlight">「誰にでもわかりやすい構成や案内」</span>を見直すきっかけにもなり、<br class="u-desktop">
          その結果、日本人のお客様にとっても親切で使いやすいサイトづくりにつながります。</p>
      </div>
      <!-- コンセプトのカード -->
      <ul class="concept__points">
        <li>
          外国のお客様にも<br>安心して利用いただける
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/globe.svg" alt="アイコン" width="100" height="100">
          </div>
        </li>
        <li>
          スタッフの不安を減らし、<br>現場をスムーズに
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/staff.svg" alt="アイコン" width="100" height="100">
          </div>
        </li>
        <li>
          多言語化をきっかけに<br>日本語サイトもより親切に
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/website.svg" alt="アイコン" width="100" height="100">
          </div>
        </li>
      </ul>
      <p class="concept__summary">
        単なる翻訳ではなく、文化や使いやすさを意識した
        「伝わるサイトづくり」をサポートします。
      </p>
    </div>
  </section>
  <!-- Works 制作実績 -->
  <section id="works" class="works top-works top-layout">
    <div class="works__inner inner">

      <!-- セクションタイトル -->
      <h2 class="works__section-title section-title">
        <span class="section-title__en">works</span>
        <span class="section-title__jp">制作実績</span>
      </h2>
      <div class="works__heading">
        <p>
          制作実績の一例です。クリックすると詳細が開きます。<br>
          何かご質問がございましたら、いつでもお問い合わせフォームよりご連絡ください。
        </p>
      </div>
      <p class="works__heading--remark">※現在制作中の案件と、許可をいただいていない案件については掲載しておりません。</p>

      <!-- 制作実績一覧 -->
      <div class="works__contents-wrapper">
        <?php
        $args = array(
          'post_type' => 'works',
          'posts_per_page' => -1
        );
        $works_query = new WP_Query($args);
        if ($works_query->have_posts()):
        ?>
          <ul class="works__items works-cards">
            <?php while ($works_query->have_posts()): $works_query->the_post(); ?>
              <?php $modal_id = 'modal-' . get_the_ID(); ?>
              <li class="works__item">
                <a href="#" class="works-card js-works-modal-open" data-modal-id="<?php echo $modal_id; ?>">
                  <figure class="works-card__image-wrapper">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo '<img src="' . get_theme_file_uri() . '/assets/images/common/no-image.png" alt="No Image">';
                    }
                    ?>
                  </figure>
                  <div class="works-card__body">
                    <h3 class="works-card__heading"><?php the_title(); ?></h3>
                    <p class="works-card__sub-heading"><?php echo get_the_excerpt(); ?></p>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>

      <!-- モーダル本体 -->
      <?php
      $args = array(
        'post_type' => 'works',
        'posts_per_page' => -1
      );
      $works_query_modal = new WP_Query($args);
      if ($works_query_modal->have_posts()):
        while ($works_query_modal->have_posts()): $works_query_modal->the_post();
          $modal_id = 'modal-' . get_the_ID();
      ?>
          <div class="works__modal works-modal js-works-modal" data-modal-id="<?php echo $modal_id; ?>">
            <div class="works-modal__inner">
              <button class="works-modal__close-button js-works-modal__close-button" aria-label="<?php the_title(); ?>のモーダルを閉じる">
                <span class="works-modal__close01"></span>
                <span class="works-modal__close02"></span>
              </button>
              <div class="works-modal__container">
                <h2 class="works-modal__heading">
                  <span class="works-modal__heading-en">Works</span>
                  <span class="works-modal__heading-jp">制作実績詳細</span>
                </h2>
                <div class="works-modal__card">
                  <figure class="works-modal__image-wrapper">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      echo '<img src="' . get_theme_file_uri() . '/assets/images/common/no-image.png" alt="No Image">';
                    }
                    ?>
                  </figure>
                  <h3><?php the_title(); ?></h3>
                  <?php if (get_field('url')): ?>
                    <a href="<?php the_field('url'); ?>" target="_blank" rel="noopener noreferrer" class="works-modal__client-url">
                      URL: <?php the_field('url'); ?>
                    </a>
                  <?php endif; ?>
                  <div class="works-modal__text"><?php the_content(); ?></div>
                </div>

                <!-- 詳細項目 -->
                <div class="works-modal__details">
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">クライアント</dt>
                    <dd class="works-modal__text"><?php the_field('client'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">制作時間</dt>
                    <dd class="works-modal__text"><?php the_field('time'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">使用言語</dt>
                    <dd class="works-modal__text"><?php the_field('language'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">担当範囲</dt>
                    <dd class="works-modal__text"><?php the_field('scope'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">制作背景</dt>
                    <dd class="works-modal__text"><?php the_field('background'); ?></dd>
                  </dl>
                </div>

                <!-- 実績一覧へ戻る -->
                <div class="works-modal__button-to-list">
                  <a href="#works" class="button button--to-works-list"><span>実績一覧</span></a>
                </div>
              </div>
            </div>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
  </section>

  <!-- Service サービス -->
  <section id="service" class="service top-service top-layout">
    <div class="service__inner inner">

      <h2 class="service__section-title section-title">
        <span class="section-title__en">service</span>
        <span class="section-title__jp">サービス</span>
      </h2>

      <div class="service__heading">
        <p>コーディング・Webサイト制作・多言語対応を軸に、事業者様や制作者様の「あと一歩」をサポートします。</p>
        <p class="service__heading--sub">制作会社様やデザイナー様の右腕として、また個人事業主様の良きパートナーとして、<br class="u-desktop">丁寧かつ柔軟にご要望にお応えいたします。</p>
        <p class="service__heading--sub">また、英語・タイ語を含む多言語サイト制作においては、単なる翻訳ではなく、<br class="u-desktop">外国の方にも本当に伝わりやすく、使いやすい構成・デザインをご提案します。</p>
      </div>

      <div class="service__contents-wrapper">
        <ul class="service__contents service-cards">
          <!-- 多言語サイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--01">
              <h2 class="service-card__title">Multilingual</h2>
              <h3 class="service-card__title-sub">多言語対応Webサイト制作</h3>
              <p class="service-card__text">英語・タイ語・日本語に対応したWebサイトの企画・構成・デザイン・実装を行います。</p>
              <p class="service-card__text">文化や言語の違いを考慮したユーザー導線設計と、翻訳＋制作をワンストップでサポートします。</p>
              <p class="service-card__text">小規模サイト・LP・ブログなども柔軟に対応可能です。</p>
            </div>
          </li>
          <!-- ウェブサイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--02">
              <h2 class="service-card__title">Website</h2>
              <h3 class="service-card__title-sub">Webサイト制作
                <span class="service-card__title-sub--remark">（一般・WordPress）</span>
              </h3>
              <p class="service-card__text">コーポレートサイトやポートフォリオサイトなど、目的に合わせたWebサイトを制作します。</p>
              <p class="service-card__text">静的HTMLサイト、WordPressオリジナルテーマ、既存WordPressサイトのカスタマイズまで幅広く対応可能です。</p>
              <p class="service-card__text">広告代理店での経験を生かし、デザイン〜公開・運用まで責任を持ってサポートします。</p>
            </div>
          </li>
          <!-- コーディング代行 -->
          <li class="service-cards__item">
            <div class="service-card service-card--03">
              <h2 class="service-card__title">Coding</h2>
              <h3 class="service-card__title-sub">コーディング代行</h3>
              <p class="service-card__text">制作会社様・Webデザイナー様向けに、デザインカンプからの正確で保守性の高いコーディングを行います。</p>
              <p class="service-card__text">CSS設計の原則を守り、再利用しやすく、長期運用にも耐えるコードを意識しています。</p>
              <p class="service-card__text">小規模案件やポートフォリオ用コーディングなどもお気軽にご相談ください。</p>
            </div>
          </li>
          <!-- 翻訳サポート -->
          <li class="service-cards__item">
            <div class="service-card service-card--04">
              <h2 class="service-card__title">Translation</h2>
              <h3 class="service-card__title-sub">翻訳サポート
                <span class="service-card__title-sub--remark">（オプション）</span>
              </h3>
              <p class="service-card__text">Webサイト内コンテンツの英語・タイ語翻訳を承ります。</p>
              <p class="service-card__text">自然で読みやすく、文化的背景にも配慮した表現を心がけています。</p>
              <p class="service-card__text">必要に応じた更新作業もサポート可能です（翻訳は文字数ベースでお見積もりします）。</p>
              <p class="service-card__text">※英語・タイ語以外の言語の翻訳も相談に応じます。お気軽にお問い合わせください。</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- サービス詳細 -->
  <section class="service-details top-service-details top-layout">
    <div class="service-details__inner inner">

      <!-- スキル -->
      <div class="service-details__heading">
        <h2 class="service-details__title">
          スキル<span>skills</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>Web制作に必要な一般的な知識・技術はもちろん、常に最新のITツールやトレンドを取り入れながら、より良い制作を心がけています。</p>
      </div>
      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-html-5.svg" alt="htmlのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-css-3.svg" alt="cssのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-jquery.svg" alt="jQueryのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-javascript.svg" alt="javascriptのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-wordpress.svg" alt="WordPressのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-sass.svg" alt="Sassのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-figma.svg" alt="Figmaのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-github.svg" alt="GitHubのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-filezilla.svg" alt="Filezillaのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-gulp.svg" alt="gulpのアイコン" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <!-- コミュニケーション -->
      <div class="service-details__heading">
        <h2 class="service-details__title">
          業務報告・連絡方法について<span>communication</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>国内外のお客様とスムーズにご連絡・お打ち合わせが可能です。</p>
        <p>また、海外在住経験を活かし、英語・タイ語対応を含む海外案件にも柔軟に対応しています。</p>
        <p>ご希望のツール（メール、チャット、オンラインミーティングなど）で対応いたしますので、お気軽にご相談ください。</p>
      </div>

      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-mail.svg" alt="mailのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-line.png" alt="lineのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-chatwork.svg" alt="chatworkのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-slack.svg" alt="slackのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-zoom.svg" alt="zoomのアイコン" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-google-meet.svg" alt="meetのアイコン" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <div class="service-details__list">
        <dl>
          <dt>連絡可能時間</dt>
          <dd>平日 9:00〜18:00 （その他の時間帯も事前にご相談いただければ柔軟に対応可能です）</dd>
        </dl>
        <dl>
          <dt>平均稼働時間</dt>
          <dd>平日は概ねフルタイムで対応しております。繁忙期や案件状況により異なる場合は事前にご案内いたします。</dd>
        </dl>
        <dl>
          <dt>定休日</dt>
          <dd>土日・祝日（案件の状況により、休日対応も可能ですのでご相談ください）</dd>
        </dl>
        <dl>
          <dt>勤務形態</dt>
          <dd>完全在宅勤務にて、オンラインで対応しています。</dd>
        </dl>
        <dl>
          <dt>連絡方法</dt>
          <dd>メール、LINE、Chatwork、Slack、Zoom、Google Meetなど各種オンラインツールに対応しています。</dd>
        </dl>
        <dl>
          <dt>その他</dt>
          <dd>英語・タイ語でのメールのやりとり、電話連絡、オンライン会議などが可能です。ウェブサイト制作と共に、タイへの事業拡大をご検討中のお客様など、会議にタイ人スタッフが入る場合は、会議中の日・タイ通訳のお手伝いなどもできますので、ぜひご相談ください。</dd>
        </dl>
      </div>

    </div>
  </section>
  <!-- 料金表（未定） -->
  <!-- About 私について -->
  <section id="about" class="about top-about top-layout">
    <div class="about__inner inner">
      <h2 class="service__section-title section-title">
        <span class="section-title__en">about</span>
        <span class="section-title__jp">私について</span>
      </h2>
      <!-- カード風プロフィール -->
      <div class="about__card">
        <figure class="about__card-image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/naoko-profile.jpg" alt="鴨川直子の写真" width="400" height="400">
        </figure>

        <div class="about__card-info">
          <h3 class="about__name">鴨川直子<span>（かもがわ なおこ）</span></h3>
          <p class="about__position">Web制作者・通訳・翻訳</p>
          <p>広告代理店での営業・進行管理を経て、現在はWeb制作と翻訳を中心に活動中。</p>
          <p>タイ・アメリカでの海外生活で培った多言語・多文化への理解を活かし、英語・タイ語を含むWebサイト制作を得意としています。</p>
          <p>構成から翻訳・実装まで、ワンストップで対応可能です。</p>
          <p>趣味は油絵やイラスト、手芸などのものづくり。</p>
        </div>
      </div>
      <div class="about__my-skills my-skills">
        <ul class="my-skills__items">
          <li class="my-skills__item">
            <h4>技術スキル</h4>
            <p>HTML / CSS / JavaScript / jQuery / Sass / WordPress / GitHub など</p>
          </li>
          <li class="my-skills__item">
            <h4>その他スキル・経験</h4>
            <ul class="my-skills__others">
              <li>英語・タイ語による翻訳・通訳経験</li>
              <li>広告代理店での企画提案・プロジェクト管理経験</li>
              <li>文化や言葉の違いに配慮した多言語Webサイトの制作</li>
              <li>知的財産管理技能士3級などの資格保有</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Contact お問い合わせ -->
  <section id="contact" class="contact">
    <div class="contact__inner inner">
      <!-- セクションタイトル -->
      <h2 class="service__section-title section-title">
        <span class="section-title__en">
          contact
        </span>
        <span class="section-title__jp">
          お問い合わせ
        </span>
      </h2>
      <div class="contact__text-wrapper">
        <p>
          ホームページ制作のご依頼やご相談、ご質問等がございましたら、お気軽にお問い合わせください。原則、72時間以内に返信いたします。
        </p>
        <p>返信が無い場合は、恐れ入りますが迷惑メールフォルダの中をご確認お願いいたします。</p>
      </div>
      <!-- お問い合わせフォーム -->
      <?php echo do_shortcode('[contact-form-7 id="27928e8" title="お問い合わせ"]'); ?>


    </div>
  </section>
  <!-- TOPへ戻るボタン -->
  <a href="#top" class="js-button-to-top button-to-top">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-symbol.png" alt="Logo" width="48" height="48">
    <span>TOPへ<br>もどる</span>
  </a>
</main>
<?php get_footer(); ?>