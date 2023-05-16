<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-revue">
  <div class="l-container">
    <ul class="p-revue__list">
      <?php
      $args = array(
        'post_type' => 'revue', // 投稿タイプを指定
        'posts_per_page' => 10, // 表示する記事数
      );
      $revue_query = new WP_Query($args);
      if ($revue_query->have_posts()) :
        while ($revue_query->have_posts()) :
          $revue_query->the_post();
      ?>
        <li class="p-revue__item">
          <p class="p-revue__date"><?php the_time('Y年m月d日'); ?></p>
          <h2 class="p-revue__title">
            <?php the_title(); ?>
          </h2>
          <p class="p-revue__text">
            <?php the_content(); ?>
          </p>
          <hr/>
        </li>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </ul>
  </div>
</section>
<?php get_footer(); ?>