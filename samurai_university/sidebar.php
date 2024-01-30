 <!-- sidebar-main に切り出す -->
 <div class="sidebar">
    <div class="category">
       <div class="section_title_container category_title">
          <h2>CATEGORY</h2>
          <div class="section_subtitle">カテゴリー</div>
       </div>
       <div class="sidebar_categories">
          <ul>
             <!-- <li><a href="#">News ニュース</a></li>
                           <li><a href="#">Event イベント</a></li>
                           <li><a href="#">CampusLife 侍の学生</a></li>-->
             <?php
               $args = array(
                  'hide_empty' => 1, //東湖公記事があるカテゴリーのみ表示する
                  'title_li' => '', //リストの外側になるタイトルと表示形式（''であれば何も表示しない）
               );
               wp_list_categories( $args );
               ?>
          </ul>
       </div>
    </div>
    <div class="category">
       <div class="section_title_container category_title">
          <h2>Latest Post</h2>
          <div class="section_subtitle">最新記事</div>
       </div>
       <div class="sidebar_categories">
          <ul>
             <!-- <li><a href="#">AWS ハンズオンセミ…</a></li>
                           <li><a href="#">AWS ハンズオンセミ…</a></li>
                           <li><a href="#">AWS ハンズオンセミ…</a></li>-->
             <?php
               $args = array(
                  'posts_per_page' => 3, //表示件数の指定
               );
               $posts = get_posts($args); //$postsに$argsの配列を一こずつ取得させる
               foreach ($posts as $post) : //ループの開始
                  setup_postdata($post); //記事データのセット
               ?>
                <li>
                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
             <?php
               endforeach;
               wp_reset_postdata(); //今回作成したクエリをリセっと
               ?>
          </ul>
       </div>
    </div>
 </div>
 <!-- sidebar-main ここまで -->