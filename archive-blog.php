<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-blogList">
  <div class="l-container">
    <ul class="p-blogList__list">
      <?php
        $pages = get_query_var('paged') ? get_query_var('paged') : 1;
        $blogList_query = new WP_Query(
          array(
            'post_type' => 'blog', // 投稿タイプを指定
            'posts_per_page' => 10, // 表示する記事数
            'paged' => $paged, //ページネーション用
          )
        );
        if ($blogList_query->have_posts()) :
          while ($blogList_query->have_posts()) :
            $blogList_query->the_post();
      ?>
        <li class="p-blogList__item">
          <a href="<?php the_permalink(); ?>">
            <p class="p-blogList__date"><?php the_time('Y年m月d日'); ?></p>
            <h2 class="p-blogList__title">
              <?php the_title(); ?>
            </h2>
            <p class="p-blogList__text">
              <?php
                if (mb_strlen($post->post_content, 'UTF-8') > 50) {
                  $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 50, 'UTF-8'));
                  echo $content . '…';
                } else {
                  echo str_replace('\n', '', strip_tags($post->post_content));
                }
              ?>
            </p>
          </a>
          <hr/>
        </li>
      <?php endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </ul>
    <?php wp_pagenavi(); ?>
  </div>
</section>
<?php get_footer(); ?>