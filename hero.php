<section class="c-hero">
  <div class="c-hero__backGround"></div>
  <div class="c-hero__img">
    <?php if(is_archive("shop")): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop_top.jpg" alt="">
      <?php elseif(is_home()): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top.jpg" alt="">
    <?php else: ?>
        <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  </div>
  <div class="c-hero__titleBox">
    <h2 class="c-hero__title">
      <?php if(is_home()) {
        echo "トップページ";
      } elseif(is_archive("shop")) {
        echo "店舗一覧";
      } else {
        the_title();
      } ?>
    </h2>
    <p>
    <?php
      $custom_fields = nl2br(get_post_meta( $post->ID , 'subTitle' , true ));
      if(empty($custom_fields) === false){
        echo $custom_fields;
      }?>
    </p>
  </div>
</section>