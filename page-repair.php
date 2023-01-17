<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-menu">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">新着情報</h3>
        <p class="c-titleBox__text">Pick Up</p>
      </div>
    </div>
    <p class="p-menu__topText">下記メニューよりお選びください</p>
    <div class="p-menu__container">
      <div class="p-menu__textContainer orange">
        <h2 class="p-menu__title white">修理メニュー</h2>
        <h3 class="p-menu__subTitle white">Menu</h3>
      </div>
      <div class="p-menu__textContainer">
        <h2 class="p-menu__title">症状で選択</h2>
        <h3 class="p-menu__subTitle">Symptoms</h3>
      </div>
    </div>
    <ul class="p-menu__list show">
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">画面修理</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">
          HDD・SSDの増設<br />
          交換（OS再インストール）
        </p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">メンテナンス・初期化</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">キーボード修理</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">バッテリー交換</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">データ復旧</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">データ移行</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">その他</p>
      </li>
    </ul>
    <ul class="p-menu__list">
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">画面が割れてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">HDD・SSDが壊れてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">画面が付かなくなった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">キーボードが反応しない</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">充電がすぐになくなる</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">データが消えてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">器具を落としてしまった</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
        </div>
        <p class="p-menu__text">OSが起動しない</p>
      </li>
    </ul>
  </div>
</section>
<?php get_footer(); ?>