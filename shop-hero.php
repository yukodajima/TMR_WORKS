<section class="c-shopHero">
  <div class="c-shopHero__titleBackground">
    <div class="c-shopHero__titleBox">
      <?php if(is_home()){
        echo "<p class='c-shopHero__topText'>大手の半額程度の<br c-shopHero__linefeed>安心価格!!</p>";
      } ?>
      <h2 class="c-shopHero__title">
        <?php if(is_home()) {
          echo "PC・ワークス";
        } elseif(is_post_type_archive("shop")) {
          echo "店舗一覧";
        } elseif(is_post_type_archive("blog")) {
          echo "ブログ";
        }elseif(is_post_type_archive("news")) {
          echo "お知らせ";
        }elseif(is_post_type_archive("revue")) {
          echo "お客様の声";
        } else {
          the_title();
        } ?>
      </h2>
      <p>
        <?php
          $custom_fields = nl2br(get_post_meta( $post->ID , 'subTitle' , true ));
          if(empty($custom_fields) === false){
            echo $custom_fields;
          } elseif(is_home()){
            echo "<p class='c-shopHero__subTitle'>店舗持ち込み、郵送修理対応可能!!<br>PC専門店ならではの熟練した技術とコスパを実現!!</p>";
          }
        ?>
      </p>
    </div>
  </div>
  <div class="c-shopHero__img">
    <?php if(is_post_type_archive("shop")): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop_top.jpg" alt="">
    <?php elseif(is_post_type_archive("blog")) : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-top.jpg" alt="">
    <?php elseif(is_post_type_archive("news")) : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-top.jpg" alt="">
    <?php elseif(is_post_type_archive("revue")) : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/revue-top.jpg" alt="">
    <?php elseif(is_home()): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top.jpg" alt="">
    <?php elseif(is_singular("shop")): ?>
      <?php the_post_thumbnail('full', ['class' => 'c-shopHero__thumbnailImg'] ); ?>
    <?php else: ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  </div>
</section>