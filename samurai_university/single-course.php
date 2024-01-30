<?php get_header(); ?>

<!-- Home -->

<div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div>Courses</div>
        <div>コース</div>
      </div>
    </div>
  </div>
</div>

<!-- Course -->

<div class="course">
  <div class="row content-body">
    <!-- Course -->
    <div class="col-lg-8">
      <!-- Course Tabs -->
      <div class="course_tabs_container">
        <div class="tab_panels">
          <!-- Description -->
          <div class="tab_panel">

            <!-- <div class="tab_panel_title">教育学部</div> -->
            <!-- タイトルを取得 -->
            <div class="tab_panel_title"><?php the_title(); ?></div>

            <div class="tab_panel_header">
            </div>
            <div class="tab_panel_content">

              <!-- <div class="course_image"><img src="images/PIC6-3.jpg" alt=""></div> -->
              <div class="course_image">
                <!-- アイキャッチ画像を取得　large＝大きい -->
                <?php the_post_thumbnail('large'); ?>

              </div>
              <div class="tab_panel_text">
                <p>
                  <!-- 広い視野とコミュニケーションスキルを持つ、世界に通用する教育者を育成します。 -->
                  <!-- 内容を取得 -->
                  <?php the_content(); ?>

                </p>
              </div>
              <div class="campus_footer_content d-flex flex-row align-items-center justify-content-start">
                <!-- <img src="images/clock.png"><span>2019/4/23</span> -->
                <!-- 時計のイラストを投稿年月日を表示 -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png"><span><?php the_time('Y年n月j日'); ?></span>

              </div>
              <hr>
              <div class="social_share">
                <!-- <img src="images/facebook-square-brands.png" alt=""> -->
                <!-- <img src="images/twitter-square-brands.png" alt=""> -->
                <!-- 画像リンク修正 -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course Sidebar -->
    <div class="col-lg-4" style="background-color: #2b7b8e33">

      <!-- htmlのサイドバーを消去、書き換え -->
      <?php get_sidebar(); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>