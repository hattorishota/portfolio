<!DOCTYPE html>
<html lang="ja">
  <head>
    <?php
      /**
       * The main template file
       *
       */
      get_header();
    ?>
  </head>
  <body>
        
    <!-- cursor area -->
    <div id="cursor" class="cursor"></div>
    <!-- cursor area -->

    <div class="wrapper">
      <!-- header area -->
      <?php get_header('tmp2') ?>
      <!-- header area -->

      <!-- contents area -->
      <div class="under">
        <main class="main">
          <div class="thanks">
            <div class="wrap">
              <div class="contents">
                <div class="leading-box">
                  <p class="leading yu-gothic">送信完了</p>
                </div>
                <div class="txt-box fadein">
                  <p class="txt1 yu-gothic">
                    この度はお問い合わせメールを<br>
                    お送りいただきありがとうございます。
                  </p>
                  <p class="txt2 yu-gothic">
                    確認のためお客様へ自動返信メールを<br class="sp-only-600">お送りさせていただきました。<br>
                    後ほどご連絡をさせていただきます。
                  </p>
                </div>
                <div class="home fadein">
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact/home.png" alt="">
                  </div>
                  <a href="<?php echo home_url() ?>" class="yu-gothic">HOMEへ戻る</a>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('under'); ?>