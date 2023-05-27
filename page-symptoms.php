<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-menu">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">症状</h3>
        <p class="c-titleBox__text">Menu</p>
      </div>
    </div>
    <p class="p-menu__topText">下記メニューよりお選びください</p>
    <ul class="p-menu__list show">
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/maintenance.png" alt="" />
        </div>
        <p class="p-menu__text">OSが起動しない</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/screen.png" alt="" />
        </div>
        <p class="p-menu__text">画面が割れてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/migration.png" alt="" />
        </div>
        <p class="p-menu__text">データが消えてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/repair-screen.jpeg" alt="" />
        </div>
        <p class="p-menu__text">画面が付かなくなった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/hddssd.png" alt="" />
        </div>
        <p class="p-menu__text">HDD・SSDが壊れてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/battery.png" alt="" />
        </div>
        <p class="p-menu__text">充電がすぐになくなる</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/repair-keyboard.png" alt="" />
        </div>
        <p class="p-menu__text">キーボードが反応しない</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/other.png" alt="" />
        </div>
        <p class="p-menu__text">パソコンを落としてしまった</p>
      </li>
    </ul>
    <div class="p-menu__textBox">
      <p class="p-menu__text">上記選択肢にない症状またはよくわからない</p>
      <p class="p-menu__text">
        症状が選択肢に当てはまらない場合でも可能な範囲で修理させていただきます。まずはお気軽にご相談ください^^<br>
        また、症状の判断が難しくよくわからない方もご相談いただけましたら、修理内容や費用についてご案内いたします！<br>
        店舗一覧からお近くの店舗をご確認ください！
      </p>
    </div>
  </div>
</section>
<?php get_footer(); ?>