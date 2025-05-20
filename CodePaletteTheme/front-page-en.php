<?php
/* Template Name: Front Page English */

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
            Bring your vision to the world with a website that truly communicates.<br>
            Leave everything to us—from coding to multilingual support.
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
        <p>Multilingual website support is not just for foreign customers.</p>
        <p>It's an opportunity to review not only language but also <span class="concept__highlight">"clear structure and guidance for everyone"</span>,<br class="u-desktop">
          resulting in creating websites that are friendly and easy to use for Japanese customers as well.</p>
      </div>
      <!-- コンセプトのカード -->
      <ul class="concept__points">
        <li>
          Easy to use and<br>understand for foreign customers
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/globe.svg" alt="Icon" width="100" height="100">
          </div>
        </li>
        <li>
          Empowering staff to handle<br>foreign customers with confidence
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/staff.svg" alt="Icon" width="100" height="100">
          </div>
        </li>
        <li>
          Making Japanese sites<br>more user-friendly
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/website.svg" alt="Icon" width="100" height="100">
          </div>
        </li>
      </ul>
      <p class="concept__summary">
        We support "website creation that truly communicates" by considering not just translation,
        but also culture and usability.
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
          Here are some examples of our work. Click to see details.<br>
          If you have any questions, please feel free to contact us through the contact form.
        </p>
      </div>
      <p class="works__heading--remark">*Projects currently in progress and those without permission are not listed.</p>

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
              <button class="works-modal__close-button js-works-modal__close-button" aria-label="Close modal for <?php the_title(); ?>">
                <span class="works-modal__close01"></span>
                <span class="works-modal__close02"></span>
              </button>
              <div class="works-modal__container">
                <h2 class="works-modal__heading">
                  <span class="works-modal__heading-en">Works</span>
                  <span class="works-modal__heading-jp">Project Details</span>
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
                    <dt class="works-modal__index">Client</dt>
                    <dd class="works-modal__text"><?php the_field('client'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">Production Time</dt>
                    <dd class="works-modal__text"><?php the_field('time'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">Languages Used</dt>
                    <dd class="works-modal__text"><?php the_field('language'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">Scope of Work</dt>
                    <dd class="works-modal__text"><?php the_field('scope'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">Project Background</dt>
                    <dd class="works-modal__text"><?php the_field('background'); ?></dd>
                  </dl>
                </div>

                <!-- 実績一覧へ戻る -->
                <div class="works-modal__button-to-list">
                  <a href="#works" class="button button--to-works-list"><span>Back to Works</span></a>
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
        <p>We support businesses and creators in taking that "next step" through coding, website development, and multilingual solutions.</p>
        <p class="service__heading--sub">As a reliable partner for production companies, designers, and individual business owners,<br class="u-desktop">we carefully and flexibly respond to your needs.</p>
        <p class="service__heading--sub">For multilingual website development including English and Thai, we go beyond mere translation<br class="u-desktop">to propose structures and designs that are truly easy to understand and use for foreign users.</p>
      </div>

      <div class="service__contents-wrapper">
        <ul class="service__contents service-cards">
          <!-- 多言語サイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--01">
              <h2 class="service-card__title">Multilingual</h2>
              <h3 class="service-card__title-sub">Multilingual Website Development</h3>
              <p class="service-card__text">We handle planning, structure, design, and implementation of websites in English, Thai, and Japanese.</p>
              <p class="service-card__text">We provide one-stop support for translation and development, with user journey design that considers cultural and linguistic differences.</p>
              <p class="service-card__text">We can flexibly handle small-scale sites, landing pages, blogs, and more.</p>
            </div>
          </li>
          <!-- ウェブサイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--02">
              <h2 class="service-card__title">Website</h2>
              <h3 class="service-card__title-sub">Website Development
                <span class="service-card__title-sub--remark">(Standard & WordPress)</span>
              </h3>
              <p class="service-card__text">We create websites tailored to your purpose, from corporate sites to portfolio websites.</p>
              <p class="service-card__text">We handle everything from static HTML sites to custom WordPress themes and existing WordPress site customization.</p>
              <p class="service-card__text">Drawing from our advertising agency experience, we provide comprehensive support from design to launch and maintenance.</p>
            </div>
          </li>
          <!-- コーディング代行 -->
          <li class="service-cards__item">
            <div class="service-card service-card--03">
              <h2 class="service-card__title">Coding</h2>
              <h3 class="service-card__title-sub">Coding Services</h3>
              <p class="service-card__text">For production companies and web designers, we provide accurate and maintainable coding from design comps.</p>
              <p class="service-card__text">We adhere to CSS design principles, creating reusable code that stands the test of time.</p>
              <p class="service-card__text">Feel free to consult us about small projects or portfolio coding needs.</p>
            </div>
          </li>
          <!-- 翻訳サポート -->
          <li class="service-cards__item">
            <div class="service-card service-card--04">
              <h2 class="service-card__title">Translation</h2>
              <h3 class="service-card__title-sub">Translation Support
                <span class="service-card__title-sub--remark">(Optional)</span>
              </h3>
              <p class="service-card__text">We provide English and Thai translation services for website content.</p>
              <p class="service-card__text">We strive for natural, readable expressions that consider cultural context.</p>
              <p class="service-card__text">We can support content updates as needed (translation pricing is based on character count).</p>
              <p class="service-card__text">*We can also discuss translation in languages other than English and Thai. Please feel free to inquire.</p>
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
          Skills<span>skills</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>While maintaining essential web development knowledge and skills, we continuously incorporate the latest IT tools and trends to deliver better results.</p>
      </div>
      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-html-5.svg" alt="HTML icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-css-3.svg" alt="CSS icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-jquery.svg" alt="jQuery icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-javascript.svg" alt="JavaScript icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-wordpress.svg" alt="WordPress icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-sass.svg" alt="Sass icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-figma.svg" alt="Figma icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-github.svg" alt="GitHub icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-filezilla.svg" alt="FileZilla icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-gulp.svg" alt="Gulp icon" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <!-- コミュニケーション -->
      <div class="service-details__heading">
        <h2 class="service-details__title">
          Communication & Reporting<span>communication</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>We can communicate and meet smoothly with clients both in Japan and overseas.</p>
        <p>Drawing from our international experience, we can flexibly handle overseas projects, including English and Thai language support.</p>
        <p>We can accommodate your preferred communication tools (email, chat, online meetings, etc.), so please feel free to discuss your needs.</p>
      </div>

      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-mail.svg" alt="Email icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-line.png" alt="LINE icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-chatwork.svg" alt="Chatwork icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-slack.svg" alt="Slack icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-zoom.svg" alt="Zoom icon" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-google-meet.svg" alt="Google Meet icon" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <div class="service-details__list">
        <dl>
          <dt>Available Hours</dt>
          <dd>Weekdays 9:00 AM - 6:00 PM (We can be flexible with other hours by prior arrangement)</dd>
        </dl>
        <dl>
          <dt>Average Working Hours</dt>
          <dd>We generally work full-time on weekdays. We will inform you in advance if this varies due to busy periods or project requirements.</dd>
        </dl>
        <dl>
          <dt>Regular Days Off</dt>
          <dd>Weekends and holidays (We can work on holidays depending on project needs - please consult with us)</dd>
        </dl>
        <dl>
          <dt>Work Style</dt>
          <dd>We work remotely and provide all services online.</dd>
        </dl>
        <dl>
          <dt>Communication Methods</dt>
          <dd>We support various online tools including email, LINE, Chatwork, Slack, Zoom, and Google Meet.</dd>
        </dl>
        <dl>
          <dt>Additional Services</dt>
          <dd>We can handle email correspondence, phone calls, and online meetings in English and Thai. For clients considering business expansion to Thailand, we can also provide Japanese-Thai interpretation during meetings with Thai staff. Please feel free to discuss your needs.</dd>
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
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/naoko-profile.jpg" alt="Photo of Naoko Kamogawa" width="400" height="400">
        </figure>

        <div class="about__card-info">
          <h3 class="about__name">Naoko Kamogawa<span>(かもがわ なおこ)</span></h3>
          <p class="about__position">Web Developer, Interpreter & Translator</p>
          <p>After working in sales and project management at an advertising agency, I now focus on web development and translation.</p>
          <p>Drawing from my experience living in Thailand and the United States, I specialize in creating multilingual websites in English and Thai, leveraging my understanding of different languages and cultures.</p>
          <p>I can handle everything from planning to translation and implementation in a one-stop service.</p>
          <p>My hobbies include oil painting, illustration, and various crafts.</p>
        </div>
      </div>
      <div class="about__my-skills my-skills">
        <ul class="my-skills__items">
          <li class="my-skills__item">
            <h4>Technical Skills</h4>
            <p>HTML / CSS / JavaScript / jQuery / Sass / WordPress / GitHub and more</p>
          </li>
          <li class="my-skills__item">
            <h4>Other Skills & Experience</h4>
            <ul class="my-skills__others">
              <li>Translation and interpretation experience in English and Thai</li>
              <li>Project planning and management experience at an advertising agency</li>
              <li>Development of multilingual websites with consideration for cultural and linguistic differences</li>
              <li>Certified Intellectual Property Management Professional (Level 3)</li>
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
          Please feel free to contact us for website development inquiries, consultations, or any questions you may have. We typically respond within 72 hours.
        </p>
        <p>If you don't receive a response, please check your spam folder.</p>
      </div>
      <!-- お問い合わせフォーム -->
      <?php echo do_shortcode('[contact-form-7 id="27928e8" title="お問い合わせ"]'); ?>


    </div>
  </section>
  <!-- TOPへ戻るボタン -->
  <a href="#top" class="js-button-to-top button-to-top">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-symbol.png" alt="Logo" width="48" height="48">
    <span>Back to<br>Top</span>
  </a>
</main>
<?php get_footer(); ?>