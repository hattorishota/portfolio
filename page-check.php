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
          <div class="check">
            <div class="wrap">
              <div class="contents">
                <div class="title-box">
                  <h1 class="title athelas-reg">Contact</h1>
                </div>
                <div class="leading-box">
                  <p class="leading yu-gothic">確認画面</p>
                </div>
                <div class="form fadein">
                <?php the_content() ?>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('under'); ?>