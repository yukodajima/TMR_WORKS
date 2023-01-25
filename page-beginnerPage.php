<?php get_header(); ?>
<?php get_template_part('hero'); ?>
        <section class="p-flow">
          <div class="l-container">
            <div class="c-titleBox">
              <div class="c-titleBox__wrapper">
                <h3 class="c-titleBox__title">利用手順</h3>
                <p class="c-titleBox__text">Flow</p>
              </div>
            </div>
            <ul class="p-flow__list">
              <li class="p-flow__listItem">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    お問い合わせ・修理費用見積
                  </h4>
                  <p class="p-flow__listText">
                    まずはお気軽にお電話いただき、お客様のパソコンのお悩みをお聞かせください。
                    問題を解消する為に必要な費用に関しましての概算見積金額をお伝え致します。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem--reverse">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    製品を送る、店舗に訪問、訪問修理から選ぶ
                  </h4>
                  <p class="p-flow__listText">
                    弊社では修理を承る際にパソコンを受け取らせていただく方法がいくつかございます。
                    お急ぎの方、お忙しい方等、お客様のご都合に合せてお選びいただくことが可能です。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    診断・お見積り
                  </h4>
                  <p class="p-flow__listText">
                    御予約がなくても受付致します。店鋪スタッフに症状をお聞かせください。
                    なお、これまでの豊富な実績に基づいた経験により、おおよその費用・修理期間をお伝えすることも可能です。<br>
                    （料金・納期は症状によって変動致しますのでご了承ください。）<br>
                    また、詳細な見積は本体を分解しての故障部分の確認が必要となりますので、
                    追加検査費が必要となる場合がございます。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt=""></div>
              </li>
              <li class="p-flow__listItem--reverse">
                <div class="p-flow__textBox">
                  <h4 class="p-flow__listTitle">
                    お支払い・製品返却
                  </h4>
                  <p class="p-flow__listText">
                    修理品の受け取りにお越しいただきましたら、店頭でお客様にも動作 確認をしていただきます。
                    問題がなければ商品の返却を行い、代金の お支払いをお願い致します。<br>
                    ・支払方法：現金、銀行振込、クレジットカード、代引き<br>
                    ※店頭持ち込みのお客様でも返却時の郵送返却は可能です。
                  </p>
                </div>
                <div class="p-flow__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt=""></div>
              </li>
            </ul>
          </div>
        </section>
        <section class="p-important">
          <div class="l-container">
            <h3 class="p-important__title">
              ご利用にあたっての<br class="p-important__linefeed">注意点
            </h3>
            <ul class="p-important__list">
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  注意点1<br>
                  付属品をご用意ください。
                </h4>
                <p class="p-important__text">
                  基本、デスクトップ（モニタ別体型、モニタ一体型）はパソコン本体、
                  モニタ電源ケーブル（アダプターも含む）をご用意ください。
                  キーボード、マウスは必要ありません。
                  ノート型はパソコン本体、電源ケーブル（ACアダプター含む）をお持ちください。<br>
                  また、購入時にリカバリディスク（セットアップディスク）等のCD類が付属していた場合はそちらもお持ちください。
                  ※不足している付属品があった場合は修理ができない場合がございます。
                </p>
              </li>
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  注意点2<br>
                  身分証明書のご準備
                </h4>
                <p class="p-important__text">
                  身分証明書をご準備ください。
                </p>
              </li>
              <li class="p-important__item">
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
              </li>
            </ul>
          </div>
        </section>
      </main>
      <?php get_footer(); ?>
