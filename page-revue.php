<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-revue">
  <div class="l-container">
    <ul class="p-revue__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'category_name' => 'revue',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : ?>
          <?php $the_query->the_post(); ?>
          <li class="p-revue__item">
            <p class="p-revue__date"><?php the_time('Y年m月d日'); ?></p>
            <h2 class="p-revue__title">
              <?php the_title(); ?>
            </h2>
            <p class="p-revue__text">
              <?php the_content(); ?>
            </p>
            <hr />
          </li> <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<?php get_footer(); ?>