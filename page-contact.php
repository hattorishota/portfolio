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
          <div class="contact">
            <div class="wrap">
              <div class="title-box">
                <h1 class="title athelas-reg">Contact</h1>
              </div>
              <div class="contents">
                <div class="cover1">
                  <div class="open-box">
                    <div class="open-day yu-gothic"><p>営業日について</p></div>
                    <div class="calendar-box">
                      <!-- カレンダー -->
                      <div class="c-box1">
                        <p id="c-header">2022年 3月</p>
                        <div class="c-check">
                          <div class="c-1">
                            <div class="off square"></div>
                            <span>休日</span>
                          </div>
                        </div>
                      </div>
                      <div class="calendar">
                        <table>
                          <tbody>
                            <tr class="dayOfWeek">
                              <th>土</th>
                              <th>月</th>
                              <th>火</th>
                              <th>水</th>
                              <th>木</th>
                              <th>金</th>
                              <th>土</th>
                            </tr>
                            <tr>
                              <td class="disabled">27</td>
                              <td class="disabled">28</td>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                              <td>5</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>7</td>
                              <td>8</td>
                              <td>9</td>
                              <td>10</td>
                              <td>11</td>
                              <td>12</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>14</td>
                              <td>15</td>
                              <td>16</td>
                              <td>17</td>
                              <td>18</td>
                              <td>19</td>
                            </tr>
                            <tr>
                              <td>20</td>
                              <td>21</td>
                              <td>22</td>
                              <td>23</td>
                              <td>24</td>
                              <td>25</td>
                              <td>26</td>
                            </tr>
                            <tr>
                              <td>27</td>
                              <td>28</td>
                              <td>29</td>
                              <td>30</td>
                              <td>31</td>
                              <td class="disabled">1</td>
                              <td class="disabled">2</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="attention">
                    <p class="txt yu-gothic">制作案件の進行を優先するため、特に定期的な休業日は定めておりません。</p>
                    <p class="txt yu-gothic">事前に把握できる場合やまとまったお休みを頂く場合はこちらでお知らせいたします。</p>
                  </div>
                </div>
                <div class="cover2">
                  <div class="cover">
                    <p class="txt1 yu-gothic fadein">下記メールアドレスまたはフォームより<br class="sp-only-600">お問い合わせください。</p>
                    <div class="txt-box fadein">
                      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/mail.png" alt=""></div>
                      <a href="" class="athelas-reg">hshota.27@gmail.com</a>
                    </div>
                    <div class="attention fadein">
                      <p class="txt yu-gothic">翌営業日までにご返答いたします。下記営業日カレンダーもご確認ください。</p>
                      <p class="txt yu-gothic">もし返信がない場合は「迷惑メール」フォルダもご確認ください。</p>
                      <p class="txt yu-gothic">圧縮ファイルなどが添付されているメールには返信しておりません。</p>
                    </div>
                  </div>
                </div>
                <div class="form fadein">
                  <div class="form-title-box">
                    <p class="form-title yu-gothic">お問い合わせ</p>
                  </div>
                  <?php the_content() ?>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('contact'); ?>