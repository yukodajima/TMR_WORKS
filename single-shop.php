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
        <?php the_post_thumbnail('thumbnails'); ?>
      </div>
    </div>
    <ul class="p-shopInfomation__contact">
      <li class="p-shopInfomation__contactItem p-shopInfomation__contactMail">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactMailImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mail.png" alt="メール">
          </div>
          <div class="p-shopInfomation__contactInfo">
            <p>見積もり依頼</p>
          </div>
        </a>
      </li>
      <li href="" class="p-shopInfomation__contactItem p-shopInfomation__contactTel">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactTelImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-tel.png" alt="TEL">
          </div>
          <div class="p-shopInfomation__contactInfo">
            <p>お電話で確認</p>
            <p class="p-shopInfomation__contactNum">TEL:<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
          </div>
        </a>
      </li>
      <li href="" class="p-shopInfomation__contactItem p-shopInfomation__contactLine">
        <a class="p-shopInfomation__contactLink" href="">
          <div class="p-shopInfomation__contactLineImg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-line.png" alt="LINE">
          </div>
          <div class="p-shopInfomation__contactInfo">
            <p>店舗の公式LINE</p>
            <p class="p-shopInfomation__contactLineId"><?php echo get_post_meta($post->ID, 'line_id', true); ?></p>
          </div>
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
        <?php if (get_post_meta($post->ID, 'shop_image', true)) : ?>
          <?php echo wp_get_attachment_image(post_custom('shop_image')); ?>
        <?php endif; ?>
      </div>
      <div class="p-shopIntroduction__textBox">
        <p>
          <?php echo get_post_meta($post->ID, 'store_introduction', true); ?>
        </p>
        <p class="p-shopIntroduction__title">&#9993;店長から一言メッセージ&#9993;</p>
        <p>
          <?php echo get_post_meta($post->ID, 'message', true); ?>
        </p>
        <p class="p-shopIntroduction__title">修理方法</p>
        <p>
        <?php
          $values = CFS()->get( 'repair_select' );
          $selects = array(); // $selects配列を初期化する
          foreach ( $values as $key => $label ) {
            $selects[] = $label; // $labelを$selects配列に追加する
          }
          echo implode( '&nbsp;/&nbsp;', $selects ); // $selectsをカンマ区切りで出力する
        ?>
        </p>
        <p class="p-shopIntroduction__title">支払い方法</p>
        <p>
        <?php
          $values = CFS()->get( 'pay_select' );
          $selects = array(); // $selects配列を初期化する
          foreach ( $values as $key => $label ) {
            $selects[] = $label; // $labelを$selects配列に追加する
          }
          echo implode( '&nbsp;/&nbsp;', $selects ); // $selectsをカンマ区切りで出力する
        ?>
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
      <?php $fields01 = CFS()->get( 'price_list' ); ?>
        <?php if ($fields01)://faq_loop が存在するとき ?>
          <?php foreach ( $fields01 as $field ):?>
            <tr>
              <td>
                <?php echo $field['price_name'];//faq_loop の faq_qを表示 ?>
              </td>
              <td>
                <?php echo $field['price'];//faq_loop の faq_aを表示 ?>
              </td>
              <td>
                <?php echo $field['period'];//faq_loop の faq_aを表示 ?>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
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
      <?php // 現在表示されている投稿と同じタームに分類された投稿を取得
      //閲覧している記事（投稿）に付与されているタグと同じ記事を表示
  $taxonomy_slug = 'custom_tags'; // タクソノミーのスラッグを指定
  $post_type_slug = 'news'; // 投稿タイプのスラッグを指定
  $post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
  if( $post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
    $terms_slug = array(); // 配列のセット
    foreach( $post_terms as $value ){ // 配列の作成
      $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
    }
  }
  $args = array(
    'post_type' => $post_type_slug, // 投稿タイプを指定
    'posts_per_page' => 5, // 表示件数を指定
    'orderby' =>  'date', // ランダムに投稿を取得
    'post__not_in' => array($post->ID), // 現在の投稿を除外
    'order' => 'DESC',
    'tax_query' => array( // タクソノミーパラメーターを使用
      array(
        'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
        'field' => 'slug', // スラッグに一致するタームを返す
        'terms' => $terms_slug // タームの配列を指定
      )
    )
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()):
?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li class="p-shopNews__item">
          <a href="<?php the_permalink() ?>">
            <p class="p-shopNews__itemDate"><?php the_time("Y-m-d"); ?></p>
            <p class="p-shopNews__itemContent">
              &lt;
              <?php
                $taxonomy = 'custom_tags'; // タグのタクソノミー名
                $tags = get_the_terms(get_the_ID(), $taxonomy);

                if ($tags && !is_wp_error($tags)) {
                  $tag_names = array();
                  foreach ($tags as $tag) {
                      $tag_names[] = $tag->name;
                  }
                  echo implode(' / ', $tag_names);
                }
                ?>
              &gt;
              <?php the_title(); ?>
            </p>
          </a>
        </li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else: ?>
  <p class="p-shopList__text">お知らせはありません</p>
<?php endif; ?>
    </ul>
  </div>
</section>
<?php get_footer(); ?>