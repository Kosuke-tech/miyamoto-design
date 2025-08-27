<?php get_header(); ?>

<nav class="subMenu">
    <ul class="subMenu__list blContainer">
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-operation')); ?>">運用プラン</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-leave')); ?>">ご提案の内容</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-zennage-price')); ?>">料金と作業の目安</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-job-description')); ?>">具体的な作業内容</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-frequency-qa')); ?>">よくあるご質問</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-zennage-contact')); ?>">相談・お問い合わせ</a>
        </li>
    </ul>
</nav>

<section class="operation">
    <div class="operation__wrapper blContainer" id="target_page-operation">
        <div class="operation__headingWrap heading">
            <h2 class="operation__headingEn heading__en">Operation plan</h2>
            <h2 class="operation__headingJp heading__jp">運用プラン</h2>
        </div>
        <div class="operation__contentsWrap">
            <div class="operation__catchWrap">
                <h3 class="operation__catch">
                    運用代行プランは、<br>お客さまのお困りごと、ご要望から始めたプランです。<br>
                    事業者さまのご要望に合わせて、無駄なものは省き、柔軟にプランを作成させていただきます。<br>
                    もちろん実務でお忙しい場合は、全て丸投げしていただくことも可能です。
                </h3>
            </div>

            <div class="operation__cardWrap">
                <div class="operation__cardCatchWrap">
                    <h4 class="operation__cardCatch">こんなお悩みありませんか？</h4>
                </div>
                <div class="operation__cardTextWrap">
                    <div class="operation__cardTextInner">
                        <div class="operation__itemWrap">
                            <div class="operation__iconWrap">
                                <i class="operation__icon fa-solid fa-check"></i>
                            </div>
                            <p class="operation__cardText">忙しいからサイトやSNSの更新しておいてほしい</p>
                        </div>
                        <div class="operation__itemWrap">
                            <div class="operation__iconWrap">
                                <i class="operation__icon fa-solid fa-check"></i>
                            </div>
                            <p class="operation__cardText">集客につながるサイトに改善していきたい</p>
                        </div>
                        <div class="operation__itemWrap">
                            <div class="operation__iconWrap">
                                <i class="operation__icon fa-solid fa-check"></i>
                            </div>
                            <p class="operation__cardText">Web周り全般のサポートができる担当者がほしい</p>
                        </div>
                    </div>
                    <div class="operation__imgWrap">
                        <img class="operation__img" alt="困っている表情の男性と女性のイラスト画像"
                            src="<?php echo esc_url(get_theme_file_uri('img/operation@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/operation@1x.png')); ?> 1x,
                            <?php echo esc_url(get_theme_file_uri('img/operation@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
        <div class="operation__btnWrap">
            <a class="operation__btn btn3" href="<?php echo esc_url(home_url('/zennage/#target_page-zennage-price')) ?>">
                <span class="operation__btnText btn3__text">運用プランの料金の見る</span>
            </a>
        </div>
    </div>
</section>

<section class="leave">
    <div class="leave__wrapper blContainer" id="target_page-leave">
        <div class="leave__overWrap">
            <div class="leave__headingWrap">
                <h2 class="leave__heading">Miyamoto designにお任せください！</h2>
                <h2 class="leave__subHeading">企業さまに合わせて、<br class="leave__break2">ご提案をさせていただきます！</h2>
            </div>
            <div class="leave__imgWrap">
                <img class="leave__img" alt="階段をステップアップするように登る男性のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/leave@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/leave@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/leave@2x.png')); ?> 2x"
                    loading="lazy">
            </div>
        </div>
        <div class="leave__cardWrap">
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon fa-solid fa-file-export"></i>
                    <p class="leave__cardTitle">Webサイトの定期更新</p>
                </div>
                <p class="leave__cardText">
                    基本的な運用サービスです。<br>
                    商品やサービスに関する専門的な知識をお客さまからヒアリングさせていただき、
                    それをコンテンツや現在のサイトのデザインに落とし込んで、
                    順次メンテナンス、更新させていただきます。
                </p>
            </div>
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon fa-solid fa-chart-line"></i>
                    <p class="leave__cardTitle">改善のご提案</p>
                </div>
                <p class="leave__cardText">
                    既存サイトがある状態で運用をスタートする場合、そのサイトの改善点を洗い出し、<br>
                    リストアップした後、優先順位を決め、順次改善していく流れとなります。<br class="leave__break1">
                    定期的に進捗報告や改善案を提案させていただきます。
                </p>
            </div>
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon fa-solid fa-magnifying-glass"></i>
                    <p class="leave__cardTitle">解析ツールを使って記録</p>
                </div>
                <p class="leave__cardText">
                    googleアナリティクス・サーチコンソールと言われるWebサイトの解析ツールを使って、<br>
                    サイトへ訪問したユーザー数や動向を記録し、それを元にサイト改善の提案をさせていただきます。
                </p>
            </div>
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon fa-solid fa-chess-knight"></i>
                    <p class="leave__cardTitle">競合他社分析</p>
                </div>
                <p class="leave__cardText">
                    ホームページを運用していくにあたって重要なのが、競合他社分析です。<br>
                    競合他社の発信情報をチェック、分析することで、事業者さまがお持ちの他社にない強み、<br class="leave__break1">
                    また現時点においてのお困りごとの原因を見える化し、言語化させていただきます。
                </p>
            </div>
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon fa-solid fa-mobile-screen"></i>
                    <p class="leave__cardTitle">InstagramやX(旧Twitter)など<br>
                        SNSの更新も可能！</p>
                </div>
                <p class="leave__cardText">
                    googleアナリティクス・サーチコンソールなどのWebサイトの解析ツールを使って、<br>
                    サイトへ訪問したユーザー数や動向を記録し、それを元にSNS改善のご提案をさせていただきます。
                </p>
            </div>
            <div class="leave__cardInner">
                <div class="leave__iconWrap">
                    <i class="leave__icon leave__iconBlue fa-solid fa-handshake-angle"></i>
                    <p class="leave__cardTitle">定期的な方向性の打ち合わせ</p>
                </div>
                <p class="leave__cardText">
                    戦略的にサイトやSNSを運用していくには、お客さまと二人三脚でサイトを作り、
                    定期的に方向性や改善点を見つけていく必要があります。<br>
                    ですので、定期的にサイトの運用の方向性などについてお話しするお時間をいただいております。<br>
                    打ち合わせの目的に関しては、その都度お伝えさせていただいております。
                </p>
            </div>
        </div>
    </div>
</section>

<section class="zennagePrice">
    <div class="zennagePrice__wrapper blContainer" id="target_page-zennage-price">
        <h2 class="zennagePrice__catch">まずは、Web集客の基盤作り！<br>運用プランの料金と作業の目安</h2>
        <div class="zennagePrice__cardWrap">
            <div class="zennagePrice__card">
                <div class="zennagePrice__cardCatchWrap cardTitleBg1">
                    <span class="zennagePrice__cardCatchHeading">Webからの問い合わせを増やしたい！</span>
                    <h3 class="zennagePrice__cardCatch">士業専門Googleビジネス運用代行</h3>
                </div>

                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price1">
                        月額 <span class="zennagePrice__differentFont1"> 39,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <div class="zennagePrice__cardInner">
                        <div class="zennagePrice__goalWrap">
                            <p class="zennagePrice__goalTitle">- ゴール設定 -</p>
                            <p class="zennagePrice__goal">検索からの新規顧客獲得の安定化</p>
                        </div>
                        <div class="zennagePrice__descriptionWrap">
                            <div>
                                <p class="zennagePrice__descriptionCatch1">
                                    - 期待できる効果 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">Google検索やマップでの表示回数10〜20％増加</li>
                                    <li class="zennagePrice__descriptionItem">「地域名＋士業名」などのキーワードで上位表示されやすくなる</li>
                                    <li class="zennagePrice__descriptionItem">継続的に露出が増え、問い合わせ数が安定して伸びやすい</li>
                                </ul>
                            </div>
                            <div>
                                <p class="zennagePrice__descriptionCatch2">
                                    - 実現するための具体的な業務 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">月2回の投稿代行</li>
                                    <li class="zennagePrice__descriptionItem">全口コミへの返信代行</li>
                                    <li class="zennagePrice__descriptionItem">月2枚以上の写真追加</li>
                                    <li class="zennagePrice__descriptionItem">カテゴリ設定の最適化（3つ）</li>
                                    <li class="zennagePrice__descriptionItem">説明文の作成・改善</li>
                                    <li class="zennagePrice__descriptionItem">その他付随業務など</li>
                                </ul>
                                <p class="zennagePrice__mapDescription">
                                    ※Googleビジネスとは、検索した時に、<br>
                                    　右側に出てくる事業所概要のことです。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zennagePrice__card zennagePrice__relative">
                <!-- ワッペン始点  -->
                <div class="zennagePrice__wappenWrap">
                    <i class="zennagePrice__wappen fa-solid fa-comment"></i>
                    <p class="zennagePrice__wappenText">1番人気の<br>プランです！</p>
                </div>
                <!--　ワッペン終点 -->
                <div class="zennagePrice__cardCatchWrap cardTitleBg2">
                    <span class="zennagePrice__cardCatchHeading">Web集客、既存顧客との関係も深めたい！</span>
                    <h3 class="zennagePrice__cardCatch">士業Web集客運用プラン</h3>
                </div>
                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price2">
                        月額<span class="zennagePrice__differentFont1"> 49,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <div class="zennagePrice__cardInner">
                        <div class="zennagePrice__goalWrap">
                            <p class="zennagePrice__goalTitle">- ゴール設定 -</p>
                            <p class="zennagePrice__goal">お問い合わせ率5%向上</p>
                        </div>
                        <div class="zennagePrice__descriptionWrap">
                            <div>
                                <p class="zennagePrice__descriptionCatch1">
                                    - 期待できる効果 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">ブログ記事を書くことで、検索からの新規顧客の流入の増加</li>
                                    <li class="zennagePrice__descriptionItem">キーワードを狙ってブログを書くことで、お問い合わせ数が向上する</li>
                                    <li class="zennagePrice__descriptionItem">関係構築のためにお客様に送っていた郵便やFAXがWebで完結し、閲覧率が向上する</li>
                                </ul>
                            </div>
                            <div>
                                <p class="zennagePrice__descriptionCatch2">
                                    - 実現するための具体的な業務 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">毎月1本記事を納品</li>
                                    <li class="zennagePrice__descriptionItem">SEOキーワード調査</li>
                                    <li class="zennagePrice__descriptionItem">キーワードマッピング</li>
                                    <li class="zennagePrice__descriptionItem">キーワードの選定表の作成</li>
                                    <li class="zennagePrice__descriptionItem">アクセス解析レポート提出</li>
                                    <li class="zennagePrice__descriptionItem">その他付随業務など</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zennagePrice__card">
                <div class="zennagePrice__cardCatchWrap cardTitleBg4">
                    <span class="zennagePrice__cardCatchHeading">新規顧客も取りたい、既存顧客との関係も深めたい！</span>
                    <h3 class="zennagePrice__cardCatch">LINE顧客サポート自動化プラン</h3>
                </div>
                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price4">
                        月額 <span class="zennagePrice__differentFont1"> 59,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <div class="zennagePrice__cardInner">
                        <div class="zennagePrice__goalWrap">
                            <p class="zennagePrice__goalTitle">- ゴール設定 -</p>
                            <p class="zennagePrice__goal">検索からの新規顧客獲得の安定化</p>
                        </div>
                        <div class="zennagePrice__descriptionWrap">
                            <div>
                                <p class="zennagePrice__descriptionCatch1">
                                    - 期待できる効果 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">既存のお客さまに送っていた情報提供のFAXや郵送を全て自動化。</li>
                                    <li class="zennagePrice__descriptionItem">しかも確実に届き、開封率もかなり高く、読んでもらいやすい！</li>
                                    <li class="zennagePrice__descriptionItem">取りこぼしていた見込み顧客、新規顧客が可視化され、アプローチもできる！</li>
                                </ul>
                            </div>
                            <div>
                                <p class="zennagePrice__descriptionCatch2">
                                    - 実現するための具体的な業務 -
                                </p>
                                <ul class="zennagePrice__descriptionList">
                                    <li class="zennagePrice__descriptionItem">LINE公式アカウントの構築</li>
                                    <li class="zennagePrice__descriptionItem">顧客セグメントの切り分け</li>
                                    <li class="zennagePrice__descriptionItem">自動応答シナリオの構築</li>
                                    <li class="zennagePrice__descriptionItem">定期配信のテンプレートの作成</li>
                                    <li class="zennagePrice__descriptionItem">説明文の作成・改善</li>
                                    <li class="zennagePrice__descriptionItem">申し込みフォームの設置</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="zennagePrice__underDescriptionWrap">
            <div class="zennagePrice__underDescriptionInner">
                <p class="zennagePrice__underDescription">
                    ※1 ブログの更新やWeb業務でお困りでないお客さまには、<br class="zennagePrice__break1">
                    　　サイトの保守管理のみの月額9,800円(税込み)のプランをご用意しておりますので、お気軽にご利用ください。
                </p>
                <p class="zennagePrice__underDescription">
                    ※2 ゴール設定はあくまで一例です。<br class="zennagePrice__break1">
                    　　お客さまに合わせてゴールを設定します。もちろん、そのままパッケージでのご提供も可能です。
                </p>
            </div>
        </div>
    </div>
</section>

<section class="jobDescription">
    <div class="jobDescription__wrapper blContainer" id="target_page-job-description">
        <h2 class="jobDescription__catch">
            またあれもこれも丸投げで、全部やっておいてほしい！<br>
            という方のために作業別にお見積りを出しておりますので、<br>
            お気軽にお申し付けください。
        </h2>
        <p class="jobDescription__description">
            ほんの一例ですが、作業内容の例をご紹介します。<br>
            実際には、各事業者さまに合わせた業務の内容を作成いたします。
        </p>
        <div class="jobDescription__cardWrap">
            <div class="jobDescription__card">
                <div class="jobDescription__imgWrap">
                    <img class="jobDescription__img" alt="パソコンのキーボードを打ち込んでいるイメージ画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/job_description1@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/job_description1@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/job_description1@1x.png')); ?> 2x"
                        loading="lazy">
                </div>
                <div class="jobDescription__textWrap">
                    <div class="jobDescription__numberWrap">
                        <span class="jobDescription__number">01</span>
                    </div>
                    <div class="jobDescription__textInner">
                        <h3 class="jobDescription__cardTitle">ブログ記事・ニュース記事・SNSなどの更新</h3>
                        <p class="jobDescription__text">
                            定期的なホームページのコンテンツ更新やSNSの更新は、自社の認知度を高めるために大切な業務です。<br>
                            お客さまに対面、オンライン、お電話のいずれかで、取材をさせていただき、<br class="jobDescription__break1">
                            その内容をホームページの記事や各SNSが持つ雰囲気や特徴に合わせて落とし込み、更新をしていきます。<br>
                            取材で足りない場合は、こちらで情報収集させていただき、オリジナルで作成させていただきます。
                        </p>
                    </div>
                </div>
            </div>
            <div class="jobDescription__card">
                <div class="jobDescription__imgWrap">
                    <img class="jobDescription__img" alt="資料をデスクに並べて打ち合わせをしているイメージ画像あ"
                        src="<?php echo esc_url(get_theme_file_uri('img/job_description2@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/job_description2@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/job_description2@1x.png')); ?> 2x"
                        loading="lazy">
                </div>
                <div class="jobDescription__textWrap">
                    <div class="jobDescription__numberWrap">
                        <span class="jobDescription__number">02</span>
                    </div>
                    <div class="jobDescription__textInner">
                        <h3 class="jobDescription__cardTitle">チラシや会社資料の作成も可能</h3>
                        <p class="jobDescription__text">
                            企業さまから資料作成のご依頼をいただくこともございます。<br>
                            資料といっても幅広く、社内配布用の資料や社外への提案資料、チラシのデザインも可能です。<br>
                            データでお渡ししますので、使い回しが可能です。
                            急遽簡易的な資料やチラシが必要になった時に有効活用していただいております。
                        </p>
                    </div>
                </div>
            </div>
            <div class="jobDescription__card">
                <div class="jobDescription__imgWrap">
                    <img class="jobDescription__img" alt="グラフを表示しているノートパソコンの画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/job_description3@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/job_description3@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/job_description3@1x.png')); ?> 2x"
                        loading="lazy">
                </div>
                <div class="jobDescription__textWrap">
                    <div class="jobDescription__numberWrap">
                        <span class="jobDescription__number">03</span>
                    </div>
                    <div class="jobDescription__textInner">
                        <h3 class="jobDescription__cardTitle">競合他社の分析</h3>
                        <p class="jobDescription__text">
                            競合他社の分析は、事業者さまご自身でも行っていると思いますので、
                            こちらでは検索順位や他者のホームページと比較して、
                            優位性を持たせるためには具体的にどうすればいいか？という視点で分析をし、
                            今後の事業の方向性を加味して、ご提案、情報提供させていただきます。<br>
                            もちろん、単純に事業の観点や業界の動向などの観点からの分析も事業者さまがご希望であれば、可能です。
                        </p>
                    </div>
                </div>
            </div>
            <div class="jobDescription__card">
                <div class="jobDescription__imgWrap">
                    <img class="jobDescription__img" alt="コーヒーを飲みながらiPadを片手に打ち合わせをしているイメージ画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/job_description4@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/job_description4@1x.png')); ?> 1x,
                        <?php echo esc_url(get_theme_file_uri('img/job_description4@1x.png')); ?> 2x"
                        loading="lazy">
                </div>
                <div class="jobDescription__textWrap">
                    <div class="jobDescription__numberWrap">
                        <span class="jobDescription__number">04</span>
                    </div>
                    <div class="jobDescription__textInner">
                        <h3 class="jobDescription__cardTitle">定期的な方向性の打ち合わせ</h3>
                        <p class="jobDescription__text">
                            お客さまのご希望に合わせた方法で、ホームページの更新や各種SNSの運用などの方向性について、<br>
                            解析結果などを見ながら、目的を持って打ち合わせをさせていただきます。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="highQuality blContainer">
    <div class="highQuality__catchWrap">
        <h2 class="highQuality__catch">
            基盤を作ったあとで、<br>
            本格的にWeb施策で課題を解決したい方へ
        </h2>
    </div>
    <div class="highQuality__cardWrap">
        <div class="highQuality__card">
            <div class="highQuality__cardInner">
                <div class="highQuality__cardTitleWrap">
                    <p class="highQuality__cardCatch">
                        Web集客に本格的に力をいれたい方へ
                    </p>
                    <h3 class="highQuality__cardTitle">
                        A.士業集客オールインワン<br>
                        検索からの集客対策
                    </h3>
                    <p class="highQuality__price">￥13万〜17万</p>
                </div>

                <div class="highQuality__goalWrap">
                    <p class="highQuality__goalTitle">目指す成果と方向性</p>
                    <p class="highQuality__goal">
                        「半年以内に顧問契約数を20％増加」など<br>
                        (事務所の課題に合わせて方向性を決めさせていただきます。)
                    </p>
                </div>
                <div class="highQuality__operationWrap">
                    <p class="highQuality__operationTitle">具体的な施策と業務の例</p>
                    <ul class="highQuality__operationList">
                        <li class="highQuality__operationItem">SEO記事2本／月</li>
                        <li class="highQuality__operationItem">Googleビジネス強化</li>
                        <li class="highQuality__operationItem">アクセス解析</li>
                        <li class="highQuality__operationItem">サイト改善提案</li>
                        <li class="highQuality__operationItem">LP作成・改善</li>
                        <li class="highQuality__operationItem">llms.txtの設置(AI対策)</li>
                        <li class="highQuality__operationItem">月次会議</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="highQuality__card">
            <div class="highQuality__cardInner">
                <div class="highQuality__cardTitleWrap">
                    <p class="highQuality__cardCatch">
                        費用を抑えて本格的に採用を行いたい方へ
                    </p>
                    <h3 class="highQuality__cardTitle">
                        B.採用ブランディング<br>
                        強化パック
                    </h3>
                    <p class="highQuality__price">￥16万〜20万</p>
                </div>

                <div class="highQuality__goalWrap">
                    <p class="highQuality__goalTitle">目指す成果と方向性</p>
                    <p class="highQuality__goal">
                        「応募数×質を両立し、採用コスト削減」など<br>
                        (事務所の課題に合わせて方向性を決めさせていただきます。)
                    </p>
                </div>
                <div class="highQuality__operationWrap">
                    <p class="highQuality__operationTitle">具体的な施策と業務の例</p>
                    <ul class="highQuality__operationList">
                        <li class="highQuality__operationItem">採用HP、LPの改善</li>
                        <li class="highQuality__operationItem">求人SEO記事執筆</li>
                        <li class="highQuality__operationItem">SNS投稿</li>
                        <li class="highQuality__operationItem">indeed求人表の作成支援</li>
                        <li class="highQuality__operationItem">求人ボックスSEO対策</li>
                        <li class="highQuality__operationItem">月次レポート（応募数・PV推移）</li>
                        <li class="highQuality__operationItem">PV数値分析、改善提案</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="highQuality__card">
            <div class="highQuality__cardInner">
                <div class="highQuality__cardTitleWrap">
                    <p class="highQuality__cardCatch">
                        Web集客も業務効率化も両方行いたい方へ
                    </p>
                    <h3 class="highQuality__cardTitle">
                        C.顧問契約率向上施策<br>
                        集客施策の伴奏支援
                    </h3>
                    <p class="highQuality__price">￥14万〜18万</p>
                </div>

                <div class="highQuality__goalWrap">
                    <p class="highQuality__goalTitle">目指す成果と方向性</p>
                    <p class="highQuality__goal">
                        「成約率10％向上」「顧問契約数3件向上/月」など<br>
                        (事務所の課題に合わせて方向性を決めさせていただきます。)
                    </p>
                </div>
                <div class="highQuality__operationWrap">
                    <p class="highQuality__operationTitle">具体的な施策と業務の例</p>
                    <ul class="highQuality__operationList">
                        <li class="highQuality__operationItem">営業導線設計図の作成の伴奏支援</li>
                        <li class="highQuality__operationItem">提案資料作成支援</li>
                        <li class="highQuality__operationItem">ターゲット選定支援</li>
                        <li class="highQuality__operationItem">公式LINEアカウントでの顧客管理</li>
                        <li class="highQuality__operationItem">公式LINEでの情報配信の仕組み作り</li>
                        <li class="highQuality__operationItem">営業後情報配信の自動化の仕組み作り</li>
                        <li class="highQuality__operationItem">アクションタグの設置</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="highQuality__textWrap">
        <p class="highQuality__text">
            集客や、採用にお悩みはありませんか？<br>
            Web施策のために社員の雇用や、採用をお考えでしたらぜひ上記のプランをご検討ください。<br>
            貴所の採用・Web戦略を専任のプロが、より低価格で、より効率的かつ費用対効果高くサポートします。<br>
            まずは一度、お問い合わせフォームから無料相談の申し込みをいただければと思います。
        </p>
    </div>

</section>

<section class="frequencyQa">
    <div class="frequencyQa__wrapper blContainer" id="target_page-frequency-qa">
        <div class="frequencyQa__headingWrap heading">
            <h2 class="frequencyQa__headingEn heading__en">Q&A</h2>
            <h2 class="frequencyQa__headingJp heading__jp">よくあるご質問</h2>
        </div>
        <div class="frequencyQa__cardWrap">
            <div class="frequencyQa__card">
                <div class="frequencyQa__titleWrap">
                    <h3 class="frequencyQa__title">Q. 運用サービスを契約したら、すぐに検索順位は上がりますか？</h3>
                </div>
                <div class="frequencyQa__answerWrap">
                    <p class="frequencyQa__answer">
                        一番よくいただくご質問なのですが、正直に申し上げますと、検索順位は一朝一夕では上がりません。
                        アクセス数、お問い合わせ数を上げることも同様です。
                        SEO対策とサイト改善施策を地道に行っていくことで、徐々に成果が表れてくるのが一般的です。
                        時間はかかりますが、更新・運用を続けていくことで検索結果に上がってくる可能性は大きく上がります。
                        当運用サービスは、検索結果上位に上がる確率を上げる作業となります。
                    </p>
                </div>
            </div>
            <div class="frequencyQa__card">
                <div class="frequencyQa__titleWrap">
                    <h3 class="frequencyQa__title">Q. 運用サービスを利用しなくても、自分たちで更新すればいいのでは？</h3>
                </div>
                <div class="frequencyQa__answerWrap">
                    <p class="frequencyQa__answer">
                        はい。その通りです。SEO対策やユーザーの回遊率アップ、お問い合わせへの導線などは、専門的知識が必要となってくるため、
                        運用プランではその部分のサポートに尽力させていただいております。
                        こちらのプランは、普段本業で忙しく、なかなかサイト更新まで手が回らないお客さまにご提案させていただくプランとなっております。
                        ご自身で更新・運用されたい場合は、お客さまがいずれ運用を自走できるようにサポートプログラムを組ませていただくことも可能です。
                    </p>
                </div>
            </div>
            <div class="frequencyQa__card" id="target_page-zennage-contact">
                <div class="frequencyQa__titleWrap">
                    <h3 class="frequencyQa__title">Q.何もしなくても勝手に更新しておいてもらえるの？</h3>
                </div>
                <div class="frequencyQa__answerWrap">
                    <p class="frequencyQa__answer">
                        サイト運用に必要な事業に関する専門的な知識が必要となりますので、
                        最低限、お客さまへの取材や必要な情報のご提供はご対応いただく形となります。
                        お客さまご自身も積極的に運用に参加していただいた方が、お問い合わせ数の増加にダイレクトに影響します。
                        ユーザーはサイトを見るとき、情報だけでなく、企業の想いまで読み取ります。
                        特に採用やサービスを利用しようと考えているユーザーほど、その傾向は顕著に出ます。
                        ですので、積極的にご協力いただいた方が結果的にお客さまのサイトを成長させるスピードは上がります。
                    </p>
                </div>
            </div>
        </div>
        <p class="frequencyQa__annotation">
            上記以外に何かご不明点がございましたら、お気軽にお問い合わせください。<br>
            またその他、SNSの投稿をはじめ、名刺やチラシ、営業活動に必要な会社資料など様々なご要望に柔軟に対応しております。<br>
            詳しくは、お問い合わせください。
        </p>
        <div class="frequencyQa__btnWrap">
            <a class="frequencyQa__contactBtn btn1" href="<?php echo esc_url(home_url('contact')); ?>">
                <i class="fa-solid fa-envelope"></i>
                <span class="frequencyQa__btnText btn1__text">メールで相談</span>
            </a>
            <a class="frequencyQa__lineBtn btn2" href="javascript:void(0);" onclick="openModal()">
                <i class="fa-brands fa-line"></i>
                <span class="frequencyQa__btnText btn2__text">LINEで相談</span>
            </a>
            <a class="frequencyQa__lineBtnSp btn2" href="https://line.me/R/ti/p/@647fpjdy">
                <i class="fa-brands fa-line"></i>
                <span class="frequencyQa__btnText btn2__text">LINEで相談</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>