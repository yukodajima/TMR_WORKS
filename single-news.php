<?php get_header(); ?>
  <div class="l-container">
    <div class="p-customNews">
      <?php the_post(); ?>
      <time class="p-customNews__date"><?php the_date("Y/m/d"); ?></time>
      <h2 class="p-customNews__title"><?php the_title(); ?></h2>
      <div class="p-customNews__content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>