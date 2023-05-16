<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-contact">
  <div class="l-container">
    <p class="p-contact__text">
      入力内容をご確認ください。
    </p>
      <?php the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>