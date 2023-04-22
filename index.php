<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-info">
  <div class="l-container">
    <div class="p-info__titleBox">
      <h3 class="p-info__title">【新着&excl;&excl;】<br class="p-info__linefeed">🕊パソコン修理ブログ🕊</h3>
      <div class="p-info__titleWrapper">
        <!-- <p class="c-titleBox__text">Pick Up</p> -->
      </div>
    </div>
    <ul class="p-info__list">
      <?php
      $custom_posts = get_posts(array(
        'post_type' => 'blog', // 投稿タイプ
        'posts_per_page' => 3, // 表示件数
        'orderby' => 'date', // 表示順の基準
        'order' => 'DESC', // 昇順・降順
      ));
      global $post;
      if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
        <li class="p-info__item">
            <a href="<?php the_permalink(); ?>">
              <div class="p-info__imgBox">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('thumbnails', ['class' => '.p-info__image']); ?>
                  <?php else: ?>
                    <img class="p-info__imgBox" src="<?php echo get_template_directory_uri(); ?>/assets/images/macbook1993_TP_V.jpg" alt="">
                <?php endif; ?>
              </div>
              <p class="p-info__text" ><?php the_title() ?></p>
            </a>
        </li>
        <?php endforeach; wp_reset_postdata(); else : ?>
          <p class="p-info__notFound">お知らせがありません</p>
      <?php endif; ?>
    </ul>
  </div>
