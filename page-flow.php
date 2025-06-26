<?php get_header(); ?>

<section class="flow">
    <div class="flow__wrapper blContainer" id="target_page-flow">
        <div class="flow__headingWrap heading">
            <h2 class="flow__headingEn heading__en">Flow</h2>
            <h2 class="flow__headingJp heading__jp">ご相談からサイト公開までの流れ</h2>
        </div>
        <div class="flow__cardWrap">
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img" alt="スマホを見ている女性の後ろ姿の画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow1@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow1@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow1@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">1</span>
                        </div>
                        <h3 class="flow__cardTitle">ご相談・お問い合わせ</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            <a class="flow__textBtn1" href="javascript:void(0);" onclick="openModal()">
                                LINE</a>
                            <a class="flow__textBtn1Sp" href="https://line.me/R/ti/p/@647fpjdy" target="_blank">
                                LINE</a>
                            か
                            <a class="flow__textBtn2" href="<?php echo esc_url(home_url('/contact')); ?>">
                                お問い合わせフォーム</a>にてお問い合わせください。<br>
                            <br>
                            既にホームページをお持ちの企業様さま(個人さま)はURLをご記載いただきましたら、やり取りがスムーズになります。<br>
                            お電話またはZoomでのお打ち合わせの日程調整をさせていただきます。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow2@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow2@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow2@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">2</span>
                        </div>
                        <h3 class="flow__cardTitle">お打ち合わせ・見積書の提出</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            ヒアリング内容をもとに、制作の方向性を整理します。<br>
                            お打ち合わせの方法は、オンラインミーティングか、対面を推奨しております。<br>
                            お打ち合わせでご要望をお伺いした後、
                            具体的なページ構成や必要機能を明確にし、制作費用のお見積書をご提示いたします。<br>
                            またトラブル防止のため、契約書の締結もこの段階でお願いしております。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img flow__img3" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow3@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow3@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow3@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">3</span>
                        </div>
                        <h3 class="flow__cardTitle">サイト設計とスケジュールの提案書の提出</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            ターゲットや目的に応じて、<br>
                            サイト全体の設計(構成案・導線設計)と制作スケジュールをご提案します。<br>
                            <br>
                            この段階で「どんなサイトにするか」を固めていきます。<br>
                            内容にご承諾いただいた後に、制作作業に入らせていただきます。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow4@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow4@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow4@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">4</span>
                        </div>
                        <h3 class="flow__cardTitle">サイト設計書・デザイン制作</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            設計内容に基づいて、ページごとの構成案にあたるサイト設計書(ワイヤーフレーム)を作成し、デザインを制作していきます。<br>
                            ブランドイメージやお好み、プランに合わせて、見やすいデザインをご提案します。
                            たたき台としてその都度お打ち合わせにてデザインの確認をしていただき、擦り合わせていきます。
                            デザインが完成しましたら、コーディングに入ります。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow5@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow5@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow5@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">5</span>
                        </div>
                        <h3 class="flow__cardTitle">サイト構築</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            デザインが確定しましたら、実際にブラウザの画面に表示できるようWebサイトを構築します。<br>
                            HTML/CSS/JavaScriptといった言語を用いたコーディングや、<br>
                            必要に応じて更新機能のついたシステムの実装やお問い合わせフォームの実装も行います。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img flow__img6" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow6@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow6@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow6@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">6</span>
                        </div>
                        <h3 class="flow__cardTitle">テスト環境でのサイト確認</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            公開前にテスト環境(一般のユーザーには公開されないパスワード付きの環境)をご用意し、<br>
                            実際の画面でご確認いただきます。<br>
                            表示崩れがないか確認していただいたり、動作確認を行います。必要に応じて微調整を加えます。
                        </p>
                    </div>
                </div>
            </div>
            <div class="flow__card">
                <div class="flow__imgWrap">
                    <img class="flow__img" alt="ホームページ制作で困っている男性のイラスト画像"
                        src="<?php echo esc_url(get_theme_file_uri('img/flow7@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/flow7@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/flow7@2x.png')); ?> 2x">
                </div>
                <div class="flow__cardTextWrap">
                    <div class="flow__cardTextInner">
                        <div class="flow__numberWrap">
                            <span class="flow__number">7</span>
                        </div>
                        <h3 class="flow__cardTitle">本番公開</h3>
                    </div>
                    <div class="flow__descriptionWrap">
                        <p class="flow__description">
                            ご確認・ご承認後、最終調整を行い、本番環境にサイトを公開し、問題がなければ納品完了となります。<br>
                            納品後も、更新や運用面でのサポートをご希望の方には継続的にサポートいたします。<br>
                            サーバーやドメインのご契約の費用は、皆さまお客さまにご負担お願いしております。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p class="flow__annotation">
            その他、SNSをはじめ、名刺やチラシ、営業活動に必要な会社資料など様々なご要望に柔軟に対応しております。<br>
            詳しくは、お問い合わせください。
        </p>
        <div class="flow__btnWrap">
            <a class="flow__contactBtn btn1" href="<?php echo esc_url(home_url('contact')); ?>">
                <i class="fa-solid fa-envelope"></i>
                <span class="flow__btnText btn1__text">メールで相談</span>
            </a>
            <a class="flow__lineBtn btn2" href="javascript:void(0);" onclick="openModal()">
                <i class="fa-brands fa-line"></i>
                <span class="flow__btnText btn2__text">LINEで相談</span>
            </a>
            <a class="flow__lineBtnSp btn2" href="https://line.me/R/ti/p/@647fpjdy">
                <i class="fa-brands fa-line"></i>
                <span class="flow__btnText btn2__text">LINEで相談</span>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>