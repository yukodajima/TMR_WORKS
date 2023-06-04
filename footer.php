<footer class="l-footer">
  <div class="p-footer">
    <div class="l-container">
      <ul class="p-footer__contentList">
        <li class="p-footer__contentItem">
          <a href="<?php echo home_url("/shop"); ?>">
            <div class="p-footer__backGround"></div>
            <div class="p-footer__imgContainer">
              <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer01.jpg" alt="footer画像" />
            </div>
            <div class="p-footer__textArea">
              <h2 class="p-footer__title">店舗一覧</h2>
              <p class="p-footer__text">お近くのお店をチェック！</p>
            </div>
          </a>
        </li>
        <li class="p-footer__contentItem">
          <a href="">
            <div class="p-footer__backGround"></div>
            <div class="p-footer__imgContainer">
              <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer02.jpg" alt="footer画像" />
            </div>
            <div class="p-footer__textArea">
              <h2 class="p-footer__title">買取</h2>
              <p class="p-footer__text">
                PC関連の買取なら<br>
                お任せください
              </p>
            </div>
          </a>
        </li>
        <li class="p-footer__contentItem">
          <a href="https://pcworks.shop/">
            <div class="p-footer__backGround"></div>
            <div class="p-footer__imgContainer">
              <img class="p-footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer03.jpg" alt="footer画像" />
            </div>
            <div class="p-footer__textArea">
              <h2 class="p-footer__title">販売</h2>
              <p class="p-footer__text">
                法人向け中古パソコン販売<br>
                新品パソコンの半額相当！
              </p>
            </div>
          </a>
        </li>
      </ul>
      <div class="p-footer__line"></div>
      <div class="p-footer__textBox">
        <ul class="p-footer__boxList">
          <li class="p-footer__item">
            <a href=" <?php echo home_url("/beginnerPage"); ?>">初めての方へ</a>
          </li>
          <li class="p-footer__item">
            <a href="<?php echo home_url("/repair"); ?>">修理メニュー</a>
          </li>
          <li class="p-footer__item">
            <a href="<?php echo home_url("/symptoms"); ?>">症状で診断</a>
          </li>
        </ul>
        <ul class="p-footer__boxList">
          <li class="p-footer__item">
            <a href="<?php echo home_url("/revue"); ?>">お客様の声</a>
          </li>
          <li class="p-footer__item">
            <a href="<?php echo home_url("/shop"); ?>">店舗一覧</a>
          </li>
          <li class="p-footer__item">
            <a href="<?php echo home_url("/franchiseRecruiting"); ?>">加盟店募集</a>
          </li>
        </ul>
        <ul class="p-footer__boxList">
          <li class="p-footer__category">
            <a href="<?php echo home_url("/news"); ?>">お知らせ</a>
          </li>
          <li class="p-footer__category">
            <a href="<?php echo home_url("/blog"); ?>">ブログ</a>
          </li>
          <li class="p-footer__category">
            <a href="<?php echo home_url("/contact"); ?>">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<footer class="l-footer__bottom">
  <div>
    <div class="l-container">
      <nav class="p-footer__nav">
        <div class="p-footer__logoContainer">
          <a href="<?php echo home_url(); ?>">
            <img class="p-footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-repair.jpg" alt="会社ロゴ" />
          </a>
        </div>
        <div class="p-footer__navListBox">
          <li class="p-footer__navList">
            <a href="<?php echo home_url("/privacy-policy"); ?>">プライバシーポリシー</a>
          </li>
          <li class="p-footer__navList">
            <a href="<?php echo home_url("/sitemap"); ?>">サイトマップ</a>
          </li>
          <li class="p-footer__navList">
            <a href="<?php echo home_url("/company-overview"); ?>">会社概要</a>
          </li>
        </div>
      </nav>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/changeTab.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/changeTabPref.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slideQuestion.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/footer.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slideShop.js"></script>

</body>

</html>