</section>
<section class="p-work">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <p class="p-work__subTitle">PC・ワークスが信頼される<br class="p-work__linefeed">3つのポイント</p>
        <h3 class="c-titleBox__title">修理のことなら<br class="p-work__linefeed">PCワークス</h3>
      </div>
    </div>
    <ul class="p-work__list">
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top_work01.png" alt="丸画像" />
        </div>
        <h2 class="p-work__title">親切丁寧</h2>
        <p class="p-work__text">
          故障の症状や原因を丁寧にヒアリングいたします。お急ぎの方は、最短即日修理も可能です。お客様の思い出の詰まったパソコンです。大切に扱わせていただきます！
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top_work02.png" alt="丸画像" />
        </div>
        <h2 class="p-work__title">安心価格</h2>
        <!-- <p class="p-work__text">
          パソコン専門店のための<br />お手頃な修理価格を実現致しました!!
        </p> -->
        <p class="p-work__text">
          より多くの皆様が気軽に修理をご依頼できるように、安心価格でご提供しております！PC専門店ならではの仕入ルートを確保することでお手頃価格を実現しています。
        </p>
      </li>
      <li class="p-work__item">
        <div class="p-work__imgContainer">
          <img class="p-work__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/top_work03.png" alt="丸画像" />
        </div>
        <h2 class="p-work__title">PC専門店</h2>
        <p class="p-work__text">
          中古パソコンの販売・修理・買取の事業を展開しているため、専門的な知識を持ったスタッフが多数在中！直らないと諦めていたPCも一度ご相談ください！
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
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面が割れてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hddssd.png" alt="" />
        </div>
        <p class="p-topMenu__text">HDD・SSDが壊れてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/battery.png" alt="" />
        </div>
        <p class="p-topMenu__text">画面が付かなくなった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/date.png" alt="" />
        </div>
        <p class="p-topMenu__text">キーボードが反応しない</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/battery.png" alt="" />
        </div>
        <p class="p-topMenu__text">充電がすぐになくなる</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/other.png" alt="" />
        </div>
        <p class="p-topMenu__text">データが消えてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/date.png" alt="" />
        </div>
        <p class="p-topMenu__text">器具を落としてしまった</p>
      </li>
      <li class="p-topMenu__item">
        <div class="p-topMenu__imgContainer">
          <img class="p-topMenu__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/other.png" alt="" />
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
        $categories = get_terms(
          'shop_category',
          array(
            'parent' => 0,
            'orderby' => 'description'
          )
        );
        foreach ($categories as $cat): ?>
          <li class="p-shop__item">
            <p class="p-shop__area"><?php echo ($cat->name); ?></p>
            <ul class="p-shop__loopBox">
              <?php
                $children = get_terms('shop_category', 'hierarchical=0&parent=' . $cat->term_id);
                if ($children): // 子タームの有無
                  foreach ($children as $child): ?>
                    <li class="p-shop__loop">
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
                        <!-- 都道府県ごとの各店舗を表示するリストのループ -->
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
                    </li>
                    <?php wp_reset_postdata(); ?>
                  <?php endforeach; ?>
                <?php endif; ?>
              <!-- 子タームに紐づく記事一覧の表示終了 -->
            </ul>
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
    <!-- <div class="p-news__container"> -->
      <ul class="p-news__container">
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
              <a href="<?php the_permalink() ?>">
                <p class="p-news__date"><?php the_time("Y-m-d"); ?></p>
                <div class="p-news__articleTitle">
                  <p>&lt;<?php the_author(); ?>&gt;<?php the_title(); ?></p>
                </div>
              </a>
            </li>
          <?php endforeach; wp_reset_postdata(); else : ?>
            <p class="p-news__text">お知らせがありません</p>
        <?php endif; ?>
      </ul>
    <!-- </div> -->
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
          <div class="p-question__textBox">
            <p class="p-question__text">
              領収書の発行は可能でしょうか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！領収書を発行できます。修理ご依頼時、またはお会計時にお申し出ください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              来店する際は、事前に予約は必要ですか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            営業時間内でしたら、予約なしでいつでも受付可能です！即日修理をご希望される場合は、混雑状況によってご要望に添えないことがございますので事前にご連絡をお願いいたします。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              古いパソコンですが、修理できますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            承っておりますが、型番の古いパソコンについては、部品の流通が少ないため元の状態に完全に復元することが難しいです。
            ご要望を伺い、データのみの引き継ぎや、海外からの部品調達などをご提案させていただき、その都度対応方法をご相談いたします。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              データは引き継げますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！データの引き継ぎは可能です。新しいパソコンに前のパソコンのデータを移したり、お持ちのパソコンのハードディスクを交換したり（SSDに換装）できますのでご相談ください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              万が一、直らない場合買取は可能ですか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！買取できます。パソコンが故障している場合は、100円から買取しております。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              Macも直せますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            Apple 製品も修理可能です！Apple製品の部品の流通はメーカーに委ねられているため、機種や時期によっては修理が難しい場合がございます。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              仕事で使うので、すぐ直してほしいです。最短で修理する時はどのような流れになりますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            最短修理をご希望の際は事前にお電話をお願いいたします。その日の混雑状況や修理内容によって、即日修理が可能かご案内させていただきます。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              保証はありますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            修理保証期間は1ヶ月です。修理を行なった箇所に限り、再修理いたします。保証期間内でも、再修理が不可能な場合は返金にて承らせていただきます。修理後のデータ等の変化・消去、その他PCが動作しないことによる損失は保証対象外とさせていただきます。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              液晶に線が入りました。直せますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！液晶の交換修理ができます。液晶の部品の取り寄せが必要なため、2日〜2週間ほどお時間いただく可能性がございます。お急ぎの方は、事前にご相談ください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              パソコンの操作方法がわかりません＞＜教えて頂ことはできますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            当店はパソコンのハードを専門に扱っているため、ソフトについてはできる範囲でのサポートをさせていただきます。
            ご期待に添えるかわかりませんが、時間制で料金をいただき承ることは可能です。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              オフィスのインストールをお願いすることはできますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            Office単体での販売はしておりません。当店で中古パソコンをご購入いただいた方で、オプションでOfficeをご選択いただいた方のみに初期設定をさせていただいております。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              郵送修理の場合、送料はかかりますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            かかりません。お荷物は着払いで当店ご郵送ください。（サーバーやブラウン管などパソコン以外のものは別途送料や廃棄費用をいただいております。）
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              複数台パソコンがあります！修理できますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！修理できます。複数台ある場合は、全部を即日修理することは難しいです。納期にお時間いただき修理いたします。
            小出しでも差し支えなければ、修理完了した端末を順次お渡しすることは可能です。ご相談ください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              ゲーミングPCも直せますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！修理できます。修理内容が高度になるため、別途お見積りいたします。事前にご相談をお願いいたします。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              交換した元の部品を持ち帰ることはできますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！できます。修理に伴い、取り外した部品の所有権は当社に帰属しております。必要な場合はあらかじめお申し付けください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              QRコード決済やクレジットカードは使えますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            はい！お支払い方法は、現金またはクレジットカード、QRコード決済をご利用いただけます。また、店舗によって取り扱いが異なります。詳しくは各店舗ページの店舗紹介をご参照ください。
          </p>
        </li>
        <hr />
        <li class="p-question__item">
          <div class="p-question__textBox">
            <p class="p-question__text">
              修理に納得できなかった場合、返金はされますか？
            </p>
            <span class="p-question__triger"></span>
          </div>
          <p class="p-question__text--hidden">
            修理について、診断・見積は料金をいただいておりません。しかし、診断・見積後、お客様の了解の上作業を行なった場合は、作業費用は頂戴させていただいております。
          </p>
        </li>
        <hr />
      </ul>
    </div>
  </div>
</section>
<?php get_footer(); ?>