<?php get_header(); ?>

<section class="thanks">
    <div class="thanks__wrapper blContainer">
        <div class="thanks__textWrap">
            <h2 class="thanks__text1">お問い合わせありがとうございました。</h2>
            <p class="thanks__text2">
                お問い合わせいただいた日から、3営業日以内にご返信させていただきます。<br>
                今後とも何卒よろしくお願いいたします。

            </p>
        </div>
        <div class="thanks__imgWrap">
                    <img class="thanks__img" alt="お辞儀をしている男性のイラスト画像"
            src="<?php echo esc_url(get_theme_file_uri('img/thanks@1x.png')); ?>"
            srcset="<?php echo esc_url(get_theme_file_uri('img/thanks@1x.png')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('img/thanks@2x.png')); ?> 2x"
            loading="lazy">
        </div>
    </div>

</section>
<?php get_footer(); ?>