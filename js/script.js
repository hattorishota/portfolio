/*----------------------------------------------------
script.js
----------------------------------------------------*/

/*jQuery start--------------------------------------------*/
$(function () {

  // カーソル変更
  var cursor = $("#cursor");
  $(document).on("mousemove",function(e){
    var x = e.clientX;
    var y = e.clientY;
    cursor.css({
      "opacity": "0.8",
      "top": y + "px",
      "left": x + "px"
    });
  });
  $("a").on({
    "mouseenter": function() {
      cursor.addClass("active");
    },
    "mouseleave": function() {
      cursor.removeClass("active");
    }
  });
  
  // ハンバーガーメニュー
  var state = false;
  var pos;
  $(".burger-btn").click(function () {
    $(".burger-btn").toggleClass("close");
    $(".nav-wrapper").toggleClass("fade");

    if ($("body").hasClass("top")) {
      $("html, body").toggleClass("fixed");
    }

    // ハンバーガーアイコン押した時に上に戻らない
    if (state == false) {
      pos = $(window).scrollTop();
      $("body").addClass("fixed").css({ top: - pos });
      state = true;
    } else {
      $("body").removeClass("fixed").css({ top: 0 });
      window.scrollTo(0, pos);
      state = false;
    }
  });

  // fullPage.js
  $("#fullpage").fullpage({
    
    // menu
    menu: "#top-menu",
    anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
    navigation: true,
    navigationPosition: "left",

    // scroll
    scrollOverflow: true,
    scrollingSpeed: 1500,
    fitToSectionDelay: 2000,

    // timing → scroll end
    afterLoad: function (anchorLink, afterIndex) {
      pagerCurrent(afterIndex);
    }
  });
  
  // indexの値によって各フェードアウト
  function pagerCurrent(afterIndex) {
    // fv
    if (afterIndex.index === 0){
      $('#fp-nav').css('opacity', '0');
      $('.header').css('opacity', '0');
      $('#fp-nav').css('z-index', '-1');
      $('.header').css('z-index', '-1');
      $('.section .fv').css('opacity', '1');
    } else {
      $('#fp-nav').css('opacity', '1');
      $('.header').css('opacity', '1');
      $('#fp-nav').css('z-index', '1');
      $('.header').css('z-index', '2');
      $('.section .fv').css('opacity', '0');
    }
    // about
    if (afterIndex.index === 1){
      $('.section .about .wrap').css('opacity', '1');
    } else {
      $('.section .about .wrap').css('opacity', '0');
    }
    // works
    if (afterIndex.index === 2){
      $('.section .works .wrap').css('opacity', '1');
      $('.section .works .nav-round').css('opacity', '1');
    } else {
      $('.section .works .wrap').css('opacity', '0');
      $('.section .works .nav-round').css('opacity', '0');
    }
    // skills
    if (afterIndex.index === 3){
      $('.section .skills .wrap').css('opacity', '1');
    } else {
      $('.section .skills .wrap').css('opacity', '0');
    }
    // contact
    if (afterIndex.index === 4){
      $('.section .contact .wrap').css('opacity', '1');
    } else {
      $('.section .contact .wrap').css('opacity', '0');
    }

    if ($(window).width() < 600) {
      // fv
      if (afterIndex.index === 0) {

      }
      // about
      if (afterIndex.index === 1) {
        $('#fp-nav .ul li').removeClass('n-out')
        $('#fp-nav .ul li').removeClass('n-in')
        $('#fp-nav .ul li').eq(0).addClass('n-out');
        $('#fp-nav .ul li').eq(1).addClass('n-in');
        $('#fp-nav .ul li').eq(2).addClass('n-out');
        $('#fp-nav .ul li').eq(3).addClass('n-out');
        $('#fp-nav .ul li').eq(4).addClass('n-out');
      }
      // works
      if (afterIndex.index === 2) {
        $('#fp-nav .ul li').removeClass('n-out')
        $('#fp-nav .ul li').removeClass('n-in')
        $('#fp-nav .ul li').eq(0).addClass('n-out');
        $('#fp-nav .ul li').eq(1).addClass('n-out');
        $('#fp-nav .ul li').eq(2).addClass('n-in');
        $('#fp-nav .ul li').eq(3).addClass('n-out');
        $('#fp-nav .ul li').eq(4).addClass('n-out');
      }
      // skills
      if (afterIndex.index === 3) {
        $('#fp-nav .ul li').removeClass('n-out')
        $('#fp-nav .ul li').removeClass('n-in')
        $('#fp-nav .ul li').eq(0).addClass('n-out');
        $('#fp-nav .ul li').eq(1).addClass('n-out');
        $('#fp-nav .ul li').eq(2).addClass('n-out');
        $('#fp-nav .ul li').eq(3).addClass('n-in');
        $('#fp-nav .ul li').eq(4).addClass('n-out');
      }
      // contact
      if (afterIndex.index === 4) {
        $('#fp-nav .ul li').removeClass('n-out')
        $('#fp-nav .ul li').removeClass('n-in')
        $('#fp-nav .ul li').eq(0).addClass('n-out');
        $('#fp-nav .ul li').eq(1).addClass('n-out');
        $('#fp-nav .ul li').eq(2).addClass('n-out');
        $('#fp-nav .ul li').eq(3).addClass('n-out');
        $('#fp-nav .ul li').eq(4).addClass('n-in');
      }
    }
    console.log(afterIndex);
  }

  // Inview.js
  $(".fadein").on("inview", function (event, isInView) {
    $(this).addClass("scrollin");
  });
  $(".fadein2").on("inview", function (event, isInView) {
    $(this).addClass("scrollin");
  });

  // Worksタブ
  let w_tabs = $(".w-tab");
  let w_res = $(".w-res");
  $(".content-area .content").hide();
  $(".tab-all").addClass("active");
  $(".w-res.tab-all").addClass("active");
  $(".content-area .all").removeClass("show").addClass("show").fadeIn();

  if ($(window).width() < 900) {
    $(".w-res").on("click", function () {
      $(".active").removeClass("active");
      $(this).addClass("active");
      const index = w_res.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
      $(".content-area .content").removeClass("show").eq(index).addClass("show").fadeIn();
    });
  } else {
    $(".w-tab").on("click", function () {
      $(".active").removeClass("active");
      $(this).addClass("active");
      const index = w_tabs.index(this);
      $(".content-area .content").removeClass("show").eq(index).addClass("show").fadeIn();
    });
  }

  // Skillsタブ
  let s_tabs = $(".s-tab");
  $(".content-area .content").hide();
  $(".skills-tab .tab-all").addClass("active");
  $(".content-area .html").removeClass("show").addClass("show").fadeIn();
  $(".s-tab").on("click", function () {
    $(".active").removeClass("active");
    $(this).addClass("active");
    const index = s_tabs.index(this);
    $(".content-area .content").removeClass("show").eq(index).addClass("show").fadeIn();
  });

  // ナビゲーション
  $("#fp-nav ul").attr("class", "ul");
  $("#fp-nav ul li").eq(0).attr("id", "first");
  $("#fp-nav ul li").eq(1).attr("id", "second");
  $("#fp-nav ul li").eq(2).attr("id", "third");
  $("#fp-nav ul li").eq(3).attr("id", "fourth");
  $("#fp-nav ul li").eq(4).attr("id", "fivth");
  $("#first a").prepend('<p class="sec">Home</p>');
  $("#second a").prepend('<p class="sec">About</p>');
  $("#third a").prepend('<p class="sec">Works</p>');
  $("#fourth a").prepend('<p class="sec">Skills</p>');
  $("#fivth a").prepend('<p class="sec">Contact</p>');
});
/*Query end--------------------------------------------*/

