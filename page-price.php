<?php get_header(); ?>

<nav class="subMenu">
    <ul class="subMenu__list blContainer">
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-recommend')); ?>">こんな方におすすめ</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-agency')); ?>">丸投げ運用プラン<br>ゼンナゲ</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-ask')); ?>">Miyamoto designに<br>頼むメリット</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-use')); ?>">サービスの活用方法</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-price-table')); ?>">制作料金・プラン</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/price/#target_page-price-contact')); ?>">相談・お問い合わせ</a>
        </li>
    </ul>
</nav>

<section class="service">
    <div class="service__wrapper blContainer" id="target_service">
        <div class="service__headingWrap heading">
            <h2 class="service__headingEn heading__en">Service</h2>
            <h2 class="service__headingJp heading__jp">サービス概要</h2>
        </div>
        <div class="service__contentsWrap">
            <div class="service__textWrap">
                <div class="service__textInner1">
                    <p class="service__text1">
                        ユーザーにとって使いやすい便利な配置、<br class="service__break1">
                        お問い合わせまでの導線など、<br>
                        「伝えたい人に伝えたいことが伝わるデザイン」を重視しています。
                    </p>
                </div>
                <div class="service__cardWrap">
                    <div class="service__cardInner">
                        <div class="service__iconWrap">
                            <i class="service__icon fa-solid fa-check"></i>
                        </div>
                        <p class="service__cardText">
                            ボタンはわかりやすい位置にあるか。
                        </p>
                    </div>
                    <div class="service__cardInner">
                        <div class="service__iconWrap">
                            <i class="service__icon fa-solid fa-check"></i>
                        </div>
                        <p class="service__cardText">
                            デザインや色に統一感があり、伝わりやすい構成になっているか。
                        </p>
                    </div>
                    <div class="service__cardInner">
                        <div class="service__iconWrap">
                            <i class="service__icon fa-solid fa-check"></i>
                        </div>
                        <p class="service__cardText">
                            問い合わせページなどへ誘導するコンテンツの流れは適切か。
                        </p>
                    </div>
                </div>
                <div class="service__underTextWrap">
                    <p class="service__text2">
                        ユーザーの視点にたって、ユーザーの気持ちになりデザインをしています。<br class="service__break1">ボタンの位置など一つとってもサイズ、見た目、クリックできると視覚的にわかるようになっているか、<br class="service__break1">など考えることはたくさんあります。
                    </p>
                    <p class="service__text3">
                        余白を含めたサイト内にあるもの全てに意味があるデザインをすることを心掛けております。
                    </p>
                </div>
            </div>
            <div class="service__imgWrap">
                <img class="service__img" alt="会議をしている様子のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/service@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/service@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/service@2x.png')); ?> 2x">
            </div>
        </div>
        <div class="service__btnWrap">
            <a class="service__btn btn3" href="<?php echo esc_url(home_url('/price/#target_page-price-table')) ?>">
                <span class="service__btnText btn3__text">制作料金はこちら</span>
            </a>
        </div>
    </div>
</section>

