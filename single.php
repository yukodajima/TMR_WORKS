<?php get_header(); ?>
<main class="l-main">
  <div class="l-container">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        $post = $wp_query->post;
        if (in_category('shopDetile')) {
          include(TEMPLATEPATH . '/single-shopInfo.php');
        } else {
          include(TEMPLATEPATH . '/single.php');
        }
      endwhile;
    endif;
    ?>
  </div>
</main>
<?php get_footer(); ?>