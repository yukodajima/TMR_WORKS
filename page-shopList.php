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
        <button class="p-shopList__areaButton">北海道・東北</button>
      </li>
      <li class="p-shopList__areaItem">
        <button class="p-shopList__areaButton">関東</button>
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
      <p class="p-shopList__shopInfoArea">北海道・東北</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒000-0000</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">関東</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒111-2222</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">東海・北陸</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒333-3333</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">関西</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒444-4444</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">中国・四国</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒555-5555</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="p-shopList__shopInfoWrapper">
      <p class="p-shopList__shopInfoArea">九州・沖縄</p>
      <ul class="p-shopList__shopInfoList">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 12,
          'category_name' => 'shop',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : ?>
            <?php $the_query->the_post(); ?>
            <li class="p-shopList__shopInfoItem">
              <div class="p-shopList__shopInfoImg">
                <?php the_post_thumbnail('thumbnails'); ?>
              </div>
              <div class="p-shopList__shopIntroduce">
                <p class="p-shopList__shopName"><?php the_title(); ?></p>
                <p class="p-shopList__shopPostalCode">〒666-6666</p>
                <p class="p-shopList__shopAddress">北海道札幌市○○○○○○○○○○○○○○○○○</p>
                <p class="p-shopList__shopTelNum">☎︎00-000-0000</p>
              </div>
              <button class="p-shopList__shopIntroduceButton" onclick="location.href='<?php echo get_permalink(); ?>'">詳細はこちら</button>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</div>
</main>
<?php get_footer(); ?>