<section class="recommend pageRecommend">
    <div class="recommend__wrapper blContainer" id="target_page-recommend">
        <h2 class="recommend__heading">こんな企業さま、事業主さまにおすすめです！</h2>
        <div class="recommend__inner">
            <div class="recommend__contentsWrap">
                <div class="recommend__imgWrap">
                    <img class="recommend__img" alt="複数人で売上増加について議論するイメージ。成長を示すグラフのイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/recommend1@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/recommend1@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/recommend1@2x.png')); ?> 2x">
                </div>
                <div class="recommend__textWrap">
                    <h3 class="recommend__blockTitle">従業員1~50名ほどの<br>企業さま・個人事業主さま</h3>
                    <p class="recommend__text">
                        特にWeb担当者のいない会社さまには、
                        従業員を雇用するより安価で、
                        痒いところに手が届くようなサービスの提供ができます。
                    </p>
                </div>
            </div>
            <div class="recommend__contentsWrap">
                <div class="recommend__imgWrap">
                    <img class="recommend__img" alt="Web担当者がいない会社で困っている女性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/recommend2@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/recommend2@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/recommend2@2x.png')); ?> 2x">
                </div>
                <div class="recommend__textWrap">
                    <h3 class="recommend__blockTitle">ホームページどころか<br>パソコンやSNS自体が苦手</h3>
                    <p class="recommend__text">
                        パソコンやスマホの操作が苦手な方、
                        ホームページを作ったあとの運用まで手が回らない方には、
                        全部丸投げできる運用代行サービス「ゼンナゲ」で制作後のサービスも行なっておりますので、
                        ご安心ください。
                    </p>
                </div>
            </div>
            <div class="recommend__contentsWrap">
                <div class="recommend__imgWrap">
                    <img class="recommend__img" alt="担当者をイメージしたイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/recommend3@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/recommend3@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/recommend3@2x.png')); ?> 2x">
                </div>
                <div class="recommend__textWrap">
                    <h3 class="recommend__blockTitle">資料作成やSNS周りなど、<br>今後細かい部分も相談したい</h3>
                    <p class="recommend__text">
                        これまでの経験を活かしたいという想いから、
                        各種資料の作成やマーケティングのご相談など、
                        細かなご要望にも「ゼンナゲ」を通じてお応えしております。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="agency pageAgency">
    <div class="agency__wrapper blContainer" id="target_page-agency">
        <h2 class="agency__heading">ブログの更新やサイトの更新・保守など全部やっておいてほしい！</h2>
        <div class="agency__inner">
            <div class="agency__catchWrap">
                <p class="agency__catch">こんなことで、<br>お困りごとないですか？</p>
                <div class="agency__imgWrap">
                    <img class="agency__img" alt="パソコンについて、わからず焦っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/zennage@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/zennage@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/zennage@2x.png')); ?> 2x">
                </div>
            </div>
            <div class="agency__textWrap">
                <h3 class="agency__subHeading">ホームページ公開後は、<br>安心の丸投げ運用プランがあります！</h3>
                <ul class="agency__list">
                    <li class="agency__item">忙しくてホームページの更新まで手が回らない</li>
                    <li class="agency__item">SNSも含めて全体のWeb周りのサポートをしてほしい</li>
                    <li class="agency__item">ホームページやSNSから集客や予約が取れるよう改善して欲しい</li>
                </ul>
                <a class="agency__btn btn4" href="<?php echo esc_url(home_url('/zennage/#target_page-operation')) ?>">
                    <span class="agency__btnText btn4__text">運用代行プラン ゼンナゲ</span>
                    <i class="agency__btnIcon btn4__icon fa-solid fa-right-long"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="ask pageAsk">
    <div class="ask__wrapper blContainer" id="target_page-ask">
        <h2 class="ask__heading">Miyamoto designに頼むメリット</h2>
        <div class="ask__inner">
            <div class="ask__cardWrap">
                <div class="ask__imgWrap">
                    <img class="ask__img" alt="電球のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/ask1@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/ask1@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/ask1@2x.png')); ?> 2x">
                </div>
                <div class="ask__textWrap">
                    <h3 class="ask__cardTitle">伝わりやすさを優先した<br>サイト設計とデザイン</h3>
                    <p class="ask__text">
                        伝えたい人にちゃんと伝えるための情報の見やすさやクリックしてもらえるようなボタンの配置など、
                        サイトを訪れたユーザーがわかりやすい設計とデザインを最優先に制作しています。
                    </p>
                </div>
            </div>
            <div class="ask__cardWrap">
                <div class="ask__imgWrap">
                    <img class="ask__img" alt="電卓を持った男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/ask2@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/ask2@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/ask2@2x.png')); ?> 2x">
                </div>
                <div class="ask__textWrap">
                    <h3 class="ask__cardTitle">シンプルな設計にすることで、<br>コストを抑える</h3>
                    <p class="ask__text">
                        ハイクオリティな3Dアニメーションなども実装は可能ですが、集客や採用などが目的であればなくても全く問題ありません。
                        また中間マージンがないため、費用も安く収まります。
                    </p>
                </div>
            </div>
            <div class="ask__cardWrap">
                <div class="ask__imgWrap">
                    <img class="ask__img" alt="Webサイトの運用保守をイメージしたパソコンが4つ並んでいるイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/ask3@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/ask3@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/ask3@2x.png')); ?> 2x">
                </div>
                <div class="ask__textWrap">
                    <h3 class="ask__cardTitle">パソコンに不慣れな方でも<br>更新できるシステムの導入</h3>
                    <p class="ask__text">
                        せっかく作ったホームページは長く使ってもらいたいという想いから、事業者さまで更新できる事業やサービスの内容に沿った更新システムを構築します。
                        もちろん、更新は丸投げプランで「ゼンナゲ」してもらっても構いません。
                    </p>
                </div>
            </div>
            <div class="ask__cardWrap">
                <div class="ask__imgWrap">
                    <img class="ask__img" alt="オペレーターの女性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/ask4@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/ask4@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/ask4@2x.png')); ?> 2x">
                </div>
                <div class="ask__textWrap">
                    <h3 class="ask__cardTitle">もしもの不具合や<br>作成後の変更などもサポート</h3>
                    <p class="ask__text">
                        ホームページを作成したあとに不具合が発生した場合の対応や事業の成長に伴うホームページの内容の変更なども長期間にわたりサポートさせていただきます。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="use pageUse">
    <div class="use__wrapper blContainer" id="target_page-use">
        <div class="use__inner">
            <div class="use__overWrap">
                <div class="use__overInner">
                    <div class="use__headingWrap heading">
                        <h2 class="use__headingEn heading__en">How to use</h2>
                        <h2 class="use__headingJp heading__jp">サービスのご活用方法とメリット</h2>
                    </div>
                    <h3 class="use__catch" id="use__catch">
                        <span class="use__initial1">オ</span>ンラインや<br class="use__break1"><span class="use__break2"><span class="use__break3">W</span>eb全般の運用・運営に重きを置いております。</span>
                    </h3>
                </div>
                <div class="use__imgWrap">
                    <img class="use__img" alt="打ち合わせをしている男性と女性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/use@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/use@1x.png')); ?> 1x,
                            <?php echo esc_url(get_theme_file_uri('img/use@2x.png')); ?> 2x">
                </div>
            </div>
            <div class="use__underWrap">
                <div class="use__contentsWrap">
                    <h4 class="use__contentsTitle"><span class="use__initial2">社</span>員を雇う代わりに外部のWeb担当者として活用する</h4>
                    <p class="use__text">
                        Web関連業務まで手が回っていない事業者さまや、
                        社内にWebについて詳しい方がいらっしゃらない場合、
                        社員を雇うより時間も費用も抑えられるのでおすすめできます。
                    </p>
                </div>
                <div class="use__contentsWrap">
                    <h4 class="use__contentsTitle"><span class="use__initial2">ホ</span>ームページやSNSを更新する時間を他の時間に使える</h4>
                    <p class="use__text">
                        コア業務で忙しい事業者さまもご安心ください。
                        こちらから能動的にご提案し、
                        ホームページやSNSの更新をさせていただきます。
                    </p>
                </div>
                <div class="use__contentsWrap">
                    <h4 class="use__contentsTitle"><span class="use__initial2">チ</span>ラシや社内外の資料も制作可能。その他Web以外の相談も◎</h4>
                    <p class="use__text">
                        提案資料やチラシ、社内の配布物などもこれまでの経験を活かし、
                        幅広く対応させていただいております。
                    </p>
                </div>
                <div class="use__contentsWrap">
                    <h4 class="use__contentsTitle"><span class="use__initial2">わ</span>かりやすい料金設定で、定額制だから、予算を立てやすい</h4>
                    <p class="use__text">
                        料金設定はわかりやすく定額制にしています。
                        目的と予算に合ったプランをご利用ください。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="price pagePrice">
    <div class="price__wrapper blContainer" id="target_page-price">
        <div class="price__headingWrap heading">
            <h2 class="price__headingEn heading__en">Price</h2>
            <h2 class="price__headingJp heading__jp">制作料金・プラン</h2>
        </div>
        <div class="price__textImgWrap">
            <p class="price__text">
                ホームページ制作の目安料金となります。初回の無料面談の後、お見積書をお渡ししております。<br>
                詳しくはお気軽にお問い合わせフォームからご相談ください。
            </p>
            <div class="price__imgWrap">
                <img class="price__img" alt="階段をステップアップするように登る男性のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/price@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/price@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/price@2x.png')); ?> 2x">
            </div>
        </div>
        <div class="table-wrapper">
            <div class="table" id="target_page-price-table">
                <table class="table__container">
                    <thead>
                        <tr>
                            <th class="table__none border1">
                                <img class="table__img" alt="横スクロールアイコン"
                                    src="<?php echo esc_url(get_theme_file_uri('img/arrow@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/arrow@1x.png')); ?> 1x,
                                <?php echo esc_url(get_theme_file_uri('img/arrow@2x.png')); ?> 2x">
                            </th>
                            <th class="table__headerSell1">
                                名刺代わりの簡易的なサイト<br><span class="table__planName">ライトプラン</span>
                            </th>
                            <th class="table__headerSell2">
                <div class="table__popularity">人気</div>

                                ちゃんと伝わる企業サイト<br><span class="table__planName">スタンダードプラン</span>
                            </th>
                            <th class="table__headerSell3 border2">長期運用で集客を目的とした企業サイト<br><span class="table__planName">カスタムプラン</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>目的</td>
                            <td class="table__purpose"><span class="table__purposeBold">会社の名刺代わりの簡易的なサイト</span><br>個人事業主の方におすすめ</td>
                            <td class="table__purpose"><span class="table__purposeBold">しっかりとした企業サイト</span><br>企業サイトを作りたい事業者さまにおすすめ</td>
                            <td class="table__purpose"><span class="table__purposeBold">長期視点で集客を目的としたサイト</span><br>集客もしたいという事業者さまにおすすめ</td>
                        </tr>
                        <tr>
                            <td>料金目安</td>
                            <td><span class="table__priceLabel1">初期費用30万円ほど</span><br>運用代行ご利用の場合、25万円に減額</td>
                            <td><span class="table__priceLabel2">初期費用45万円ほど</span><br>運用代行ご利用の場合、36万円に減額</td>
                            <td><span class="table__priceLabel3">初期費用68万円ほど</span><br>運用代行ご利用の場合、55万円に減額</td>
                        </tr>
                        <tr>
                            <td>全体のページ数</td>
                            <td>5ページほど</td>
                            <td>12ページほど</td>
                            <td>20ページほど</td>
                        </tr>
                        <tr>
                            <td>お知らせなどの更新機能</td>
                            <td>1件</td>
                            <td>2件</td>
                            <td>3件</td>
                        </tr>
                        <tr>
                            <td>サイトのテキストや文言</td>
                            <td>お客さまにてご用意</td>
                            <td>ヒアリング ~ 作成まで代行</td>
                            <td>ヒアリング ~ 作成まで代行</td>
                        </tr>
                        <tr>
                            <td>デザインのご提案</td>
                            <td>1案</td>
                            <td>2案</td>
                            <td>3案</td>
                        </tr>
                        <tr>
                            <td>スマホ・タブレット対応</td>
                            <td>△</td>
                            <td>◎</td>
                            <td>◎</td>
                        </tr>
                        <tr>
                            <td>お問い合わせフォーム</td>
                            <td>×</td>
                            <td>◎</td>
                            <td>◎</td>
                        </tr>
                        <tr>
                            <td class="border3">内部SEO対策<br>(検索エンジン最適化)</td>
                            <td>×</td>
                            <td>○</td>
                            <td class="border4">◎</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="price__annotationWrap">
            <p class="price__annotation">
                ※ 別途サイト内で使用する素材の撮影や素材購入がある場合は、別途料金をいただく場合がございます。
            </p>
            <p class="price__annotation">
                ※ サイトの公開にかかる費用(ドメイン・サーバー契約)にかかる初期費用および月額料金は、お客さまにご負担をお願いしております。<br>
                　(ドメインやサーバーのプランにもよりますが、年間で約5000円から1万円に収まることが多いです。)
            </p>
        </div>
        <div class="price__btnWrap">
            <a class="price__btn btn3" href="<?php echo esc_url(home_url('flow/#target_page-flow')); ?>">
                <span class="price__btnText btn3__text">制作の流れを見てみる</span>
            </a>
        </div>
    </div>
</section>

<div id="target_page-price-contact">
    <?php get_template_part('parts/inquiry', 'section'); ?>
</div>


<?php get_footer(); ?>