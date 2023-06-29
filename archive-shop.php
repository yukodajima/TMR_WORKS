<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<div class="p-shopList">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">店舗一覧</h3>
        <p class="c-titleBox__text">Shop</p>
      </div>
    </div>
    <ul class="p-shopList__areaList">
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">関東</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">北海道・東北</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">東海・北陸</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">関西</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">中国・四国</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">九州・沖縄</button>
      </li>
    </ul>
    <div class="p-shopList__shopInfoWrapper show">
      <p class="p-shopList__shopInfoArea">関東</p>
      <ul class="p-shopList__shopInfoList">
      <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'kannto', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
            <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">北海道・東北</p>
      <ul class="p-shopList__shopInfoList">
      <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'hokkaido-tohoku', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
            <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">東海・北陸</p>
      <ul class="p-shopList__shopInfoList">
      <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'tokai-hokuriku', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
        <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">関西</p>
      <ul class="p-shopList__shopInfoList">
      <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'kannsai', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
            <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">中国・四国</p>
      <ul class="p-shopList__shopInfoList">
      <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'chugoku-shikoku', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
            <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">九州・沖縄</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $custom_posts = get_posts(array(
          'post_type' => 'shop', // 投稿タイプ
          'posts_per_page' => 6, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC', // 昇順・降順
          'tax_query' => array(
            array(
              'taxonomy' => 'shop_category', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => 'kyusyu-okinawa', //表示したいタームをスラッグで指定
              'operator' => 'IN'
            ),
          )
        ));
        global $post;
        if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒 <?php echo get_post_meta($post->ID, 'postal_code', true); ?></p>
                <p class="p-shopList__shopAddress"><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <p class="p-shopList__shopTelNum">☎︎<?php echo get_post_meta($post->ID, 'tel', true); ?></p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php the_permalink() ?>'">詳細はこちら</button>
            </li>
            <?php endforeach; wp_reset_postdata(); else: ?>
          <p class="p-shopList__text">店舗がありません</p>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<?php get_footer(); ?>