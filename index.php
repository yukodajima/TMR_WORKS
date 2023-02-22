<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-info">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">新着情報</h3>
        <p class="c-titleBox__text">Pick Up</p>
      </div>
    </div>
    <ul class="p-info__list">
      <li class="p-info__item">
        <div>
          <a href="#">
            <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/pickup.jpg" alt="画像" />
          </a>
        </div>
        <a class="p-info__text" href="#">PCが動作を重く感じた時に確認したほうがいい5つのことPCが動作を重く感じた時に確認したほうがいい5つのこと</a>
      </li>
      <li class="p-info__item">
        <div>
          <a href="#">
            <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/pickup.jpg" alt="画像" />
          </a>
        </div>

        <a class="p-info__text" href="#">PCが動作を重く感じた時に確認したほうがいい5つのこと</a>
      </li>
      <li class="p-info__item">
        <div>
          <a href="#">
            <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/pickup.jpg" alt="画像" />
          </a>
        </div>
        <a class="p-info__text" href="#">PCが動作を重く感じた時に確認したほうがいい5つのこと</a>
      </li>
    </ul>
  </div>
</section>
<section class="p-work">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <p class="p-work__subTitle"><span>3</span>つのポイント</p>
        <h3 class="c-titleBox__title">修理のことなら<br class="p-work__linefeed">PCワークス</h3>
      </div>
    </div>
    <ul class="p-work__list">
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/point1.jpg" alt="丸画像" />
        </div>
        <h2 class="p-work__title">最短即日対応</h2>
        <p class="p-work__text">
          修理スタッフが常駐しており 修理対応が可能です!!
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/point2.jpg" alt="丸画像" />
        </div>
        <h2 class="p-work__title">お手頃な価格</h2>
        <p class="p-work__text">
          パソコン専門店のための<br />お手頃な修理価格を実現致しました!!
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/point3.jpg" alt="丸画像" />
        </div>
        <h2 class="p-work__title">PC専門店</h2>
        <p class="p-work__text">
          買取、販売、修理を全て自社で行なっており
          多くの修理ノウハウを持っております！
        </p>
      </li>
    </ul>
  </div>
</section>
<section class="p-topMenu">
  <div class="l-container">
    <div class="p-topMenu__container">
      <div class="p-topMenu__textContainer orange">
        <h2 class="p-topMenu__title white">修理メニュー</h2>
        <h3 class="p-topMenu__subTitle white">Menu</h3>
      </div>
      <div class="p-topMenu__textContainer">
        <h2 class="p-topMenu__title">症状で選択</h2>
        <h3 class="p-topMenu__subTitle">Symptoms</h3>
      </div>
    </div>
    <ul class="p-topMenu__list show">
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面修理</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hddssd.png" alt="" />
        </div>
        <p class="p-topMenu__text">
          HDD・SSDの増設<br />
          交換（OS再インストール）
        </p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/maintenance.png" alt="" />
        </div>
        <p class="p-topMenu__text">メンテナンス・初期化</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen.png" alt="" />
        </div>
        <p class="p-topMenu__text">キーボード修理</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/battery.png" alt="" />
        </div>
        <p class="p-topMenu__text">バッテリー交換</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/date.png" alt="" />
        </div>
        <p class="p-topMenu__text">データ復旧</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/migration.png" alt="" />
        </div>
        <p class="p-topMenu__text">データ移行</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/other.png" alt="" />
        </div>
        <p class="p-topMenu__text">その他</p>
      </li>
      <div class="p-topMenu__btnContainer">
        <a href="<?php echo home_url("/repair"); ?>">
          <button class="p-topMenu__btn" type="submit">一覧</button>
        </a>
      </div>
    </ul>
    <ul class="p-topMenu__list">
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面が割れてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">HDD・SSDが壊れてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面が付かなくなった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">キーボードが反応しない</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">充電がすぐになくなる</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">データが消えてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">器具を落としてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">OSが起動しない</p>
      </li>
      <div class="p-topMenu__btnContainer">
        <a href="<?php echo home_url("/symptoms"); ?>">
          <button class="p-topMenu__btn" type="submit">一覧</button>
        </a>
      </div>
    </ul>
  </div>
