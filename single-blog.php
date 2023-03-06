<?php get_header(); ?>
  <div class="l-container">
    <div class="p-blog">
      <?php the_post(); ?>
      <time class="p-blog__date"><?php the_date("Y/m/d"); ?></time>
      <h2 class="p-blog__title"><?php the_title(); ?></h2>
      <div class="p-blog__thumbnail">
        <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail(); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/macbook1993_TP_V.jpg" alt="">
        <?php endif; ?>
      </div>
      <div class="p-blog__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>