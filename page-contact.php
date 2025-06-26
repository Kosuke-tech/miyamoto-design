<?php get_header(); ?>
<section class="contact blContainer" id="inquiry">
    <h2 class="contact__heading heading" id="target_contact">お問い合わせフォーム</h2>
    <p class="contact__description1">
        ご相談、簡単なお見積りなどお気軽にご相談ください。<br>
        ご送信いただいてから2〜3営業日以内に返信させていただきます。<br>
        同業者様からのご連絡は、<br class="contact__break1">
        直接<a class="contact__mailAddress" href="mailto:miyamoto-design.2024@outlook.jp">下記のメールアドレス</a>にて
        ご連絡くださいますようお願い申し上げます。
    </p>
    <p class="contact__description2">
        ※同業者様ご連絡先メールアドレス<span class="contact__break2">：</span><br class="contact__break3">
        <span class="contact__underLine">miyamoto-design.2024@outlook.jp</span>
    </p>
</section>
<section class="form formContainer">
    <?php echo do_shortcode('[contact-form-7 id="fa2ba48" title="お問い合わせフォーム"]'); ?>
</section>
<?php get_footer(); ?>