</section>
<section class="p-shop">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">店舗一覧</h3>
        <p class="c-titleBox__text">Shops</p>
      </div>
    </div>
    <div class="p-shop__container">
      <ul class="p-shop__list">
        <?php // タームの親・子の一覧にタームに紐づく投稿一覧を表示する方法
        $categories = get_terms('shop_category',
        array(
          'parent' => 0,
          'orderby' => 'description'
        ));
        foreach ($categories as $cat) { ?>
          <li class="p-shop__item">
            <p class="p-shop__area"><?php echo ($cat->name); ?></p>
            <div class="p-shop__loopBox">
              <div class="p-shop__loop">
                <?php
                $children = get_terms('shop_category', 'hierarchical=0&parent=' . $cat->term_id);
                if ($children) { // 子タームの有無
                  foreach ($children as $child) { ?>
                <div class="p-shop__innerArea">
                  <div class="p-shop__iconPref">
                    <div class="p-shop__iconContainer">
                      <img class="p-shop__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="" />
                    </div>
                    <p class="p-shop__pref"><?php echo ($child->name); ?></p>
                  </div>
                  <?php $catslug = $child->slug;
                  $args = array(
                    'post_type' => 'shop',
                    'shop_category' => $catslug,
                    'posts_per_page' => -1,
                  );
                  $myquery = new WP_Query($args);
                  ?>
                  <ul class="p-shop__shopNameList">
                    <?php if ($myquery->have_posts()) : ?>
                        <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                          <li class="p-shop__shopName">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                          </li>
                          <?php endwhile; ?>
                        <?php endif; ?>
                  </ul>
                </div>
                <?php wp_reset_postdata(); ?>
              </div>
              <?php } ?> 
              <!-- 子タームに紐づく記事一覧の表示終了 -->
            </div>
          </li>
  <?php } // 子ターム終了 
  ?>
<?php } // 親ターム終了 
?>
</section>
<section class="p-news">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">各店舗のお知らせ</h3>
        <p class="c-titleBox__text">News</p>
      </div>
    </div>
    <div class="p-news__container">
      <ul class="p-news__list">
        <?php
        $custom_posts = get_posts(array(
          'post_type' => 'news', // 投稿タイプ
          'posts_per_page' => 4, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-news__article">
              <a href="">
                <p class="p-news__date"><?php the_time("Y-m-d"); ?></p>
                <div class="p-news__text">
                  <p href="#">&lt;<?php the_author(); ?>&gt;<?php the_title(); ?></p>
                </div>
              </a>
            </li>
          <?php endforeach;
          wp_reset_postdata();
        else : ?>
          <p class="p-news__text">お知らせがありません</p>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>
<section class="p-question">
  <div class="l-container">
    <div class="p-question__container">
      <div class="c-titleBox">
        <div class="c-titleBox__wrapper">
          <h3 class="c-titleBox__title">よくある質問</h3>
          <p class="c-titleBox__text">Q&A</p>
        </div>
      </div>
      <ul class="p-question__list">
        <li class="p-question__item">
          <p class="p-question__text">
            全メーカー修理可能ですか?<span class="p-question__triger"></span>
          </p>
          <p class="p-question__text--hidden">全メーカー修理可能です</p>
        </li>
        <hr />
        <li class="p-question__item">
          <p class="p-question__text">
            全メーカー修理可能ですか?<span class="p-question__triger"></span>
          </p>
          <p class="p-question__text--hidden">全メーカー修理可能です</p>
        </li>
        <hr />
        <li class="p-question__item">
          <p class="p-question__text">
            全メーカー修理可能ですか?<span class="p-question__triger"></span>
          </p>
          <p class="p-question__text--hidden">全メーカー修理可能です</p>
        </li>
        <hr />
        <li class="p-question__item">
          <p class="p-question__text">
            全メーカー修理可能ですか?<span class="p-question__triger"></span>
          </p>
          <p class="p-question__text--hidden">全メーカー修理可能です</p>
        </li>
        <hr />
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>