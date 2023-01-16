<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="l-wrapper">
    <header class="l-header"></header>
    <main class="l-main">
      <section class="p-info">
        <div class="l-container">
          <div class="c-titleBox">新着情報</div>
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
          <div class="c-titleBox">修理のことならPCワークス</div>
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
          <div class="c-titleBox">新着情報</div>
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
          <div class="c-titleBox">新着情報</div>
          <div class="p-news__container">
            <ul class="p-news__list">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                  <?php the_post(); ?>
                  <div class="p-news__article">
                    <li class="p-news__date"><?php the_time('Y年m月d日'); ?></li>
                    <li class="p-news__text">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                    </li>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
            <div class="p-news__btnContainer">
              <button class="p-news__btn" type="submit">一覧</button>
            </div>
          </div>
        </div>
      </section>
      <section class="p-contact">
        <div class="l-container">
          <div class="p-contact__container">
            <div class="c-titleBox">新着情報</div>
            <ul class="p-contact__list">
              <li class="p-contact__item">
                <p class="p-contact__text">
                  全メーカー修理可能ですか?<span class="p-contact__triger"></span>
                </p>
                <p class="p-contact__text--hidden">全メーカー修理可能です</p>
              </li>
              <hr />
              <li class="p-contact__item">
                <p class="p-contact__text">
                  全メーカー修理可能ですか?<span class="p-contact__triger"></span>
                </p>
                <p class="p-contact__text--hidden">全メーカー修理可能です</p>
              </li>
              <hr />
              <li class="p-contact__item">
                <p class="p-contact__text">
                  全メーカー修理可能ですか?<span class="p-contact__triger"></span>
                </p>
                <p class="p-contact__text--hidden">全メーカー修理可能です</p>
              </li>
              <hr />
              <li class="p-contact__item">
                <p class="p-contact__text">
                  全メーカー修理可能ですか?<span class="p-contact__triger"></span>
                </p>
                <p class="p-contact__text--hidden">全メーカー修理可能です</p>
              </li>
              <hr />
            </ul>
          </div>
        </div>
      </section>
    </main>
    <footer class="l-footer">
      <div class="p-footer">
        <div class="l-container">
          <ul class="p-footer__contentList">
            <li class="p-footer__contentItem">
              <div class="p-footer__imgContainer">
                <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="footer画像" />
              </div>
              <div class="p-footer__textArea">
                <h2 class="p-footer__title">店舗一覧</h2>
                <p class="p-footer__text">お近くのお店をチェック！</p>
              </div>
            </li>
            <li class="p-footer__contentItem">
              <div class="p-footer__imgContainer">
                <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="footer画像" />
              </div>
              <div class="p-footer__textArea">
                <h2 class="p-footer__title">買取</h2>
                <p class="p-footer__text">
                  PC関連の買取なら<br />
                  お任せください
                </p>
              </div>
            </li>
            <li class="p-footer__contentItem">
              <div class="p-footer__imgContainer">
                <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="footer画像" />
              </div>
              <div class="p-footer__textArea">
                <h2 class="p-footer__title">販売</h2>
                <p class="p-footer__text">
                  法人向け中古パソコン販売<br />
                  新品パソコンの半額相当！
                </p>
              </div>
            </li>
          </ul>
          <div class="p-footer__line"></div>
          <div class="p-footer__textBox">
            <ul class="p-footer__boxList">
              <li class="p-footer__item">
                <a href="">初めての方へ</a>
              </li>
              <li class="p-footer__item">
                <a href="">修理メニュー</a>
              </li>
              <li class="p-footer__item">
                <a href="">症状で診断</a>
              </li>
              <li class="p-footer__item">
                <a href="">お客様の声</a>
              </li>
            </ul>
            <ul class="p-footer__boxList">
              <li class="p-footer__shopList">
                店舗一覧<span class="p-footer__triger"></span>
              </li>
              <li class="p-footer__shopItem">
                <a href="">北海道・東北</a>
              </li>
              <li class="p-footer__shopItem">
                <a href="">関東</a>
              </li>
              <li class="p-footer__shopItem">
                <a href="">東海・北陸</a>
              </li>
              <li class="p-footer__shopItem">
                <a href="">関西</a>
              </li>
              <li class="p-footer__shopItem">
                <a href="">四国・中国</a>
              </li>
              <li class="p-footer__shopItem">
                <a href="">九州・沖縄</a>
              </li>
            </ul>
            <ul class="p-footer__boxList">
              <li class="p-footer__category">
                <a href="">加盟店募集</a>
              </li>
              <li class="p-footer__category">
                <a href="">お知らせ</a>
              </li>
              <li class="p-footer__category">
                <a href="">ブログ</a>
              </li>
              <li class="p-footer__category">
                <a href="">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <footer class="l-footer__bottom">
      <div>
        <div class="l-container">
          <nav class="p-footer__nav">
            <div class="p-footer__logoContainer">
              <img class="p-footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pc.jpg" alt="会社ロゴ" />
            </div>
            <div class="p-footer__navListBox">
              <li class="p-footer__navList">
                <p>プライバシーポリシー</p>
              </li>
              <li class="p-footer__navList">
                <p>サイトマップ</p>
              </li>
              <li class="p-footer__navList">
                <p>会社概要</p>
              </li>
            </div>
          </nav>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/changeTab.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slideContact.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slideFooter.js"></script>
  <?php wp_footer(); ?>
</body>

</html>