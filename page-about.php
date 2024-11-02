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
          <div class="about">
            <div class="wrap">
              <div class="title-box">
                <h1 class="title athelas-reg">About</h1>
              </div>
              <div class="contents">
                <div class="img"><img class="js-rellax" data-rellax-speed="1" data-rellax-percentage="0.5" data-rellax-zindex="2" src="<?php echo get_template_directory_uri(); ?>/img/about/Group 657.jpg" alt="服部 翔太"></div>
                <div class="txt-box">
                  <div class="txt-box1">
                    <p class="txt1 athelas-bold">Profile</p>
                  </div>
                  <div class="txt-box2">
                    <div class="t-title">
                      <p class="title">名前</p>
                    </div>
                    <div class="t-txt-box fadein">
                      <p class="txt1">服部 翔太（はっとり しょうた）</p>
                    </div>
                  </div>
                  <div class="txt-box2">
                    <div class="t-title">
                      <p class="title">経歴</p>
                    </div>
                    <div class="t-txt-box fadein">
                      <p class="txt1">市立藻岩高等学校　卒業</p>
                      <p class="txt1">北海学園大学経営学部経営学科　在学</p>
                    </div>
                  </div>
                  <div class="txt-box2">
                    <div class="t-title">
                      <p class="title">これまでどんな業務をしてきたか</p>
                    </div>
                    <div class="t-txt-box fadein">
                      <p class="txt1">これまでは基本的に個人で、事業者様からの依頼や制作会社様から依頼を受けてサイト制作などを請け負って参りました。非常にたくさんの方々とお仕事をさせて頂いた中で、様々な開発スタイルがあることを知り、自分の知識としてたくさんの事を学ばせて頂きました。規模の大きいサイトの場合は複数人で開発を行うなど、そこではチーム開発の難しさなども痛感致しました。</p>
                    </div>
                  </div>
                  <div class="txt-box2">
                    <div class="t-title">
                      <p class="title">デザイナー・エンジニアになった経緯</p>
                    </div>
                    <div class="t-txt-box fadein">
                      <p class="txt1">私自身文系学部出身であるゆえ、「なぜプログラミングを勉強し、実際に業務を行なっているのか」という点について疑問を持たれた方もいらっしゃるかと思います。</p>
                      <p class="txt1">その理由はただ一つ、<span class="bold underline">モノを作るのが楽しいと思った</span>からです。<br></p>
                      <p class="txt1">すでに世の中は大量のWebサービス、アプリというもので溢れかえっています。すなわちそのようなサービスを作るニーズというのは当然高まっているということであり、今後もそういった人材は必要とされることかと思います。</p>
                      <p class="txt1">文系であるからといってプログラミングのような、専門外の領域について学ぶことがいけないなんてことはないと思います。「であればどうやってそういったサービスが作られているのか、少し勉強してみよう」そう思ったのがプログラミングに触れたきっかけになります。</p>
                      <p class="txt1">そうしてある程度勉強していく中で、自分の今の技術が仕事として使えるものであるということを知りました。はじめはそこまで技術として身につけられるのかと思っていましたが、様々な案件に携わらせていただくことでそれが徐々に自信となっていきました。</p>
                      <p class="txt1">当然初めはわからないことだらけで辛いと思うこともありましたが、デザインをしてコードを書いて実際にモノが出来上がるという過程は実に楽しく、とても夢中になれるモノでありました。そのため、<span class="bold">「これからもデザイナー・エンジニアとして仕事をしていこう」</span>という決意を抱くこととなりました。<br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('about'); ?>