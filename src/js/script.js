
jQuery(function ($) { 

  /* --------------------------------------------
  /* ハンバーガーメニュー
  /* -------------------------------------------- */
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      closeDrawerMenu(); // メニューを閉じる関数を呼び出す
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
      // メニューが開いたときにスクロールを無効にする
      $('body').css('overflow', 'hidden');
      // メニューが開いたときにヘッダーの色を設定
      $('.js-header').css('background-color', '#408F95'); // 背景色を設定
    }
  });

  // ナビのリンクがクリックされたときの処理
  $('.sp-nav a').on('click', function () {
    closeDrawerMenu(); // メニューを閉じる関数を呼び出す
    // ナビのリンクからhref属性を取得し、該当のセクションへスクロール
    var targetSection = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(targetSection).offset().top
    }, 1000); // スクロールのアニメーション時間を調整
  });

  // メニューを閉じる関数
  function closeDrawerMenu() {
    $('.js-drawer-menu').fadeOut();
    $('.js-hamburger').removeClass('is-open');
    // メニューが閉じたときにスクロールを有効にする
    $('body').css('overflow', 'auto');
    // メニューが閉じたときにヘッダーの色を元に戻す
    $('.js-header').css('background-color', '');
  }

  // メディアクエリを使用してPC幅を検出し、768pxを超えたときにメニューを閉じる
  $(window).resize(function () {
    if ($(window).width() > 768) {
      closeDrawerMenu(); // PC幅を超えたらメニューを閉じる
    }
  });

  // ページ読み込み時にもメディアクエリをチェックしてメニューを閉じる
  $(document).ready(function () {
    if ($(window).width() > 768) {
      closeDrawerMenu(); // ページ読み込み時にもPC幅を超えたらメニューを閉じる
    }
  });

  /* --------------------------------------------
  /* 言語ボタン
  /* -------------------------------------------- */
  jQuery(document).ready(function ($) {
    // 切り替えボタンをクリックしたとき
    $('.lang-switcher__toggle').on('click', function (e) {
      e.stopPropagation(); // 外側のクリックイベントを止める
  
      const $menu = $(this).next('.lang-switcher__menu');
  
      // 他の開いてるメニューを閉じる
      $('.lang-switcher__menu').not($menu).slideUp(200);
  
      // 現在のメニューをトグル
      $menu.stop(true, true).slideToggle(200);
    });
  
    // 外側クリックでメニューを閉じる
    $(document).on('click', function () {
      $('.lang-switcher__menu').slideUp(200);
    });
  });
  

  /* --------------------------------------------
  /* トップページのFVスワイパー
  /* -------------------------------------------- */
  var topFvSwiper = new Swiper(".js-top-fv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    allowTouchMove: false, // ユーザーのスワイプ操作を無効にする
    autoplay: {
      delay: 3000,
    },
    slidesPerView: 1, // 1度に1枚のスライドを表示
  });

/* --------------------------------------------
/* 制作実績のモーダル（jQuery）
/* -------------------------------------------- */

jQuery(function ($) {
  // モーダルを開く
  $('a.js-works-modal-open').on('click', function (e) {
    e.preventDefault();
    var modalId = $(this).data('modal-id');
    var $modal = $('.js-works-modal[data-modal-id="' + modalId + '"]');
    if ($modal.length) {
      $modal.addClass('is-active');
      $('body').addClass('works-modal__open');
    }
  });

  // 閉じるボタンでモーダルを閉じる
  $('.js-works-modal__close-button').on('click', function (e) {
    e.stopPropagation(); // モーダル外のクリック処理を止める
    $(this).closest('.js-works-modal').removeClass('is-active');
    $('body').removeClass('works-modal__open');
  });

  // モーダル外側（＝背景）をクリックしたときだけ閉じる
  $('.js-works-modal').on('click', function (e) {
    if ($(e.target).closest('.works-modal__container').length === 0) {
      $(this).removeClass('is-active');
      $('body').removeClass('works-modal__open');
    }
  });
});

// モーダル内の「実績一覧へ戻る」ボタン
$('.button--to-works-list').on('click', function (e) {
  e.preventDefault();

  var $modal = $(this).closest('.js-works-modal');
  var target = $($(this).attr('href'));

  // フェードアウトしてからスクロール
  $modal.fadeOut(300, function () {
    $modal.removeClass('is-active');
    $('body').removeClass('works-modal__open');

    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 500);
    }
  });
});