// loading画面
var bar = new ProgressBar.Line(loader_bar, {
  //id名を指定
  easing: "easeInOut", //アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
  duration: 3000, //時間指定(1000＝1秒)
  strokeWidth: 0.2, //進捗ゲージの太さ
  color: "#fff", //進捗ゲージのカラー
  trailWidth: 0.1, //ゲージベースの線の太さ
  trailColor: "#000", //ゲージベースの線のカラー
  text: {
    style: {
      position: "absolute",
      left: "50%",
      top: "50%",
      padding: "0",
      transform: "translate(-50%,-50%)",
      "font-size": "1rem",
      color: "#fff",
      "font-family": "athelas, serif",
      "font-weight": "400",
      "font-style": "normal",
    },
    autoStyleContainer: false, //自動付与のスタイルを切る
  },
  step: function (state, bar) {
    bar.setText(Math.round(bar.value() * 100) + " %"); //テキストの数値
  },
});
bar.animate(1.0, function () {
  //バーを描画する割合 1.0→100%
  $("#loader_bar").fadeOut(10);
  $(".loader_cover-up").addClass("coveranime");
  $(".loader_cover-down").addClass("coveranime");
  $("#loader").fadeOut();
});

// Particles.js
particlesJS("particles-js", {
  particles: {
    number: {
      value: 200, //この数値を変更すると星の数が増減できる
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: "#ffffff",
    },
    shape: {
      type: "circle", //形状はcircleを指定
      stroke: {
        width: 0,
      },
    },
    opacity: {
      value: 1, //シェイプの透明度
      random: true, //シェイプの透明度をランダムにする
      anim: {
        enable: true, //シェイプの透明度をアニメーションさせる
        speed: 3, //シェイプの透明度をアニメーションさせる
        opacity_min: 0, //透明度の最小値０
        sync: false, //全てを同時にアニメーションさせない
      },
    },
    size: {
      value: 2,
      random: true,
      anim: {
        enable: false,
        speed: 4,
        size_min: 0.3,
        sync: false,
      },
    },
    line_linked: {
      enable: false,
    },
    move: {
      enable: true,
      speed: 120, //この数値を小さくするとゆっくりな動きになる
      direction: "none", //方向指定なし
      random: true, //動きはランダムに
      straight: true, //動きをとどめる
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 600,
      },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: false,
      },
      onclick: {
        enable: false,
      },
      resize: true,
    },
  },
  retina_detect: true,
});

// Swiper
const swiper = new Swiper(".swiper", {
  effect: "cube",
  spaceBetween: 30,
  loop: true,
  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});