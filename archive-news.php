<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-newsList">
  <div class="l-container">
    <ul class="p-newsList__list">
      <?php
        $args = array(
          'post_type' => 'news', // 投稿タイプを指定
          'posts_per_page' => 10, // 表示する記事数
        );
        $newsList_query = new WP_Query($args);
        if ($newsList_query->have_posts()) :
          while ($newsList_query->have_posts()) :
            $newsList_query->the_post();
      ?>
        <li class="p-newsList__item">
          <a href="<?php the_permalink(); ?>">
            <p class="p-newsList__date"><?php the_time('Y年m月d日'); ?></p>
            <h2 class="p-newsList__title">
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
            </h2>
            <p class="p-newsList__text">
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
  </div>
</section>
<?php get_footer(); ?>