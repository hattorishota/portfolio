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
      $("body").addClass("fixed").css({ top: -pos });
      state = true;
    } else {
      $("body").removeClass("fixed").css({ top: 0 });
      window.scrollTo(0, pos);
      state = false;
    }
  });

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

  if ($(window).width() < 1250) {
    $(".w-res").on("click", function () {
      $(".active").removeClass("active");
      $(this).addClass("active");
      // クリックした箇所がタブの何番目か判定し、定数indexとして定義
      const index = w_res.index(this);
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

// rellax.js
const rellax = new Rellax('.js-rellax');