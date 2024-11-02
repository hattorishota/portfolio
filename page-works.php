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
      <div class="works-tab pc-only-1250">
        <p class="w-tab tab-all">
          <span class="tab-cat">All</span>
          <span class="round"></span>
        </p>
        <p class="w-tab tab-coding">
          <span class="tab-cat">Coding</span>
          <span class="round"></span>
        </p>
        <p class="w-tab tab-design">
          <span class="tab-cat">Design</span>
          <span class="round"></span>
        </p>
        <p class="w-tab tab-apps">
          <span class="tab-cat">Web App</span>
          <span class="round"></span>
        </p>
      </div>

      <!-- contents area -->
      <div class="under">
        <main class="main">
          <div class="works">
            <div class="wrap">
              <div class="title-box">
                <h1 class="title athelas-reg">Works</h1>
              </div>
              <div class="tab-box sp-only-1250">
                <div class="works-tab">
                  <p class="w-tab w-res tab-all">
                    <span class="tab-cat">All</span>
                    <span class="round"></span>
                  </p>
                  <p class="w-tab w-res tab-coding">
                    <span class="tab-cat">Coding</span>
                    <span class="round"></span>
                  </p>
                  <p class="w-tab w-res tab-design">
                    <span class="tab-cat">Design</span>
                    <span class="round"></span>
                  </p>
                  <p class="w-tab w-res tab-apps">
                    <span class="tab-cat">Web App</span>
                    <span class="round"></span>
                  </p>
                </div>
              </div>
              <div class="content-area">
                <div class="content all">
                  <ul class="flex">
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
                    <li class="card fadein">
                      <a href="<?php echo get_permalink($post->ID); ?>">
                        <div class="img">
                          <?php if( get_field('work-thumb') ) { ?>
                            <img src="<?php the_field('work-thumb'); ?>">
                          <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works/Rectangle 903.png" alt="">
                          <?php } ?>
                        </div>
                      </a>
                      <p class="cat athelas-reg">
                        <?php
                          if ($terms = get_the_terms($post->ID, 'works_tag')) {
                            foreach ($terms as $term) {
                              echo '<span class="tag ' . $term->slug .'">' . $term->name . '</span>';
                            }
                          }
                        ?>
                      </p>
                      <p class="name yu-gothic"><?php echo get_the_title($post->ID); ?></p>
                    </li>
                    <?php 
                      endwhile;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>
                <div class="content coding">
                  <ul class="flex">
                    <?php
                    $args = array(
                      'post_type' => 'works_post',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'works_cat',
                            'field' => 'slug',
                            'terms' => array(
                              'coding'
                            ),
                        ),
                      ),
                    );
                    $news_query = new WP_Query( $args );
                    if ( $news_query->have_posts() ): 
                      while ( $news_query->have_posts() ): 
                        $news_query->the_post(); 
                    ?>
                    <li class="card fadein">
                      <a href="<?php echo get_permalink($post->ID); ?>">
                        <div class="img">
                          <?php if( get_field('work-thumb') ) { ?>
                            <img src="<?php the_field('work-thumb'); ?>">
                          <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works/Rectangle 903.png" alt="">
                          <?php } ?>
                        </div>
                      </a>
                      <p class="cat athelas-reg">
                      <?php
                        if ($terms = get_the_terms($post->ID, 'works_tag')) {
                          foreach ($terms as $term) {
                            echo '<span class="tag ' . $term->slug .'">' . $term->name . '</span>';
                          }
                        }
                      ?>
                      </p>
                      <p class="name yu-gothic"><?php echo get_the_title($post->ID); ?></p>
                    </li>
                    <?php 
                      endwhile;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>
                <div class="content design">
                  <ul class="flex">
                    <?php
                    $args = array(
                      'post_type' => 'works_post',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'works_cat',
                            'field' => 'slug',
                            'terms' => array(
                              'design'
                            ),
                        ),
                      ),
                    );
                    $news_query = new WP_Query( $args );
                    if ( $news_query->have_posts() ): 
                      while ( $news_query->have_posts() ): 
                        $news_query->the_post(); 
                    ?>
                    <li class="card fadein">
                      <a href="<?php echo get_permalink($post->ID); ?>">
                        <div class="img">
                          <?php if( get_field('work-thumb') ) { ?>
                            <img src="<?php the_field('work-thumb'); ?>">
                          <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works/Rectangle 903.png" alt="">
                          <?php } ?>
                        </div>
                      </a>
                      <p class="cat athelas-reg">
                      <?php
                        if ($terms = get_the_terms($post->ID, 'works_tag')) {
                          foreach ($terms as $term) {
                            echo '<span class="tag ' . $term->slug .'">' . $term->name . '</span>';
                          }
                        }
                      ?>
                      </p>
                      <p class="name yu-gothic"><?php echo get_the_title($post->ID); ?></p>
                    </li>
                    <?php 
                      endwhile;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>
                <div class="content apps">
                  <ul class="flex">
                    <?php
                    $args = array(
                      'post_type' => 'works_post',
                      'posts_per_page' => -1,
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'works_cat',
                            'field' => 'slug',
                            'terms' => array(
                              'app'
                            ),
                        ),
                      ),
                    );
                    $news_query = new WP_Query( $args );
                    if ( $news_query->have_posts() ): 
                      while ( $news_query->have_posts() ): 
                        $news_query->the_post(); 
                    ?>
                    <li class="card fadein">
                      <a href="<?php echo get_permalink($post->ID); ?>">
                        <div class="img">
                          <?php if( get_field('work-thumb') ) { ?>
                            <img src="<?php the_field('work-thumb'); ?>">
                          <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/works/Rectangle 903.png" alt="">
                          <?php } ?>
                        </div>
                      </a>
                      <p class="cat athelas-reg">
                      <?php
                        if ($terms = get_the_terms($post->ID, 'works_tag')) {
                          foreach ($terms as $term) {
                            echo '<span class="tag ' . $term->slug .'">' . $term->name . '</span>';
                          }
                        }
                      ?>
                      </p>
                      <p class="name yu-gothic"><?php echo get_the_title($post->ID); ?></p>
                    </li>
                    <?php 
                      endwhile;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>
              </div>
              <div class="stack fadein">
                <div class="total">
                  <p class="txt yu-gothic">
                    これまでの制作実績：<br class="sp-only-600">
                    LP <span class="big bold">18</span> 件 / コーポレートサイト(WordPress) <span class="big bold">22</span>件</p>
                  <p class="txt yu-gothic">※2023/05/01 現在</p>
                </div>
                <div class="attention">
                  <p class="txt yu-gothic">*この他にクライアント様のご都合で実績紹介できないものもございます。</p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <!-- contents area -->

      <?php get_footer('under'); ?>