// WP化する前のコード↓
  // // モーダルを開くためのイベントハンドラ
  // $('.works__item a').on('click', function(event) { // buttonをaタグに変更
  //   event.preventDefault();
  //   var modalId = $(this).data('modal');
  //   $('.works-modal[data-modal-id="' + modalId + '"]').fadeIn().addClass('is-active');
  //   $('body').addClass('works-modal__open'); // body にクラスを追加してスクロールを無効化
  // });

  // // モーダルを閉じるためのイベントハンドラ（閉じるボタン）
  // $('.js-works-modal__close-button').on('click', function() {
  //   $(this).closest('.works-modal').fadeOut().removeClass('is-active');
  //   $('body').removeClass('works-modal__open'); // body からクラスを削除してスクロールを有効化
  // });

  // // モーダル全体をクリックしたときにモーダルを閉じる
  // $('.works-modal').on('click', function() {
  //     $(this).fadeOut().removeClass('is-active');
  //     $('body').removeClass('works-modal__open'); // body からクラスを削除してスクロールを有効化
  //   }
  // );


  /* --------------------------------------------
  /* TOPへ戻るボタン
  /* -------------------------------------------- */
  // PCのみで表示、3000pxで出現、お問い合わせフォームに達したら消す。
  var $returnTop = $('.js-button-to-top');
  var $contact = $('#contact');

  $(window).scroll(function() {
    var scrollY = $(this).scrollTop();
    var contactTop = $contact.offset().top;
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();

    // PCのみで表示するための条件
    if ($(window).width() > 768) { // 768pxをPCとするブレークポイントと仮定
      if (scrollY > 3000) {
        $returnTop.addClass('is-active');
      } else {
        $returnTop.removeClass('is-active');
      }

      // お問い合わせフォームに達したかどうかのチェック
      if (scrollY + windowHeight >= contactTop) {
        $returnTop.removeClass('is-active');
      }
    } else {
      // スマホの場合は非表示
      $returnTop.removeClass('is-active');
    }
  });

  /* --------------------------------------------
  /* お問い合わせフォーム（バリデーション）
  /* -------------------------------------------- */

  // ContactForm7では、以下のjQueryでは制御できない。

  // function validateForm() {
  //   let hasError = false;

  //   // エラーメッセージを初期化
  //   $('.js-error-required').text('');
  //   $('.js-error-required-checkbox').text('');
  //   $('.js-error-required-radio').text('');
  //   $('.js-error-required-agreement').text('');
  //   $('.input-text, .input-email, .input-tel, .select-box, textarea').removeClass('errored');

  //   // 必須テキストフィールドのバリデーション
  //   $('input[required], textarea[required], select[required]').each(function() {
  //     if (!$(this).val()) {
  //       $(this).addClass('errored');
  //       $(this).next('.js-error-required').text('※入力必須項目です');
  //       hasError = true;
  //     }
  //   });

  //   // チェックボックスのバリデーション
  //   if ($('input[type="checkbox"][required]:checked').length === 0) {
  //     $('.js-error-required-checkbox').text('※少なくとも一つ選択してください');
  //     hasError = true;
  //   }

  //   // ラジオボタンのバリデーション
  //   $('input[type="radio"][required]').each(function() {
  //     var name = $(this).attr('name');
  //     if ($('input[name="' + name + '"]:checked').length === 0) {
  //       $('.js-error-required-radio').text('※選択してください');
  //       hasError = true;
  //     }
  //   });

  //   // 個人情報取扱いのチェックボックスバリデーション
  //   // 他のチェックボックスとはnameを変える。
  //   if (!$('input[name="privacy-policy-agreement"]:checked').length) {
  //     $('.js-error-required-agreement').text('※個人情報保護方針に同意してください。');
  //     hasError = true;
  //   }

  //   // エラーがある場合は送信ボタンを非アクティブに
  //   if (hasError) {
  //     $('#js-submit').addClass('disabled').prop('disabled', true);
  //     return false; // バリデーション失敗
  //   } else {
  //     $('#js-submit').removeClass('disabled').prop('disabled', false);
  //     return true; // バリデーション成功
  //   }
  //   }

  //   // 送信ボタンクリック時の処理
  //   $('#js-submit').click(function(e) {
  //     e.preventDefault(); // フォームの送信を一時停止
  //     if (validateForm()) {
  //       // バリデーションが成功した場合、フォームを送信
  //       $('#contact-form').submit(); // ここでフォームのIDを正確に指定する
  //     }
  // });

  // // 入力フィールドの変更を監視し、エラー状態をリセット
  // // 何も入力せずに送信ボタンを押した時だけでなく、各項目に入力があるか無いかを監視し、状態が変わったら都度関ししてエラーを出すため。
  // $('input, textarea, select').on('change input', function() {
  //   validateForm(); // フォームのバリデーションを再実行
  // });

});//この閉じタグは消さない！！！！！




