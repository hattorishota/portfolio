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
  <body class="top">

    <!-- cursor area -->
    <div id="cursor" class="cursor"></div>
    <!-- cursor area -->

    <!-- front area -->
    <div class="wrapper">
      
      <!-- loading area -->
      <div id="loader">
        <div id="loader_bar"></div>
        <div class="loader_cover loader_cover-up"></div>
        <div class="loader_cover loader_cover-down"></div>
      </div>

      <!-- background area -->
      <div id="particles-js">

      </div>
      <!-- background area -->

      <!-- header area -->
      <?php get_header('tmp1') ?>
      <!-- header area -->

      <!-- fullPage area -->
      <main class="fullpage-wrap">
        
        <div id="fullpage">

          <!-- fv -->
          <section class="section first">
            <div class="slide fv">
              <div class="txt-box">
                <h1 class="name athelas-bold">HATTORI SHOTA</h1>
                <p class="position athelas-reg">WEB DEVELOPPER</p>
              </div>
              <div class="scrolldown">
                <div class="arrow-box">
                  <div class="arrow arrow1"><img src="<?php echo get_template_directory_uri(); ?>/img/top/arrow.png" alt=""></div>
                  <div class="arrow arrow2"><img src="<?php echo get_template_directory_uri(); ?>/img/top/arrow.png" alt=""></div>
                  <div class="arrow arrow3"><img src="<?php echo get_template_directory_uri(); ?>/img/top/arrow.png" alt=""></div>
                </div>
                <div class="line"></div>
              </div>
            </div>
          </section>

          <!-- about -->
          <section class="section bg-black btn-show">
            <div class="even about">
              <div class="wrap">
                <div class="flex">
                  <div class="txt-box">
                    <p class="txt1 athelas-bold">Profile</p>
                    <p class="txt2 yu-gothic">服部翔太（はっとりしょうた）</p>
                    <p class="txt3 yu-gothic">
                      はじめまして。<br>
                      北海道札幌市出身、都内在住の23歳です。<br>
                      趣味は野球、ゴルフ、スキー、ゲームなど...その他諸々です。
                    </p>
                    <p class="txt4 yu-gothic">
                      新卒で株式会社クラウドワークスに入社し、普段はVueやTypeScript、Railsなどを触っています。<br>
                      お客様に寄り添い、納得されるまでしっかりと責任感を持ってお仕事をさせていただきます。
                    </p>
                  </div>
                  <div class="img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/Group 657.jpg" alt="">
                  </div>
                </div>
                <!-- <div class="more"><a href="<?php echo home_url('about') ?>" class="athelas-reg">More profile</a></div> -->
              </div>
            </div>
          </section>

          <!-- works -->
          <section class="section bg-black">
            <div class="odd works">
              <div class="wrap">
                <h2 class="works__title athelas-bold">Works</h2>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <?php
                      $args = array(
                        'post_type' => 'works_post',
                        'posts_per_page' => -1,
                      );
                      $news_query = new WP_Query( $args );
                      if ( $news_query->have_posts() ): 
                        while ( $news_query->have_posts() ): 
                          $news_query->the_post(); 
                    ?>
                    <div class="swiper-slide">
                      <a href="<?php echo get_permalink($post->ID); ?>">
                        <!-- <p class="cat athelas-bold"><?php echo get_the_title($post->ID); ?>様</p> -->
                        <div class="img">
                        <img src="<?php the_field('work-thumb'); ?>">
                        </div>
                      </a>
                    </div>
                    <?php 
                      endwhile;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </div>
                </div>
                <div class="flex">
                  <div class="swiper-button-prev nav-round sp-only-900"></div>
                  <div class="swiper-button-next nav-round sp-only-900"></div>
                </div>
                <div class="more"><a href="<?php echo home_url('works') ?>" class="athelas-reg">More works</a></div>
                <!-- <p class="works__attention">※当ポートフォリオも実績の一つと考えておりますので、<br>よくご覧いただければと思います。</p> -->
              </div>
              <div class="swiper-button-prev nav-round pc-only-900"></div>
              <div class="swiper-button-next nav-round pc-only-900"></div>
            </div>
          </section>

          <!-- skills -->
          <section class="section">
            <div class="even skills">
              <div class="wrap">
                <p class="s-title athelas-bold">Skills</p>
                <div class="txt-box">
                  <p class="language athelas-bold">Design</p>
                  <p class="level athelas-reg">
                    PCからレスポンシブまで、ユーザーの視点に立ったデザインを行います。ツールとしてはPhotoshopやXD、Figmaを利用します。
                  </p>
                </div>
                <div class="txt-box">
                  <p class="language athelas-bold">JavaScript</p>
                  <p class="level athelas-reg">
                    サイト制作においてjQueryなどのライブラリを使用した制作が可能です。また、VueやReactといったフレームワークを利用したWebサービスの開発も可能です。
                  </p>
                </div>
                <div class="txt-box">
                  <p class="language athelas-bold">PHP</p>
                  <p class="level athelas-reg">
                    Webサイト制作を行う上では欠かせないWordPressでの制作が可能です。またLPなどでよく見られるような、PHPサーバーを利用したフォーム制作なども可能です。
                  </p>
                </div>
                <div class="more"><a href="<?php echo home_url('skills') ?>" class="athelas-reg">More skills</a></div>
              </div>
            </div>
          </section>

          <!-- contact -->
          <section class="section bg-black">
            <div class="odd contact">
              <div class="wrap">
                <p class="txt1 yu-gothic">
                  お気軽に下記メールアドレスからご連絡ください。<br>
                  <a href="<?php echo home_url('contact') ?>" class="border">こちら</a>から営業日などの確認が可能です。
                </p>
                <div class="txt-box">
                  <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/mail.png" alt=""></div>
                  <a href="mailto:hattorishota.27@gmail.com" class="athelas-reg">hattorishota.27@gmail.com</a>
                </div>
                <p class="txt2 yu-gothic">
                  翌営業日までに返信いたします。<br>
                  もし返信がない場合、お手数おかけいたしますが<br>
                  <a href="<?php echo home_url('contact') ?>" class="border">こちら</a>の問い合わせフォームからもご連絡いただけますと幸いです。
                </p>
              </div>
              <div class="footer">
                <p class="copyright athelas-bold">©︎  HATTORI SHOTA</p>
              </div>
            </div>
          </section>
        </div>
      </main>
      <!-- fullPage area -->

    </div>

    <?php get_footer(); ?>