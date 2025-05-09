<?php get_header(); ?>
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
        <?php endif; wp_reset_postdata(); ?>
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
            <!-- 制作実績の詳細 -->
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
      <?php endwhile; wp_reset_postdata(); endif; ?>

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
      <form action="mail.php" method="post" id="contact-form" class="contact-form contact-form__layout">
        <!-- お名前入力 -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label for="name" class="input-label">お名前</label>
          </dt>
          <dd>
            <input type="text" id="name" name="お名前" class="input-text" placeholder="例）山田　太郎" autocomplete="name" required>
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- 住所入力 -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label for="address" class="input-label">住所</label>
          </dt>
          <dd>
            <input type="text" id="address" name="ご住所" class="input-text" placeholder="例）東京都◯◯区・・・" autocomplete="address-line1" required>
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- 会社名入力 -->
        <dl class="contact-form__item">
          <dt>
            <!-- <span class="required-tag">必須</span> -->
            <label for="company" class="input-label">会社名</label>
          </dt>
          <dd>
            <input type="text" id="company" name="会社名" class="input-text" placeholder="会社名" autocomplete="organization">
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- メールアドレス入力 -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label for="email" class="input-label">メールアドレス</label>
          </dt>
          <dd>
            <input type="email" id="email" name="Email" class="input-email" placeholder="sample@gmail.com" autocomplete="email" required>
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- 電話番号入力 -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label for="tel" class="input-label">電話番号</label>
          </dt>
          <dd>
            <input type="tel" id="tel" name="お電話番号" class="input-tel" placeholder="電話番号" autocomplete="tel" required>
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- 貴社サイトURL入力 -->
        <dl class="contact-form__item">
          <dt>
            <label for="website" class="input-label">貴社サイトURL</label>
          </dt>
          <dd>
            <input type="url" id="website" name="ウェブサイトURL" class="input-text" placeholder="https://example.com" autocomplete="url">
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- チェックボックス（お問い合わせ項目） -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label class="input-label">お問い合わせ項目（複数回答可）</label>
          </dt>
          <dd>
            <div class="checkbox-group">
              <div class="checkbox-container">
                <label class="check-label" for="check1">
                  <input id="check1" class="check-test" type="checkbox" name="お問い合わせ項目[]" required>
                  <span class="check-label-span">お見積もりのご依頼</span>
                </label>
              </div>
              <div class="checkbox-container">
                <label class="check-label" for="check2">
                  <input id="check2" class="check-test" type="checkbox" name="お問い合わせ項目[]" required>
                  <span class="check-label-span">ホームページ制作に関するご相談・ご質問</span>
                </label>
              </div>
              <div class="checkbox-container">
                <label class="check-label" for="check3">
                  <input id="check3" class="check-test" type="checkbox" name="お問い合わせ項目[]" required>
                  <span class="check-label-span">その他</span>
                </label>
              </div>
            </div>
            <span class="js-error-required-checkbox"></span>
          </dd>
        </dl>
        <!-- セレクトボックス -->
        <dl class="contact-form__item">
          <dt>
            <!-- <span class="required-tag">必須</span> -->
            <label for="region" class="input-label">お住まいの地域</label>
          </dt>
          <dd>
            <div class="select-container">
              <select class="select-box" name="お住まいの地域" id="region">
                <option value="">選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
                <option value="海外">海外</option>
              </select>
            </div>
            <!-- <span class="js-error-required-select"></span> -->
          </dd>
        </dl>
        <!-- テキストエリア -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label for="inquiry" class="input-label">お問い合わせ内容</label>
          </dt>
          <dd>
            <textarea id="inquiry" name="お問い合わせ内容" class="textarea-box" rows="5" cols="30" placeholder="ここにお問い合わせ内容を入力してください。" required></textarea>
            <span class="js-error-required"></span>
          </dd>
        </dl>
        <!-- 個人情報の取り扱いについてのチェックボックス -->
        <dl class="contact-form__item">
          <dt>
            <span class="required-tag">必須</span>
            <label class="input-label">個人情報の取り扱いについて</label>
          </dt>
          <dd>
            <div class="checkbox-group">
              <div class="checkbox-container">
                <label class="check-label">
                  <input id="agreement" class="check-test" type="checkbox" name="privacy-policy-agreement" required>
                  <span class="check-label-span">同意する</span>
                </label>
                <span class="js-error-required-agreement"></span>
              </div>
            </div>

            <p class="contact-form__privacy-text">※個人情報の取扱について:
              ご提供いただいた個人情報は、お問い合わせへの対応および関連する情報提供の目的にのみ使用いたします。お預かりした情報は適切に管理し、第三者に提供することはありません。</p>
          </dd>
        </dl>
        <!-- 送信ボタン -->
        <div class="contact-form__button">
          <button id="js-submit" class="contact-form__button button__submit button" type="submit" value="送信する">
            <span>送信する</span>
          </button>
        </div>
      </form>
    </div>
  </section>
  <!-- TOPへ戻るボタン -->
  <a href="#top" class="js-button-to-top button-to-top">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-symbol.png" alt="Logo" width="48" height="48">
    <span>TOPへ<br>もどる</span>
  </a>
</main>
<?php get_footer(); ?>