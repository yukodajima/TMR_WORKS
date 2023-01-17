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
          <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="画像" />
        </div>
        <a class="p-info__text" href="#">PCが動作を重く感じた時に確認したほうがいい5つのことPCが動作を重く感じた時に確認したほうがいい5つのこと</a>
      </li>
      <li class="p-info__item">
        <div>
          <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="画像" />
        </div>
        <a class="p-info__text" href="#">PCが動作を重く感じた時に確認したほうがいい5つのこと</a>
      </li>
      <li class="p-info__item">
        <div>
          <img class="p-info__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="画像" />
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
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="丸画像" />
        </div>
        <h2 class="p-work__title">最短即日対応</h2>
        <p class="p-work__text">
          修理スタッフが常駐しており 修理対応が可能です!!
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="丸画像" />
        </div>
        <h2 class="p-work__title">お手頃な価格</h2>
        <p class="p-work__text">
          パソコン専門店のための<br />お手頃な修理価格を実現致しました!!
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="丸画像" />
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
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面修理</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">
          HDD・SSDの増設<br />
          交換（OS再インストール）
        </p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">メンテナンス・初期化</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">キーボード修理</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">バッテリー交換</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">データ復旧</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">データ移行</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-topMenu__text">その他</p>
      </li>
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
        <?php
        $fields = $cfs->get('area'); //親ループ
        foreach ($fields as $field) :
        ?>
          <li class="p-shop__item">
            <p class="p-shop__area"><?php if ($field) echo $field['area_name']; ?></p>
            <div class="p-shop__loop">
              <?php
              $fields = $field['pref']; //子ループ
              foreach ((array)$fields as $field) :
              ?>
                <div class="p-shop__innerArea">
                  <div class="p-shop__iconPref">
                    <div class="p-shop__iconContainer">
                      <img class="p-shop__icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="" />
                    </div>
                    <p class="p-shop__pref"><?php echo $field['pref_name']; ?></p>
                  </div>
                  <ul class="p-shop__shopNameList">
                    <?php
                    $fields = $field['shop']; //孫ループ
                    foreach ((array)$fields as $field) :
                    ?>
                      <li class="p-shop__shopName">
                        <a href="#"><?php echo $field['shop_name']; ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endforeach; ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
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
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shopInfo',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <div class="p-news__article">
              <li class="p-news__date"><?php the_time('Y年m月d日'); ?></li>
              <li class="p-news__text">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?></a>
              </li>
            </div> <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <div class="p-news__btnContainer">
        <button class="p-news__btn" type="submit">一覧</button>
      </div>
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