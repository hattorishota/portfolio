    <footer class="footer">
        <p class="copyright athelas-bold">©︎  HATTORI SHOTA</p>
      </footer>
    </div>

    <!-- script area -->
    <script>
      // テキストエリア高さ自動調整
      let textarea = document.getElementById('message');

      //textareaのデフォルトの要素の高さを取得
      let clientHeight = textarea.clientHeight;

      //textareaのinputイベント
      textarea.addEventListener('input', ()=>{
          //textareaの要素の高さを設定（rows属性で行を指定するなら「px」ではなく「auto」で良いかも！）
          textarea.style.height = clientHeight + 'px';
          //textareaの入力内容の高さを取得
          let scrollHeight = textarea.scrollHeight;
          //textareaの高さに入力内容の高さを設定
          textarea.style.height = scrollHeight + 'px';
      });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fullpage.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script-under.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>
