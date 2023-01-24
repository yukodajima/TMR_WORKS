<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php get_template_part('hero'); ?>
    <section class="p-shopInformation">
      <div class="l-container">
        <div class="c-titleBox">
          <div class="c-titleBox__wrapper">
            <h3 class="c-titleBox__title">札幌店</h3>
          </div>
        </div>
        <div class="p-shopInformation__wrapper">
          <div class="p-shopInformation__infoContent">
            <p class="p-shopInformation__shopName">札幌店情報</p>
            <div class="p-shopInformation__shopAddress">
              <p>住所</p>
              <p>〒000-0000</p>
              <p>北海道札幌市○○○○○○○○○○○○○○○○○</p>
            </div>
            <div class="p-shopInformation__shopHours">
              <p>営業時間</p>
              <p>10:00-19:00</p>
            </div>
          </div>
          <div class="p-shopInformation__shopImg">
            <img src="/assets/images/img-sample.jpg" alt="店舗写真">
          </div>
        </div>
        <ul class="p-shopInformation__contact">
          <li class="p-shopInformation__contactMail">
            <a class="p-shopInformation__contactLink" href="">
              <div class="p-shopInformation__contactMailImg">
                <img src="/assets/images/icn-instagram.svg" alt="メール">
              </div>
              <p>見積もり依頼</p>
            </a>
          </li>
          <li href="" class="p-shopInformation__contactTel">
            <a class="p-shopInformation__contactLink" href="">
              <div class="p-shopInformation__contactTelImg">
                <img src="/assets/images/icn-instagram.svg" alt="TEL">
              </div>
              <div class="p-shopInformation__contactTelInfo">
                <p>お電話で確認</p>
                <p class="p-shopInformation__contactTelNum">TEL:000-000-0000</p>
              </div>
            </a>
          </li>
          <li href="" class="p-shopInformation__contactLine">
            <a class="p-shopInformation__contactLink" href="">
              <div class="p-shopInformation__contactLineImg">
                <img src="/assets/images/icn-instagram.svg" alt="LINE">
              </div>
              <p>店舗の公式LINE</p>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="p-shopIntroduction">
      <div class="l-container">
        <div class="c-titleBox">
          <div class="c-titleBox__wrapper">
            <h3 class="c-titleBox__title">店舗紹介</h3>
          </div>
        </div>
        <div class="p-shopIntroduction__wrapper">
          <div class="p-shopIntroduction__img">
            <img src="/assets/images/img-sample.jpg" alt="店舗写真">
          </div>
          <div class="p-shopIntroduction__text">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </div>
      </div>
    </section>
    <section class="p-shopRepairCost">
      <div class="l-container">
        <div class="c-titleBox">
          <div class="c-titleBox__wrapper">
            <h3 class="c-titleBox__title">価格一覧</h3>
          </div>
        </div>
        <table>
          <thead>
            <tr>
              <th>修理名</th>
              <th>価格</th>
              <th>修理期間</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
            <tr>
              <td> </td>
              <td> </td>
              <td> </td>
            </tr>
          </tbody>
        </table>
        <p>※店舗によって価格が異なります。詳細については店舗までお問い合わせください</p>
      </div>
    </section>
    <section class="p-shopRoot">
      <div class="l-container">
        <div class="c-titleBox">
          <div class="c-titleBox__wrapper">
            <h3 class="c-titleBox__title">順路</h3>
            <p class="c-titleBox__text">root</p>
          </div>
        </div>
        <ul class="p-shopRoot__list">
          <li class="p-shopRoot__item">
            <div class="p-shopRoot__itemImg">
              <img src="/assets/images/img-sample.jpg" alt="">
            </div>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
          </li>
          <li class="p-shopRoot__item">
            <div class="p-shopRoot__itemImg">
              <img src="/assets/images/img-sample.jpg" alt="">
            </div>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
          </li>
          <li class="p-shopRoot__item">
            <div class="p-shopRoot__itemImg">
              <img src="/assets/images/img-sample.jpg" alt="">
            </div>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
          </li>
          <li class="p-shopRoot__item">
            <div class="p-shopRoot__itemImg">
              <img src="/assets/images/img-sample.jpg" alt="">
            </div>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキ</p>
          </li>
        </ul>
        <div class="p-shopRoot__itemMap">
          <iframe class="p-shopRoot__itemMapImg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.769987216787!2d139.6994471153179!3d35.6580382388508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2z5riL6LC36aeF!5e0!3m2!1sja!2sus!4v1673240940056!5m2!1sja!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
    <section class="p-shopNews">
      <div class="l-container">
        <div class="c-titleBox">
          <div class="c-titleBox__wrapper">
            <h3 class="c-titleBox__title">お知らせ</h3>
            <p class="c-titleBox__text">News</p>
          </div>
        </div>
        <ul class="p-shopNews__list">
          <li class="p-shopNews__item">
            <p class="p-shopNews__itemDate">2020-01-01</p>
            <p class="p-shopNews__itemContent">PC修理の「PCワークス」、創業10周年を記念した「創業祭」キャンペーンを開催!11月末までの期間限定、全国22店舗にてお得なキャンペーンを実施します。</p>
          </li>
          <li class="p-shopNews__item">
            <p class="p-shopNews__itemDate">2020-01-01</p>
            <p class="p-shopNews__itemContent">＜渋谷店＞PC修理の「PCワークス」、Windows11へのアップグレート作業を30%OFFで行うキャンペーンを実施。今だけの特別価格をお見逃しなく!</p>
          </li>
          <li class="p-shopNews__item">
            <p class="p-shopNews__itemDate">2020-01-01</p>
            <p class="p-shopNews__itemContent">銀座店・西新宿十二社通り店が同時オープン、全国40店舗でパソコントラブルをフルサポートいたします。</p>
          </li>
          <li class="p-shopNews__item">
            <p class="p-shopNews__itemDate">2020-01-01</p>
            <p class="p-shopNews__content">2020年1月16日　大阪肥後橋に『PCワークス　大阪岶尾店』が移転リニューアルオープンいたします。</p>
          </li>
        </ul>
      </div>
    </section>
    </main>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>