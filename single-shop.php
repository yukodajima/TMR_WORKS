<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-shopInfomation">
  <?php the_post(); ?>
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title"><?php echo get_the_title(); ?></h3>
      </div>
    </div>
    <div class="p-shopInfomation__wrapper">
      <div class="p-shopInfomation__infoContent">
        <p class="p-shopInfomation__shopName"><?php echo get_the_title(); ?>情報</p>
        <div class="p-shopInfomation__shopAddress">
          <p>住所</p>
          <p>
            〒
            <?php echo get_post_meta($post->ID, 'postal_code', true); ?>
          </p>
          <p>
            <?php echo get_post_meta($post->ID, 'address', true); ?>
          </p>
        </div>
        <div class="p-shopInfomation__shopHours">
          <p>営業時間</p>
          <p>
            <?php echo get_post_meta($post->ID, 'business_hours', true); ?>
          </p>
        </div>
      </div>
      <div class="p-shopInfomation__shopImg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop.jpg" alt="店舗写真">
      </div>
    </div>
    <ul class="p-shopInfomation__contact">
      <li class="p-shopInfomation__contactMail">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactMailImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-instagram.svg" alt="メール">
          </div>
          <p>見積もり依頼</p>
        </a>
      </li>
      <li href="" class="p-shopInfomation__contactTel">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactTelImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-instagram.svg" alt="TEL">
          </div>
          <div class="p-shopInfomation__contactTelInfo">
            <p>お電話で確認</p>
            <p class="p-shopInfomation__contactTelNum">TEL:<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
          </div>
        </a>
      </li>
      <li href="" class="p-shopInfomation__contactLine">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactLineImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-instagram.svg" alt="LINE">
          </div>
          <p>店舗の公式LINE</p>
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="p-shopIntroduction">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">店舗紹介</h3>
      </div>
    </div>
    <div class="p-shopIntroduction__wrapper">
      <div class="p-shopIntroduction__img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="店舗写真">
      </div>
      <div class="p-shopIntroduction__text">
        <p>
          <?php echo get_post_meta($post->ID, 'store_introduction', true); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="p-shopRepairCost">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">価格一覧</h3>
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>修理名</th>
          <th>価格</th>
          <th>修理期間</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
        <tr>
          <td> </td>
          <td> </td>
          <td> </td>
        </tr>
      </tbody>
    </table>
    <p>※店舗によって価格が異なります。詳細については店舗までお問い合わせください</p>
  </div>
</section>
<section class="p-shopRoot">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">順路</h3>
        <p class="c-titleBox__text">root</p>
      </div>
    </div>
    <ul class="p-shopRoot__list">
      <li class="p-shopRoot__item">
        <div class="p-shopRoot__itemImg">
        <?php if (get_post_meta($post->ID, 'root_img1', true)) : ?>
            <?php echo wp_get_attachment_image(post_custom('root_img1')); ?>
          <?php endif; ?>
        </div>
        <p>
          <?php echo get_post_meta($post->ID, 'root_text1', true); ?>
        </p>
      </li>
      <li class="p-shopRoot__item">
        <div class="p-shopRoot__itemImg">
        <?php if (get_post_meta($post->ID, 'root_img2', true)) : ?>
            <?php echo wp_get_attachment_image(post_custom('root_img2')); ?>
          <?php endif; ?>
        </div>
        <p>
          <?php echo get_post_meta($post->ID, 'root_text2', true); ?>
        </p>
      </li>
      <li class="p-shopRoot__item">
        <div class="p-shopRoot__itemImg">
        <?php if (get_post_meta($post->ID, 'root_img3', true)) : ?>
            <?php echo wp_get_attachment_image(post_custom('root_img3')); ?>
          <?php endif; ?>
        </div>
        <p>
          <?php echo get_post_meta($post->ID, 'root_text3', true); ?>
        </p>
      </li>
      <li class="p-shopRoot__item">
        <div class="p-shopRoot__itemImg">
        <?php if (get_post_meta($post->ID, 'root_img4', true)) : ?>
            <?php echo wp_get_attachment_image(post_custom('root_img4')); ?>
          <?php endif; ?>
        </div>
        <p>
          <?php echo get_post_meta($post->ID, 'root_text4', true); ?>
        </p>
      </li>
    </ul>
    <div class="p-shopRoot__itemMap">
    <?php the_content(); ?>
    </div>
  </div>
</section>
<section class="p-shopNews">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">お知らせ</h3>
        <p class="c-titleBox__text">News</p>
      </div>
    </div>
    <ul class="p-shopNews__list">
      <li class="p-shopNews__item">
        <p class="p-shopNews__itemDate">2020-01-01</p>
        <p class="p-shopNews__itemContent">PC修理の「PCワークス」、創業10周年を記念した「創業祭」キャンペーンを開催!11月末までの期間限定、全国22店舗にてお得なキャンペーンを実施します。</p>
      </li>
      <li class="p-shopNews__item">
        <p class="p-shopNews__itemDate">2020-01-01</p>
        <p class="p-shopNews__itemContent">＜渋谷店＞PC修理の「PCワークス」、Windows11へのアップグレート作業を30%OFFで行うキャンペーンを実施。今だけの特別価格をお見逃しなく!</p>
      </li>
      <li class="p-shopNews__item">
        <p class="p-shopNews__itemDate">2020-01-01</p>
        <p class="p-shopNews__itemContent">銀座店・西新宿十二社通り店が同時オープン、全国40店舗でパソコントラブルをフルサポートいたします。</p>
      </li>
      <li class="p-shopNews__item">
        <p class="p-shopNews__itemDate">2020-01-01</p>
        <p class="p-shopNews__content">2020年1月16日　大阪肥後橋に『PCワークス　大阪岶尾店』が移転リニューアルオープンいたします。</p>
      </li>
    </ul>
  </div>
</section>
<?php get_footer(); ?>