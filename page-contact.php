<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-contact">
  <div class="l-container">
    <p class="p-contact__text">
      弊社の修理サービスにお問い合わせ頂きありがとうございます。
      詳細について下記のフォームよりご請求ください。
      お電話からのご請求も承っておりますのでご連絡ください。
    </p>
    <form class="p-contact__form" action="">
      <?php the_content(); ?>
      <!-- <ul class="p-contact__list">
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            お名前
          </label>
          <input class="p-contact__input" name="name" type="text" required>
        </li>
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            ふりがな
          </label>
          <input class="p-contact__input" name="name" type="text" required>
        </li>
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            メールアドレス
          </label>
          <input class="p-contact__input" name="name" type="text" required>
        </li>
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            電話番号
          </label>
          <input class="p-contact__input" name="name" type="text" required>
        </li>
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            ご住所
          </label>
          <input class="p-contact__input" name="name" type="text" required>
        </li>
        <li class="p-contact__listItem">
          <label class="p-contact__label" for="">
            ご相談内容をご記入ください
          </label>
          <textarea class="p-contact__textarea" name="name" type="text" required></textarea>
        </li>
      </ul> -->
      <div class="p-contact__policy">
        <p class="p-contact__policyText">
          プライバシーポリシーに同意の上、送信ください。
        </p>
        <p class="p-contact__policyCheck">
          プライバシーポリシーに同意する
        </p>
      </div>
      <button class="p-contact__submit">送信する</button>
    </form>
  </div>
</section>
<?php get_footer(); ?>