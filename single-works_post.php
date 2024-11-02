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
          <div class="work">
            <div class="wrap">
              <div class="title-box">
                <h1 class="title athelas-reg">Works</h1>
              </div>
              <div class="contents yu-gothic">
                <div class="name">
                  <p class="title bold"><span><?php the_title(); ?></span></p>
                  <a href="<?php the_field('work_link'); ?>" class="url fadein" target="_blank"><?php the_field('work_link'); ?></a>
                </div>
                <div class="img fadein">
                  <?php if( get_field('work-thumb') ) { ?>
                    <img src="<?php the_field('work-thumb'); ?>">
                  <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/works/Rectangle 903.png" alt="">
                  <?php } ?>
                </div>
                <div class="scope">
                  <p class="title fadein">担当範囲</p>
                  <p class="part fadein"><?php the_field('scope'); ?></p>
                </div>
                <div class="txt-box fadein">
                  <div class="txt">
                  <?php the_content(); ?>
                  </div>
                </div>
              </div>
              <div class="nav-btn"><a href="<?php echo home_url('works') ?>" class="yu-gothic">一覧に戻る</a></div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('under'); ?>