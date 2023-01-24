<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-menu">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">修理メニュー</h3>
        <p class="c-titleBox__text">Menu</p>
      </div>
    </div>
    <p class="p-menu__topText">下記メニューよりお選びください</p>
    <ul class="p-menu__list show">
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">画面修理</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">
              HDD・SSDの増設<br />
              交換（OS再インストール）
            </p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">メンテナンス・初期化</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">キーボード修理</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">バッテリー交換</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">データ復旧</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">データ移行</p>
          </a>
        </div>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <a href="<?php echo home_url("/repairDetail"); ?>">
            <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/logo-sample.png" alt="" />
            <p class="p-menu__text">その他</p>

          </a>
        </div>
      </li>
    </ul>
  </div>
</section>
<?php get_footer(); ?>