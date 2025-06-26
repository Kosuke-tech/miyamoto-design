<!-- これはfooter.phpです。 -->
<!------------------------------------- フッター ------------------------------------->
<footer class="footer">
    <div class="footer__wrapper blContainer">
        <a class="footer__logoWrap">
            <img class="footer__logo" alt="フッターのロゴ"
                src="<?php echo esc_url(get_theme_file_uri('img/logo_horizontal@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('img/logo_horizontal@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/logo_horizontal@2x.png')); ?> 2x">
        </a>
        <ul class="footer__listWrap">
            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                <div class="footer__subLinkWrap">
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_issue')); ?>">お困りごと</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_recommend')); ?>">こんな方におすすめ</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_agency')); ?>">運用代行プラン ゼンナゲ</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_ask')); ?>">4つのメリット</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_use')); ?>">サービスの活用方法</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_price')); ?>">制作料金・プラン</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/#target_work')); ?>">直近の制作実績</a>
                </div>
            </li>

            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('/price')); ?>">制作料金・プラン</a>
                <div class="footer__subLinkWrap">
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_service')); ?>">サービス概要</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-recommend')); ?>">こんな方におすすめ</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-agency')); ?>">運用代行プラン ゼンナゲ</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-use')); ?>">サービスの活用方法</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_page-price')); ?>">制作料金・プラン</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/price/#target_inquiry')); ?>">相談・お問い合わせ</a>
                </div>
            </li>

            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('/zennage')); ?>">運用代行プラン ゼンナゲ</a>
                <div class="footer__subLinkWrap">
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/zennage/#target_page-operation')); ?>">ゼンナゲについて</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/zennage/#target_page-leave')); ?>">ゼンナゲのご提案内容</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/zennage/#target_page-zennage-price')); ?>">ゼンナゲの料金</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/zennage/#target_page-job-description')); ?>">ゼンナゲの作業内容</a>
                    <a class="footer__subLink" href="<?php echo esc_url(home_url('/zennage/#target_page-frequency-qa')); ?>">よくあるご質問</a>
                </div>
            </li>

            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('business')); ?>">ブログ</a>
                <div class="footer__subLinkWrap">
                    <div class="footer__contentsWrap">
                        <?php
                        $args = [
                            'post_type'      => 'blog',
                            'posts_per_page' => 5,
                            'post_status'    => 'publish',
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ];
                        $blog_query = new WP_Query($args);

                        if ($blog_query->have_posts()) :
                            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                                <a class="footer__titleLink" href="<?php the_permalink(); ?>">
                                    <h3 class="footer__cardTitle">
                                        <?php
                                        $title = get_the_title();
                                        $limit_text = 15;

                                        if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                            echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                        } else {
                                            echo $title; // 制限文字数以内の場合はそのまま表示
                                        }
                                        ?>
                                    </h3>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>現在ブログの投稿ありません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </li>

            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('recruit')); ?>">制作実績</a>
                <div class="footer__subLinkWrap">
                    <div class="footer__contentsWrap">
                        <?php
                        $args = [
                            'post_type'      => 'work',
                            'posts_per_page' => 5,
                            'post_status'    => 'publish',
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ];
                        $work_query = new WP_Query($args);

                        if ($work_query->have_posts()) :
                            while ($work_query->have_posts()) : $work_query->the_post(); ?>
                                <a class="footer__titleLink" href="<?php the_permalink(); ?>">
                                    <h3 class="footer__cardTitle">
                                        <?php
                                        $title = get_the_title();
                                        $limit_text = 15;

                                        if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                            echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                        } else {
                                            echo $title; // 制限文字数以内の場合はそのまま表示
                                        }
                                        ?>
                                    </h3>
                                </a>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>現在投稿ありません。</p>
                        <?php endif; ?>
                    </div>
                </div>
            </li>

            <li class="footer__item">
                <a class="footer__link" href="<?php echo esc_url(home_url('recruit')); ?>">お問い合わせ</a>
                <div class="footer__btnWrap">
                    <a class="footer__contactBtn btn1" href="<?php echo esc_url(home_url('/contact')); ?>">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="btn1__text">メールで相談</span>
                    </a>
                    <a class="footer__lineBtn btn2" href="javascript:void(0);" onclick="openModal()">
                        <i class="fa-brands fa-line"></i>
                        <span class="btn2__text">LINEで相談</span>
                    </a>
                    <a class="footer__lineBtnSP btn2" href="https://line.me/R/ti/p/@647fpjdy" target="_blank">
                        <i class="fa-brands fa-line"></i>
                        <span class="btn2__text">LINEで相談</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div class="footer__underNav">
        <div class="footer__underLineBtn">
            <a class="footer__underLineLink" href="javascript:void(0);" onclick="openModal()"><span class="footer__bold">LINE</span>で相談の方はこちら</a>
        </div>
        <div class="footer__underLineBtnSp">
            <a class="footer__underLineLink" href="https://line.me/R/ti/p/@647fpjdy" target="_blank"><span class="footer__bold">LINE</span>で相談の方はこちら</a>
        </div>
        <div class="footer__underTopBtn">
            <a class="footer__underTopLink" href="#">PAGE <br> TOP</a>
        </div>
    </div>
    <div class="footer__copyWrap">
        <small class="footer__copy"> &copy; <?php echo get_the_date('Y'); ?>東京 埼玉 ホームページ制作 webデザイン Miyamoyo design</small>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>