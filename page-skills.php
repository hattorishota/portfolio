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

      <!-- tab navigation -->


      <!-- contents area -->
      <div class="under">
        <main class="main">
          <div class="skills">
            <div class="wrap">
              <div class="title-box">
                <h1 class="title athelas-reg">Skills</h1>
              </div>
              <div class="skills-tab">
                <div class="flex">
                  <p class="s-tab tab-all">
                    <span class="tab-cat">HTML&CSS</span>
                  </p>
                  <p class="s-tab tab-coding">
                    <span class="tab-cat">JavaScript</span>
                  </p>
                  <p class="s-tab tab-design">
                    <span class="tab-cat">PHP</span>
                  </p>
                  <p class="s-tab tab-design">
                    <span class="tab-cat">Ruby</span>
                  </p>
                  <p class="s-tab tab-design">
                    <span class="tab-cat">Python</span>
                  </p>
                  <p class="s-tab tab-design">
                    <span class="tab-cat">Design</span>
                  </p>
                  <p class="s-tab tab-design">
                    <span class="tab-cat">Tools</span>
                  </p>
                </div>
              </div>
              <div class="arrow">
                <div class="move">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/skills/arrow.png" alt="">
                </div>
              </div>
              <div class="content-area">
                <div class="content fadein html">
                  <p class="experience">経験年数：2~3年</p>
                  <div class="txt-box">
                    <p class="txt">
                      デザインに忠実なコーディングを心がけています。またCSSはSassでの記述がBEMなどの設計思想に基づき、保守性の高いコーディングを行うことができます。
                      またW3Cの文法に沿った正しいコーディングや各ページのtitle,discription,h1の最適化など、SEOの基礎と呼ばれる内部施策については標準で対応しています。
                    </p>
                  </div>
                </div>
                <div class="content fadein javascript">
                  <p class="experience">経験年数：2~3年</p>
                  <div class="txt-box">
                    <p class="txt">まずはWeb上でJavaScriptを用いる上で必ず使うことになる、動きをつけたサイトの制作が可能です。サイト制作をする上では基本的にjQueryを利用していましたが、プラグインなどを利用した際には生のJavaScriptを用いることもありました。他にはスライダーやタブ、ハンバーガーメニューといった基本的なコーディングも当然可能です。また開発系のフレームワークではVue.jsやReact.jsを利用することが可能です。</p>
                  </div>
                </div>
                <div class="content fadein php">
                  <p class="experience">経験年数：2年ほど</p>
                  <div class="txt-box">
                    <p class="txt">Webサイト制作を行う上では欠かせないWordPressでの制作が可能です。またLPなどでよく見られるような、PHPサーバーを利用したフォーム制作なども可能です。またフレームワークはLaravelとMySQLを使ったサービスの開発経験があります。</p>
                  </div>
                </div>
                <div class="content fadein ruby">
                  <p class="experience">経験年数：3ヶ月ほど</p>
                  <div class="txt-box">
                    <p class="txt">開発において重要なバックエンドを担うRuby on Railsでの開発が可能です。</p>
                  </div>
                </div>
                <div class="content fadein python">
                  <p class="experience">経験年数：2ヶ月ほど</p>
                  <div class="txt-box">
                    <p class="txt">Webサイトから情報を抽出するスクレイピングやInstagramでの自動いいねツールの作成といった、主にマーケティングの分野で用いられるような開発の経験があります。また競馬予想AIや競輪予想AIなどのモデル開発の経験があります。</p>
                  </div>
                </div>
                <div class="content fadein design">
                  <p class="experience">経験年数：6ヶ月~1年ほど</p>
                  <div class="txt-box">
                    <p class="txt">ユーザーが一番目に触れる部分であるデザインの制作を行います。当然、PCからレスポンシブまで考慮したデザインをさせていただきます。Photoshop, Illustrator, XD, Figmaといったツールでの制作が可能です。</p>
                  </div>
                </div>
                <div class="content fadein tools">
                  <div class="txt-box">
                    <p class="txt">ソースコード管理：Github, Backlog</p>
                    <p class="txt">Git GUI：Sourcetree</p>
                    <p class="txt">DB：MySQL</p>
                    <p class="txt">DB GUI：Sequel Pro</p>
                    <p class="txt">FTP：Filezila</p>
                    <p class="txt">エディタ：Visual Studio Code</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('under'); ?>
