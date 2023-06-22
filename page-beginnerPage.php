<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-important">
          <div class="l-container">
            <h3 class="p-important__title">
              【お申し込みの前に】<br>
              修理にあたって<br class="p-important__linefeed">ご準備いただくこと
              <!-- ご利用にあたっての<br class="p-important__linefeed">注意点 -->
            </h3>
            <ul class="p-important__list">
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  準備①<br>
                  付属品をご用意ください。
                </h4>
                <p class="p-important__text">
                  デスクトップ型<span>※1</span>の場合は、パソコン本体、電源ケーブルをお持ち込み（ご郵送）ください。キーボード、マウスは必要ございません。
                  ノート型の場合は、パソコン本体、ACアダプタをお持ち込み（ご郵送）ください。
                  付属品が不足している場合、修理できないことがございます。ご不安な際は、お電話ください。<br>
                  ※1デスクトップ型…モニター別型、モニター一体型
                </p>
              </li>
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  準備②<br>
                  データのバックアップを<br class="p-important__linefeed">お願いします。
                </h4>
                <p class="p-important__text">
                  データのバックアップを必ずお取りいただくようにお願いしております。
                  データの消去作業は致しませんが、
                  本体の修理作業中にソフトウェアの誤作動やHDDの故障を含めた何らかの理由によりデータが初期化された場合も弊社では責任を負いかねます。
                  また、修理後のデータの変化や消去など保証対象外とさせていただきます。
                  データのバックアップについて、ご不安な方は、有料にはなりますがデータのクローンをお申し込みください。
                </p>
              </li>
              <!-- <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  注意点3<br>
                  データバックアップ
                </h4>
                <p class="p-important__text">
                  データのバックアップは必ずお取り下さい。
                  弊社では、製造メーカー等での修理とことなり、修理作業を行う上でデータの消去作業は行いません。<br>
                  また、本体の修理作業によりソフトウェアの誤作動やHDDの故障を含めた何らかの理由によりデータが初期化された場合も弊社では責任を負いかねます。
                  このことから弊社ではデータの事前バックアップを強くお勧め致します。
                </p>
              </li> -->
            </ul>
          </div>
        </section>
        <section class="p-flow">
          <div class="l-container">
            <div class="c-titleBox">
              <div class="c-titleBox__wrapper">
                <h3 class="c-titleBox__title">&#128304;修理の受付・<br class="p-important__linefeed">流れについて&#128304;</h3>
                <!-- <p class="c-titleBox__text">Flow</p> -->
              </div>
            </div>
            <ul class="p-flow__list">
              <li class="p-flow__listItem">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    (1)まずはお気軽にお問い合わせください
                  </h4>
                  <p class="p-flow__listText">
                    お電話またはお問合せフォームでお客様のお悩みをお聞かせください。症状に応じて最適な修理方法をご案内いたします。
                    もちろん、ご予約なしでご来店いただいても構いません。
                    修理に必要な納期や概算見積などもお伝えいたします。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/beginner1.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem--reverse">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    (2)郵送または店舗持ち込み、訪問
                  </h4>
                  <p class="p-flow__listText">
                    お客様のニーズに合わせてサポートをお選びいただけます。郵送・店舗持ち込み・訪問の3種類がございます。
                    郵送の場合は、パソコン本体と申込書を着払いで店舗宛にお送りください。申込書は下記からダウンロードして必要事項のご記入をお願いします。郵送する段ボールに【修理】と記載いただけると受取がスムーズになります。
                    訪問の場合は、別途ご案内いたします。
                    店舗持ち込みの場合は、ご予約なしでも受付いたします。
                  </p>
                  <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/店舗用修理依頼書.ver.1.0.pdf" download="修理依頼書.pdf" class="c-btn p-flow__btn">修理申込書&#40;PDF&#41;をダウンロード</a>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/beginner2.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    (3)診断・お見積り
                  </h4>
                  <p class="p-flow__listText">
                    実際にPCを見て、無料診断し、お見積をお伝えいたします。
                    詳細なお見積や修理期間を調べるために、本体を分解しての診断が必要になる場合がございます。その際は作業費3,300円(税込)をいただいております。
                    機器や症状によって修理期間が異なります。
                    修理内容にご了承いただけましたら、パソコンをお預かりして作業を行います。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/beginner3.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem--reverse">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    (4)修理完了後、お支払い、ご返却
                  </h4>
                  <p class="p-flow__listText">
                    修理完了後、お電話またはメール、SMSにてご連絡いたします。
                    ご来店いただける方は、お客様にも動作確認をしていただきます。問題なければ、お支払い確認後、ご返却いたします。
                    お支払いは、現金または銀行振込、クレジットカード決済、QRカード決済、電子マネーからお選びいただけます。（店舗によって異なります。）
                    ご来店のお客様でも郵送でのご返却も可能です！
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/beginner4.jpg" alt=""></div>
              </li>
            </ul>
          </div>
        </section>
      <?php get_footer(); ?>
