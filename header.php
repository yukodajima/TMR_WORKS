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
              <button class="c-btn p-header__btn" onclick="location.href='/shop'">店舗一覧</button>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_top.svg" alt="">
              </div>
              <p class="p-header__menuText">HOME</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/beginnerpage"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_beginner.svg" alt="">
              </div>
              <p class="p-header__menuText">初めての方へ</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/repair"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_repair.svg" alt="">
              </div>
              <p class="p-header__menuText">修理メニュー</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/symptoms"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_symptoms.svg" alt="">
              </div>
              <p class="p-header__menuText">症状で選ぶ</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/revue"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_revue.svg" alt="">
              </div>
              <p class="p-header__menuText">お客様の声</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/shop"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_shop.svg" alt="">
              </div>
              <p class="p-header__menuText">店舗一覧</p>
            </a>
          </li>
          <li class="p-header__menuItem">
            <a class="p-header__menuLink" href="<?php echo home_url("/franchiserecruiting"); ?>">
              <div class="p-header__menuLogo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_franchise.svg" alt="">
              </div>
              <p class="p-header__menuText">加盟店募集</p>
            </a>
          </li>
          <ul class="p-header__contentList">
            <li class="p-header__contentItem">
              <a href="<?php echo home_url("/shopList"); ?>">
                <div class="p-header__backGround"></div>
                <div class="p-header__imgContainer">
                  <img class="p-header__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer01.jpg" alt="header画像" />
                </div>
                <div class="p-header__textArea">
                  <h2 class="p-header__title">店舗一覧</h2>
                  <p class="p-header__text">お近くのお店をチェック！</p>
                </div>
              </a>
            </li>
            <li class="p-header__contentItem">
              <a href="<?php echo home_url(); ?>">
                <div class="p-header__backGround"></div>
                <div class="p-header__imgContainer">
                  <img class="p-header__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer02.jpg" alt="header画像" />
                </div>
                <div class="p-header__textArea">
                  <h2 class="p-header__title">買取</h2>
                  <p class="p-header__text">
                    PC関連の買取なら<br>
                    お任せください
                  </p>
                </div>
              </a>
              </li>
            <li class="p-header__contentItem">
              <a href="https://pcworks.shop">
                <div class="p-header__backGround"></div>
                <div class="p-header__imgContainer">
                  <img class="p-header__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer03.jpg" alt="header画像" />
                </div>
                <div class="p-header__textArea">
                  <h2 class="p-header__title">販売</h2>
                  <p class="p-header__text">
                    法人向け中古パソコン販売<br>
                    新品パソコンの半額相当！
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </ul>
      </div>
    </header>
    <main class="l-main">