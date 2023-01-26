<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-franchise">
  <div class="l-container">
    <div class="c-titleBox">
      <div class="c-titleBox__wrapper">
        <h3 class="c-titleBox__title">パソコン修理<br class="c-titleBox__linefeed">フランチャイズ<br class="c-titleBox__linefeed">加盟店募集</h3>
      </div>
    </div>
    <p class="p-franchise__text">
      PCワークスではビジネスパートナーを募集しております。
      弊社のマーケティング力とノウハウをご提供させていただき、
      既にパソコン修理事業を展開されている企業様、店舗様へは集客・収益UPをご協力させていただきます。
      iPhone修理、その他の事業を展開されている企業様、店舗様も是非 ご検討ください。<br>
      パソコン修理未経験の企業様、店舗様向けに様々なコースをご提供しておりますのでご安心ください。
      新店オープンから様々な内容をトータルサポートいたします。
    </p>
  </div>
</section>
<section class="p-merit">
  <div class="l-container">
    <div class="p-merit__titleBox">
      <h4 class="p-merit__title">
        フランチャイズの<br class="p-merit__linefeed">メリット
      </h4>
    </div>
    <ul class="p-merit__list">
      <li class="p-merit__listItem">
        <div class="p-merit__textBox">
          <h4 class="p-merit__listTitle">
            ノウハウ提供・経営指導を<br class="p-merit__linefeed">受けられる
          </h4>
          <p class="p-merit__listText">
            フランチャイズの場合は、経営にまつわるさまざまなものが、はじめからある状態でスタートすることができるので、開業までがスピーディです。<br>
            また「こうすると成功しやすい」「こうすると失敗しやすい」といったノウハウも、直営店や過去の加盟店の実績から蓄積されているため、活用することができます。
          </p>
        </div>
        <div class="p-merit__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/merit1.jpg" alt=""></div>
      </li>
      <li class="p-merit__listItem--reverse">
        <div class="p-merit__textBox">
          <h4 class="p-merit__listTitle">
            店舗売上の拡大に専念できる
          </h4>
          <p class="p-merit__listText">
            フランチャイズでは、オーナーは店舗の売上を拡大させることに集中できる環境が用意されています。<br>
            自分の店舗の売上は、自分の収入に直結するので、良い店舗づくりをしようという努力がそのまま収入につながります。
          </p>
        </div>
        <div class="p-merit__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/merit2.jpg" alt=""></div>
      </li>
      <li class="p-merit__listItem">
        <div class="p-merit__textBox">
          <h4 class="p-merit__listTitle">
            フランチャイズ本部の<br class="p-merit__linefeed">ブランド力を活かせる
          </h4>
          <p class="p-merit__listText">
            フランチャイズの場合、すでに確立したブランド力（ブランドイメージ）がある状態で、経営を始めることができます。<br>
            知名度、認知度が高いブランドであれば看板を見ただけでも商品・サービスをイメージしてもらえるので、開業してすぐでもある程度の集客を見込めます。
          </p>
        </div>
        <div class="p-merit__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/merit3.jpg" alt=""></div>
      </li>
    </ul>
  </div>
</section>
<section class="p-recruiting">
  <div class="l-container">
    <div class="p-recruiting__textBox">
      <p class="p-recruiting__text">
        テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        テキストテキストテキストテキストテキスト
      </p>
    </div>
    <form class="p-recruiting__form" action="">
      <ul class="p-recruiting__list">
        <li class="p-recruiting__radioItem">
          <label class="p-recruiting__label" for="">
            法人/個人
          </label>
          <input class="p-recruiting__radio" type="radio" name="category" checked>法人
          <input class="p-recruiting__radio" type="radio" name="category">個人
        </li>
        <li class="p-recruiting__checkItem">
          <label class="p-recruiting__label" for="">
            資料請求方法（複数回答可）
          </label>
          <input class="p-recruiting__checkBox" type="checkbox" checked>資料請求<br class="p-recruiting__linefeed">
          <input class="p-recruiting__checkBox" type="checkbox">Zoomでの打ち合わせ希望
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            会社名
          </label>
          <input class="p-recruiting__input" name="" type="text" required>
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            会社名（ふりがな）
          </label>
          <input class="p-recruiting__input" name="" type="text" required>
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            担当者名
          </label>
          <input class="p-recruiting__input" name="" type="text" required>
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            メールアドレス
          </label>
          <input class="p-recruiting__input" name="email" type="text" required>
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            電話番号
          </label>
          <input class="p-recruiting__input" name="tel" type="text" required>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            ご住所
          </label>
          <input class="p-recruiting__input" name="" type="text" required>
        </li>
        <li class="p-recruiting__listItem">
          <label class="p-recruiting__label" for="">
            ご相談内容をご記入ください
          </label>
          <textarea class="p-recruiting__textarea" name="name" type="text" required></textarea>
        </li>
      </ul>
      <div class="p-recruiting__policy">
        <p class="p-recruiting__policyText">
          プライバシーポリシーに同意の上、送信ください。
        </p>
        <p class="p-recruiting__policyCheck">
          プライバシーポリシーに同意する
        </p>
      </div>
      <button class="p-recruiting__submit">送信する</button>
    </form>
  </div>
</section>
<?php get_footer(); ?>