<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="l-wrapper">
    <header class="l-header">
      <div class="p-header">
        <div class="p-header__titleBox">
          <div class="p-header__logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-pc.jpg" alt="">
            </a>
          </div>
          <div class="p-header__menuArea">
            <div class="p-header__btnArea">
              <button class="c-btn p-header__btn" onclick="location.href='/shopList'">店舗一覧</button>
              <button class="c-btn__contact p-header__contactBtn" onclick="location.href='/contact'">お問い合わせ</button>
            </div>
            <div class="p-header__menu">
              <div class="p-header__menuLine"></div>
              <div class="p-header__menuLine"></div>
              <div class="p-header__menuLine"></div>
            </div>
          </div>
        </div>
        <ul class="p-header__menuList">
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url(); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">HOME</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/beginnerPage"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">初めての方へ</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/repair"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">修理メニュー</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/repair"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">症状で選ぶ</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/revue"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">お客様の声</p>
            </a>
          </li>
          <li class="p-header__menuItem p-header__drawerMenu">
            <div class="p-header__drawerMenuItem">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">店舗一覧</p>
            </div>
          </li>
          <ul class="p-header__shopList">
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">北海道・東北</a>
            </li>
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">関東</a>
            </li>
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">東海・北陸</a>
            </li>
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">関西</a>
            </li>
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">四国・中国</a>
            </li>
            <li class="p-header__shopItem">
              <a href="<?php echo home_url("/shopList"); ?>">九州・沖縄</a>
            </li>
          </ul>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/franchiseRecruiting"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icn-twitter.svg" alt="">
              </div>
              <p class="p-header__menuText">加盟店募集</p>
            </a>
          </li>
        </ul>
      </div>
    </header>
    <main class="l-main">