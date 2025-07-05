<?php get_header(); ?>

<nav class="subMenu">
    <ul class="subMenu__list blContainer">
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-operation')); ?>">丸投げ運用プラン<br>ゼンナゲ</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-leave')); ?>">ご提案の内容</a>
        </li>
        <li class="subMenu__item">
            <a class="subMenu__link" href="<?php echo esc_url(home_url('/zennage/#target_page-zennage-price')); ?>">料金と作業量の目安</a>
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
            <h2 class="operation__headingJp heading__jp">運用プラン ゼンナゲ</h2>
        </div>
        <div class="operation__contentsWrap">
            <div class="operation__catchWrap">
                <h3 class="operation__catch">
                    運用プラン「ゼンナゲ」は、<br>お客さまのお困りごと、ご要望から始めたプランです。<br>
                    事業者さまのご要望に合わせて、無駄なものは省き、柔軟にプランを作成させていただきます。<br>
                    もちろんサービス名の通り「ゼンナゲ」していただくことも可能です。
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
                <span class="operation__btnText btn3__text">ゼンナゲの料金の見る</span>
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
        <h2 class="zennagePrice__catch">ゼンナゲの料金と作業量の目安</h2>
        <div class="zennagePrice__cardWrap">
            <div class="zennagePrice__card">
                <div class="zennagePrice__cardCatchWrap cardTitleBg1">
                    <h3 class="zennagePrice__cardCatch">ちょこっと更新プラン</h3>
                </div>

                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price1">
                        月額 <span class="zennagePrice__differentFont1"> 32,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <p class="zennagePrice__count">
                        月に <span class="zennagePrice__differentFont3">4</span>
                        <span class="zennagePrice__differentFont4">回</span>(週1回)の更新
                    </p>
                    <div class="zennagePrice__descriptionWrap">
                        <p class="zennagePrice__descriptionCatch">
                            - 1ヶ月の更新量の目安 -
                        </p>
                        <ul class="zennagePrice__descriptionList">
                            <li class="zennagePrice__descriptionItem">2ヶ月に1回のオンライン会議</li>
                            <li class="zennagePrice__descriptionItem">(例)ブログ記事4記事作成</li>
                            <li class="zennagePrice__descriptionItem">(例)名刺や会社資料の作成</li>
                            <li class="zennagePrice__descriptionItem">アクセス解析 ~ 結果のご報告</li>
                            <li class="zennagePrice__descriptionItem">更新及び改善のご提案</li>
                        </ul>
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
                    <h3 class="zennagePrice__cardCatch">がんばる更新プラン</h3>
                </div>
                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price2">
                        月額<span class="zennagePrice__differentFont1"> 56,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <p class="zennagePrice__count">
                        月に <span class="zennagePrice__differentFont3">8</span>
                        <span class="zennagePrice__differentFont4">回</span>(週2回)の更新
                    </p>
                    <div class="zennagePrice__descriptionWrap">
                        <p class="zennagePrice__descriptionCatch">
                            - 1ヶ月の更新量の目安 -
                        </p>
                        <ul class="zennagePrice__descriptionList">
                            <li class="zennagePrice__descriptionItem">2ヶ月に1回のオンライン会議</li>
                            <li class="zennagePrice__descriptionItem">(例)ブログ記事8記事作成</li>
                            <li class="zennagePrice__descriptionItem">(例)Googleマップの投稿2件</li>
                            <li class="zennagePrice__descriptionItem">アクセス解析 ~ 結果のご報告</li>
                            <li class="zennagePrice__descriptionItem">更新及び改善のご提案</li>
                        </ul>
                            <p class="zennagePrice__mapDescription">
                            ※Googleマップの投稿は、<br>
                            店舗型ビジネスなどに<br>
                            最適な施策です。
                        </p>
                    </div>
                </div>
            </div>
            <div class="zennagePrice__card">
                <div class="zennagePrice__cardCatchWrap cardTitleBg4">
                    <h3 class="zennagePrice__cardCatch">専属Web担当者プラン</h3>
                </div>
                <div class="zennagePrice__cardTextWrap">
                    <p class="zennagePrice__price zennagePrice__price4">
                        月額 <span class="zennagePrice__differentFont1"> 76,800</span>
                        <span class="zennagePrice__differentFont2">円</span>(税込)
                    </p>
                    <p class="zennagePrice__count">
                        月に <span class="zennagePrice__differentFont3">12</span>
                        <span class="zennagePrice__differentFont4">回</span>(週3回)の更新
                    </p>
                    <div class="zennagePrice__descriptionWrap">
                        <p class="zennagePrice__descriptionCatch">
                            - 1ヶ月の更新量の目安 -
                        </p>
                        <ul class="zennagePrice__descriptionList">
                            <li class="zennagePrice__descriptionItem">2ヶ月に1回のオンライン会議</li>
                            <li class="zennagePrice__descriptionItem">(例)ブログ記事12記事作成</li>
                            <li class="zennagePrice__descriptionItem">(例)LINE公式アカウントの作成</li>
                            <li class="zennagePrice__descriptionItem">アクセス解析 ~ 結果のご報告</li>
                            <li class="zennagePrice__descriptionItem">更新及び改善のご提案</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="zennagePrice__underDescriptionWrap">
        <p class="zennagePrice__underDescription">
            ※ブログの更新やWeb業務でお困りでないお客さまには、<br class="zennagePrice__break1">
            保守やサイトの修正のみの月額5,900円(税込み)のプランをご用意しておりますので、お気軽にご利用ください。
        </p>

        </div>
    </div>
</section>

<section class="jobDescription">
    <div class="jobDescription__wrapper blContainer" id="target_page-job-description">
        <div class="jobDescription__overWrap">
            <div class="jobDescription__headingWrap heading">
                <h2 class="jobDescription__headingEn heading__en">Job description</h2>
                <h2 class="jobDescription__headingJp heading__jp">具体的な作業内容</h2>
            </div>
            <p class="jobDescription__description">
                ほんの一例ですが、作業内容の例をご紹介します。<br>
                実際には、各事業者さまに合わせた業務の内容を作成いたします。
            </p>
        </div>
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
            <a class="frequencyQa__lineBtn btn2"  href="javascript:void(0);" onclick="openModal()">
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