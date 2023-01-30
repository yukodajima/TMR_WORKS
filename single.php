<?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
        $post = $wp_query->post;
        if (in_category('shopInfo')) {
          include(TEMPLATEPATH . '/single-shopInfo.php');
        } else {
          include(TEMPLATEPATH . '/single.php');
        }
      endwhile;
    endif;
    ?>