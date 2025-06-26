<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('img/favicon@2x.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('img/favicon@1x.png'); ?>">
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <meta name="description" content="埼玉県越谷市が拠点の売上に貢献するWeb制作事務所。SEO対策、サイトの運用まで行います。制作後のサービスはSEOに特化して行っており、Googleへの最適化を行い、検索順位を上げることで売上に貢献します。">
    <!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5GVZYPY291"></script>
<script src="https://analytics.ahrefs.com/analytics.js" data-key="sXLW5xp4QirHTtD6GKRaQg" async></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5GVZYPY291');
</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!------------------------------------- ヘッダー ------------------------------------->
    <header class="header" id="header">
        <div class="header__inner blContainer">
            <div class="header__subLinkWrap">
                <a class="header__subLink" href="<?php echo esc_url(home_url('/notice')); ?>">お知らせ</a>
                <a class="header__subLink" href="<?php echo esc_url(home_url('/author')); ?>">制作者プロフィール</a>
            </div>
            <div class="header__wrapper">
                <a class="header__logoWrap" href="<?php echo esc_url(home_url('/')) ?>">
                    <img class="header__logo" alt="ヘッダーのロゴ"
                        src="<?php echo esc_url(get_theme_file_uri('img/logo_horizontal@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('img/logo_horizontal@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/logo_horizontal@2x.png')); ?> 2x">
                </a>
                <ul class="header__navList">
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                    </li>
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/price')); ?>">制作料金・プラン</a>
                    </li>
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/zennage')); ?>">ゼンナゲ</a>
                    </li>
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/flow')); ?>">制作の流れ</a>
                    </li>
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
                    </li>
                    <li class="header__navItem">
                        <a class="header__navLink" href="<?php echo esc_url(home_url('/work')); ?>">制作実績</a>
                    </li>
                </ul>
                <div class="header__btnWrap">
                    <a class="header__contactBtn btn1" href="<?php echo esc_url(home_url('/contact')); ?>">
                        <i class="fa-solid fa-envelope"></i>
                        <span class="btn1__text">メールで相談</span>
                    </a>
                    <a class="header__lineBtn btn2" href="javascript:void(0);" onclick="openModal()">
                        <i class="fa-brands fa-line"></i>
                        <span class="btn2__text">LINEで相談</span>
                    </a>
                </div>
            </div>
        </div>
        <!-------------------------------------------------- スマホメニュー ---------------------------------------------->
        <div class="spMenu">
            <input id="navToggle" class="spMenu__toggle" type="checkbox" tabindex="-1">
            <img class="spMenu__estimateBtnImg" alt="書類を持った男性のイラスト画像"
                src="<?php echo esc_url(get_theme_file_uri('img/estimate_btn@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('img/estimate_btn@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/estimate_btn@2x.png')); ?> 2x">
            <div class="spMenu__estimateBtn">
                <a class="spMenu__estimateLink" href="<?php echo esc_url(home_url('/contact')); ?>">お見積もり<br>無料相談はこちら</a>
            </div>
            <label class="spMenu__hamburger" for="navToggle">
                <span class="spMenu__hamburgerLine"></span>
            </label>
            <!-- SPナビメニュー -->
            <div class="spMenu__wrapper">
                <nav class="spMenu__nav">
                    <ul class="spMenu__list">
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/price')); ?>">制作料金・プラン</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/zennage')); ?>">ゼンナゲ</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/flow')); ?>">制作の流れ</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/notice')); ?>">お知らせ</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/work')); ?>">制作実績</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/author')); ?>">制作者プロフィール</a>
                        </li>
                    </ul>
                </nav>
                <nav class="subSpMenu spMenu__sub">
                    <a class="subSpMenu__contactBtn" href="<?php echo esc_url(home_url('/contact')); ?>">
                        <i class="subSpMenu__icon1 fa-solid fa-envelope"></i>
                        <span class="subSpMenu__btnText1">メールで相談</span>
                    </a>
                    <a class="subSpMenu__lineBtn" href="https://line.me/R/ti/p/@647fpjdy" target="_blank">
                        <i class="subSpMenu__icon2 fa-brands fa-line"></i>
                        <span class="subSpMenu__btnText1">LINEで相談</span>
                    </a>
                </nav>
            </div>
        </div>
        </div>
    </header>

    <!-- モーダルのHTML -->
    <div id="lineModal" class="modal">
        <div class="modal__content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img src="https://qr-official.line.me/gs/M_647fpjdy_GW.png?oat_content=qr" alt="LINE QRコード" style="width: 100%; max-width: 300px;">
            <h2 class="modal__title">QRコードをスキャンするとLINEの友だちに追加されます</h2>
            <p class="modal__text1">
                QRコードをスキャンするには、LINEアプリのコードリーダーをご利用ください。
            </p>
            <p class="modal__text2">
                ※コードリーダーはトーク画面の検索バーの右にあります。
            </p>
        </div>
    </div>