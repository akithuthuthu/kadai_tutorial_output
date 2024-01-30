      <?php get_header(); ?>

      <!-- Home -->

      <div class="home">
         <div class="breadcrumbs_container">
            <div class="image_header">
               <div class="header_info">
                  <!--書き換え2 -->
                  <!-- <div>news</div> -->
                  <!-- <div>ニュース</div> -->
                  <!-- get_the_category()で取得したカテゴリー情報から、
                  スラッグ（event）とカテゴリ名（イベント）を取り出して表示 -->
                  <?php
                  $cat = get_the_category();
                  $catslug = $cat[0]->slug;
                  $catname = $cat[0]->cat_name;
                  ?>
                  <div>
                     <?php echo $catslug; ?>
                  </div>
                  <div>
                     <?php echo $catname; ?>
                  </div>
                  <!-- 書き換え2終わり -->
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
                        <div class="tab_panel_title">
                           <!-- ニュース</div> -->
                           <!-- $catnameから呼び出し -->
                           <?php echo $catname; ?>
                        </div>

                        <div class="tab_panel_content">
                           <div class="tab_panel_text">

                              <!-- news loop from here-->
                              <!-- ここから書き換え -->
                              <!-- 投稿があるかチェックする -->
                              <?php if (have_posts()) : ?>
                                 <!-- while：条件を満たす間同じ処理を繰り返す・・
                              投稿があれば取得する？ -->
                                 <?php while (have_posts()) : the_post(); ?>
                                    <!-- もとからあるhtml -->
                                    <div class="news_posts_small">
                                       <div class="row">
                                          <div class="col-lg-2 col-md-2 col-sx-12">
                                             <div class="calendar_news_border">
                                                <div class="calendar_news_border_1">
                                                   <!-- ここからまた書き換え -->
                                                   <div class="calendar_month">
                                                      <!-- OCT -->
                                                      <!-- 投稿日（F=月）を取得 -->
                                                      <!-- 変更２回目 
                                                      ?php echo get_post_time('F'); ?> -->
                                                      <?php
                                                      if (is_category('event')) :
                                                         echo post_custom('month');
                                                      else :
                                                         echo get_post_time('F');
                                                      endif;
                                                      ?>
                                                   </div>
                                                   <!-- もとからあったhtml -->
                                                   <div class="calendar_day">
                                                      <!-- <span>15</span> -->
                                                      <span>
                                                         <!-- 変更２回目 -->
                                                         <!-- ?php echo get_the_date('d'); ?> -->
                                                         <?php
                                                         if (is_category('event')) :
                                                            echo post_custom('day');
                                                         else :
                                                            echo get_the_date('d');
                                                         endif;
                                                         ?>
                                                      </span>
                                                      <!-- 以下 もとからhtml -->
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- 追記3 -->
                                             <div class="calsendar_hour"></div>
                                             <!-- 追記3終わり -->
                                          </div>


                                          <div class="col-lg-10 col-md-10 col-sx-12">
                                             <div class="news_post_small_title">

                                                <!-- aタグにパーマリンクを設定、タイトルを取得する -->
                                                <a href="<?php the_permalink(); ?>">
                                                   <?php the_title(); ?>
                                                </a>
                                                <!-- <a href="news_detail.html">AWSハンズオンセミナー</a> -->
                                             </div>

                                             <div class="news_post_meta">
                                                <ul>
                                                   <li>
                                                      <!-- 10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は... -->
                                                      <!--記事を取得して表示する  -->
                                                      <?php echo wp_trim_words(get_the_content(), 100, '...'); ?>
                                                   </li>
                                                </ul>
                                             </div>
                                             <div class="read_continue">
                                                <!-- ボタンにパーマリンクをかける 
                                          <button onclick="location.href='news_detail.html'">詳細を見る</button>-->
                                                <button>
                                                   <a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <hr />
                                    </div>

                                 <?php endwhile; ?>
                              <?php endif; ?>

                              <!-- news loop until here 

                              <div class="news_posts_small">
                                 <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sx-12">
                                       <div class="calendar_news_border">
                                          <div class="calendar_news_border_1">
                                             <div class="calendar_month">OCT</div>
                                             <div class="calendar_day">
                                                <span>15</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sx-12">
                                       <div class="news_post_small_title">
                                          <a href="news_detail.html">AWSハンズオンセミナー</a>
                                       </div>
                                       <div class="news_post_meta">
                                          <ul>
                                             <li>
                                                10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="read_continue">
                                          <button onclick="location.href='news_detail.html'">詳細を見る</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr />
                              </div>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4" style="background-color: #2b7b8e33">
               <?php get_sidebar(); ?>
            </div>
         </div>
      </div>

      <?php get_footer(); ?>