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
            นำความตั้งใจของคุณสู่โลกด้วยเว็บไซต์ที่สื่อสารได้อย่างแท้จริง<br>
            ไม่ว่าจะเป็นการเขียนโค้ดหรือรองรับหลายภาษา ไว้วางใจให้เราดูแลได้ทั้งหมด
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
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/world.svg" alt="ภาพประกอบโลกและผู้หญิง" width="1200" height="800">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pair-programming.svg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pair-programming.svg" alt="ภาพคนสองคนนั่งหน้าคอมพิวเตอร์" width="1200" height="800">
            </picture>
            <picture class="swiper-slide">
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.svg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/coding.svg" alt="ภาพผู้หญิงกำลังเขียนโค้ด" width="1200" height="800">
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
        <span class="section-title__jp">แนวคิด</span>
      </h2>

      <div class="concept__intro">
        <p>การทำเว็บไซต์ให้รองรับหลายภาษานั้น ไม่ได้มีไว้เพื่อผู้ใช้งานชาวต่างชาติเท่านั้น</p>
        <p>แต่ยังเป็นโอกาสในการทบทวน<span class="concept__highlight">"โครงสร้างและคำแนะนำที่เข้าใจง่ายสำหรับทุกคน"</span><br class="u-desktop">
          ซึ่งจะนำไปสู่การสร้างเว็บไซต์ที่ใช้งานสะดวกและเป็นมิตรต่อผู้ใช้งานชาวญี่ปุ่นด้วยเช่นกัน</p>
      </div>
      <!-- コンセプトのカード -->
      <ul class="concept__points">
        <li>
          ลูกค้าต่างชาติสามารถ<br>ใช้งานได้อย่างมั่นใจ
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/globe.svg" alt="ไอคอนโลก" width="100" height="100">
          </div>
        </li>
        <li>
          ลดความกังวลของพนักงาน<br>และทำให้การทำงานราบรื่น
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/staff.svg" alt="ไอคอนพนักงาน" width="100" height="100">
          </div>
        </li>
        <li>
          ใช้การรองรับหลายภาษาเป็นโอกาส<br>ในการปรับปรุงเว็บไซต์ภาษาญี่ปุ่นให้เป็นมิตรมากขึ้น
          <div class="concept__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/website.svg" alt="ไอคอนเว็บไซต์" width="100" height="100">
          </div>
        </li>
      </ul>
      <p class="concept__summary">
        ไม่ใช่แค่การแปล แต่เราสนับสนุนการสร้างเว็บไซต์ที่สื่อสารได้อย่างแท้จริง
        โดยคำนึงถึงวัฒนธรรมและความสะดวกในการใช้งาน
      </p>
    </div>
  </section>
  <!-- Works 制作実績 -->
  <section id="works" class="works top-works top-layout">
    <div class="works__inner inner">

      <!-- セクションタイトル -->
      <h2 class="works__section-title section-title">
        <span class="section-title__en">works</span>
        <span class="section-title__jp">ผลงาน</span>
      </h2>
      <div class="works__heading">
        <p>
          นี่คือตัวอย่างผลงานของเรา คลิกเพื่อดูรายละเอียด<br>
          หากมีคำถามใดๆ กรุณาติดต่อเราผ่านแบบฟอร์มติดต่อได้ทุกเมื่อ
        </p>
      </div>
      <p class="works__heading--remark">※ไม่แสดงผลงานที่กำลังดำเนินการและผลงานที่ยังไม่ได้รับอนุญาตให้เผยแพร่</p>

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
                  <span class="works-modal__heading-jp">รายละเอียดผลการผลิต</span>
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
                    <dt class="works-modal__index">ลูกค้า</dt>
                    <dd class="works-modal__text"><?php the_field('client'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">ระยะเวลาการผลิต</dt>
                    <dd class="works-modal__text"><?php the_field('time'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">ภาษาที่ใช้</dt>
                    <dd class="works-modal__text"><?php the_field('language'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">ขอบเขตความรับผิดชอบ</dt>
                    <dd class="works-modal__text"><?php the_field('scope'); ?></dd>
                  </dl>
                  <dl class="works-modal__details-wrapper">
                    <dt class="works-modal__index">เบื้องหลังการผลิต</dt>
                    <dd class="works-modal__text"><?php the_field('background'); ?></dd>
                  </dl>
                </div>

                <!-- 実績一覧へ戻る -->
                <div class="works-modal__button-to-list">
                  <a href="#works" class="button button--to-works-list"><span>รายการความสำเร็จ</span></a>
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
        <span class="section-title__jp">บริการ</span>
      </h2>

      <div class="service__heading">
        <p>เราสนับสนุนธุรกิจและผู้สร้างสรรค์ด้วยการเขียนโค้ด การสร้างเว็บไซต์ และการรองรับหลายภาษา</p>
        <p class="service__heading--sub">เราพร้อมให้บริการอย่างละเอียดและยืดหยุ่นในฐานะผู้ช่วยของบริษัทผลิตและนักออกแบบ<br class="u-desktop">รวมถึงเป็นพาร์ทเนอร์ที่ดีสำหรับเจ้าของธุรกิจส่วนตัว</p>
        <p class="service__heading--sub">สำหรับการสร้างเว็บไซต์หลายภาษา รวมถึงภาษาอังกฤษและภาษาไทย<br class="u-desktop">เราไม่เพียงแต่แปล แต่ยังเสนอโครงสร้างและการออกแบบที่เข้าใจง่ายและใช้งานสะดวกสำหรับผู้ใช้ต่างชาติ</p>
      </div>

      <div class="service__contents-wrapper">
        <ul class="service__contents service-cards">
          <!-- 多言語サイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--01">
              <h2 class="service-card__title">Multilingual</h2>
              <h3 class="service-card__title-sub">การสร้างเว็บไซต์หลายภาษา</h3>
              <p class="service-card__text">เราดำเนินการวางแผน โครงสร้าง การออกแบบ และการพัฒนาเว็บไซต์ที่รองรับภาษาอังกฤษ ภาษาไทย และภาษาญี่ปุ่น</p>
              <p class="service-card__text">เราสนับสนุนการออกแบบเส้นทางผู้ใช้ที่คำนึงถึงความแตกต่างทางวัฒนธรรมและภาษา พร้อมทั้งการแปลและการผลิตในขั้นตอนเดียว</p>
              <p class="service-card__text">เราสามารถรองรับเว็บไซต์ขนาดเล็ก หน้า Landing Page และบล็อกได้อย่างยืดหยุ่น</p>
            </div>
          </li>
          <!-- ウェブサイト制作 -->
          <li class="service-cards__item">
            <div class="service-card service-card--02">
              <h2 class="service-card__title">Website</h2>
              <h3 class="service-card__title-sub">การสร้างเว็บไซต์
                <span class="service-card__title-sub--remark">（ทั่วไป・WordPress）</span>
              </h3>
              <p class="service-card__text">เราสร้างเว็บไซต์ตามวัตถุประสงค์ เช่น เว็บไซต์องค์กรและพอร์ตโฟลิโอ</p>
              <p class="service-card__text">เราสามารถรองรับได้หลากหลายตั้งแต่เว็บไซต์ HTML แบบสถิต WordPress theme แบบกำหนดเอง ไปจนถึงการปรับแต่งเว็บไซต์ WordPress ที่มีอยู่</p>
              <p class="service-card__text">เราใช้ประสบการณ์จากบริษัทโฆษณาในการสนับสนุนตั้งแต่การออกแบบไปจนถึงการเผยแพร่และการใช้งาน</p>
            </div>
          </li>
          <!-- コーディング代行 -->
          <li class="service-cards__item">
            <div class="service-card service-card--03">
              <h2 class="service-card__title">Coding</h2>
              <h3 class="service-card__title-sub">บริการเขียนโค้ดแทน</h3>
              <p class="service-card__text">สำหรับบริษัทผลิตและนักออกแบบเว็บไซต์ เราดำเนินการเขียนโค้ดที่แม่นยำและบำรุงรักษาได้ง่ายจากไฟล์ออกแบบ</p>
              <p class="service-card__text">เราให้ความสำคัญกับการเขียนโค้ดที่สามารถนำกลับมาใช้ใหม่ได้ง่ายและทนทานต่อการใช้งานระยะยาว ตามหลักการออกแบบ CSS</p>
              <p class="service-card__text">เรายินดีรับงานขนาดเล็กและการเขียนโค้ดสำหรับพอร์ตโฟลิโอ</p>
            </div>
          </li>
          <!-- 翻訳サポート -->
          <li class="service-cards__item">
            <div class="service-card service-card--04">
              <h2 class="service-card__title">Translation</h2>
              <h3 class="service-card__title-sub">บริการแปลภาษา
                <span class="service-card__title-sub--remark">（option）</span>
              </h3>
              <p class="service-card__text">เรารับแปลเนื้อหาเว็บไซต์เป็นภาษาอังกฤษและภาษาไทย</p>
              <p class="service-card__text">เราให้ความสำคัญกับการแปลที่เป็นธรรมชาติ อ่านง่าย และคำนึงถึงบริบททางวัฒนธรรม</p>
              <p class="service-card__text">เราสามารถสนับสนุนการอัปเดตตามความจำเป็น (การแปลคิดค่าบริการตามจำนวนตัวอักษร)</p>
              <p class="service-card__text">※เรายินดีรับแปลภาษาอื่นๆ นอกเหนือจากภาษาอังกฤษและภาษาไทย กรุณาติดต่อเราเพื่อปรึกษา</p>
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
          ทักษะ<span>skills</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>นอกจากความรู้และทักษะที่จำเป็นสำหรับการสร้างเว็บไซต์แล้ว เรายังพยายามนำเครื่องมือและเทรนด์ IT ล่าสุดมาใช้เพื่อการผลิตที่ดีขึ้น</p>
      </div>
      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-html-5.svg" alt="ไอคอน HTML5" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-css-3.svg" alt="ไอคอน CSS3" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-jquery.svg" alt="ไอคอน jQuery" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-javascript.svg" alt="ไอคอน JavaScript" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-wordpress.svg" alt="ไอคอน WordPress" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-sass.svg" alt="ไอคอน Sass" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-figma.svg" alt="ไอคอน Figma" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-github.svg" alt="ไอคอน GitHub" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-filezilla.svg" alt="ไอคอน FileZilla" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-gulp.svg" alt="ไอคอน Gulp" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <!-- コミュニケーション -->
      <div class="service-details__heading">
        <h2 class="service-details__title">
          เกี่ยวกับการรายงานและวิธีการติดต่อ<span>communication</span>
        </h2>
      </div>
      <div class="service-details__text">
        <p>เราสามารถติดต่อและประชุมกับลูกค้าทั้งในและต่างประเทศได้อย่างราบรื่น</p>
        <p>นอกจากนี้ เรายังมีความยืดหยุ่นในการรับมือกับงานต่างประเทศ รวมถึงการรองรับภาษาอังกฤษและภาษาไทย โดยใช้ประสบการณ์การอาศัยในต่างประเทศ</p>
        <p>เราสามารถใช้เครื่องมือที่คุณต้องการ (อีเมล แชท การประชุมออนไลน์ ฯลฯ) ได้ ดังนั้นกรุณาติดต่อเราเพื่อปรึกษา</p>
      </div>

      <div class="service-details__icon-wrapper">
        <ul class="service-details__items">
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-mail.svg" alt="ไอคอนอีเมล" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-line.png" alt="ไอคอน LINE" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-chatwork.svg" alt="ไอคอน Chatwork" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-slack.svg" alt="ไอคอน Slack" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-zoom.svg" alt="ไอคอน Zoom" width="48" height="48">
            </figure>
          </li>
          <li class="service-details__item">
            <figure class="service-details__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/icon-google-meet.svg" alt="ไอคอน Google Meet" width="48" height="48">
            </figure>
          </li>
        </ul>
      </div>

      <div class="service-details__list">
        <dl>
          <dt>เวลาที่สามารถติดต่อได้</dt>
          <dd>วันธรรมดา 9:00-18:00 (สามารถปรับเปลี่ยนได้ตามความเหมาะสม หากแจ้งล่วงหน้า)</dd>
        </dl>
        <dl>
          <dt>เวลาทำงานเฉลี่ย</dt>
          <dd>โดยทั่วไปเราทำงานเต็มเวลาในวันธรรมดา หากมีข้อแตกต่างเนื่องจากช่วงเวลาที่วุ่นวายหรือสถานการณ์ของงาน เราจะแจ้งให้ทราบล่วงหน้า</dd>
        </dl>
        <dl>
          <dt>วันหยุด</dt>
          <dd>วันเสาร์ อาทิตย์ และวันหยุดนักขัตฤกษ์ (สามารถทำงานในวันหยุดได้ตามความเหมาะสมของงาน)</dd>
        </dl>
        <dl>
          <dt>วิธีการติดต่อ</dt>
          <dd>รองรับเครื่องมือออนไลน์ต่างๆ เช่น อีเมล LINE Chatwork Slack Zoom Google Meet เป็นต้น</dd>
        </dl>
        <dl>
          <dt>วิธีการสื่อสาร</dt>
          <dd>เรารับสื่อสารผ่านเครื่องมือออนไลน์ต่างๆ เช่น อีเมล LINE Chatwork Slack Zoom และ Google Meet เพื่อการสื่อสารของเรา</dd>
        </dl>
        <dl>
          <dt>แล้อื่นๆ</dt>
          <dd>สามารถติดต่อผ่านอีเมล การโทรศัพท์ และการประชุมออนไลน์เป็นภาษาอังกฤษและภาษาไทยได้ สำหรับลูกค้าที่กำลังพิจารณาขยายธุรกิจไปยังประเทศไทยพร้อมกับการสร้างเว็บไซต์ หากมีพนักงานชาวไทยเข้าร่วมการประชุม เราสามารถช่วยแปลระหว่างภาษาญี่ปุ่นและภาษาไทยได้ กรุณาติดต่อเราเพื่อปรึกษา</dd>
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
        <span class="section-title__jp">เกี่ยวกับฉัน</span>
      </h2>
      <!-- カード風プロフィール -->
      <div class="about__card">
        <figure class="about__card-image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/naoko-profile.jpg" alt="รูปภาพของ Naoko Kamogawa" width="400" height="400">
        </figure>

        <div class="about__card-info">
          <h3 class="about__name">Naoko Kamogawa<span>（かもがわ なおこ）</span></h3>
          <p class="about__position">ผู้สร้างเว็บไซต์・ล่าม・นักแปล</p>
          <p>หลังจากทำงานด้านการขายและการจัดการโครงการในบริษัทโฆษณา ปัจจุบันทำงานด้านการสร้างเว็บไซต์และการแปลเป็นหลัก</p>
          <p>ใช้ความเข้าใจในหลายภาษาและวัฒนธรรมที่ได้จากการใช้ชีวิตในประเทศไทยและอเมริกา ในการสร้างเว็บไซต์ที่รองรับภาษาอังกฤษและภาษาไทย</p>
          <p>สามารถรับผิดชอบได้ตั้งแต่การวางโครงสร้าง การแปล ไปจนถึงการพัฒนา</p>
          <p>งานอดิเรกคือการวาดภาพสีน้ำมัน การวาดภาพประกอบ และงานฝีมือต่างๆ</p>
        </div>
      </div>
      <div class="about__my-skills my-skills">
        <ul class="my-skills__items">
          <li class="my-skills__item">
            <h4>ทักษะทางเทคนิค</h4>
            <p>HTML / CSS / JavaScript / jQuery / Sass / WordPress / GitHub เป็นต้น</p>
          </li>
          <li class="my-skills__item">
            <h4>ทักษะและประสบการณ์อื่นๆ</h4>
            <ul class="my-skills__others">
              <li>ประสบการณ์การแปลและล่ามภาษาอังกฤษและภาษาไทย</li>
              <li>ประสบการณ์การเสนอแผนและการจัดการโครงการในบริษัทโฆษณา</li>
              <li>การสร้างเว็บไซต์หลายภาษาที่คำนึงถึงความแตกต่างทางวัฒนธรรมและภาษา</li>
              <li>มีใบรับรองเช่น Intellectual Property Management Skill Level 3</li>
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
          ติดต่อเรา
        </span>
      </h2>
      <div class="contact__text-wrapper">
        <p>
          หากคุณต้องการขอรับบริการสร้างเว็บไซต์ มีคำถาม หรือต้องการปรึกษา กรุณาติดต่อเรา เราจะตอบกลับภายใน 72 ชั่วโมง
        </p>
        <p>หากไม่ได้รับคำตอบ กรุณาตรวจสอบในโฟลเดอร์อีเมลขยะ</p>
      </div>
      <!-- お問い合わせフォーム -->
      <?php echo do_shortcode('[contact-form-7 id="27928e8" title="お問い合わせ"]'); ?>


    </div>
  </section>
  <!-- TOPへ戻るボタン -->
  <a href="#top" class="js-button-to-top button-to-top">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-symbol.png" alt="โลโก้" width="48" height="48">
    <span>กลับขึ้น<br>ด้านบน</span>
  </a>
</main>
<?php get_footer(); ?>