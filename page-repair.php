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
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/screen.png" alt="" />
        </div>
        <p class="p-menu__text">画面修理</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/hddssd.png" alt="" />
        </div>
        <p class="p-menu__text">
          HDD・SSDの増設<br />
          交換（OS再インストール）
        </p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/maintenance.png" alt="" />
        </div>
        <p class="p-menu__text">メンテナンス・初期化</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/repair-keyboard.png" alt="" />
        </div>
        <p class="p-menu__text">キーボード修理</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/battery.png" alt="" />
        </div>
        <p class="p-menu__text">バッテリー交換</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/date.png" alt="" />
        </div>
        <p class="p-menu__text">データ復旧</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/migration.png" alt="" />
        </div>
        <p class="p-menu__text">データ移行</p>
      </li>
      <li class="p-menu__item">
        <div class="p-menu__imgContainer">
          <img class="p-menu__image" src="<?php echo get_template_directory_uri(); ?>//assets/images/other.png" alt="" />
        </div>
        <p class="p-menu__text">その他</p>
      </li>
    </ul>
    <div class="p-menu__textBox">
      <p class="p-menu__text">上記選択肢またはメニューにない修理について</p>
      <p class="p-menu__text">
        修理メニューにない内容でも可能な範囲で修理させていただいております。お気軽にご相談ください^^<br>
        作業費用や納期についてご案内させていただきます。店舗一覧からお近くの店舗をご確認ください！
      </p>
    </div>
  </div>
</section>
<?php get_footer(); ?>