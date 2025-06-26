<?php get_header(); ?>
<section class="blog">
        <nav class="archiveSubMenu">
    <ul class="archiveSubMenu__list blContainer">
        <li class="archiveSubMenu__item">
            <a class="archiveSubMenu__link" href="<?php echo esc_url(home_url('notice')); ?>">お知らせ</a>
        </li>
        <li class="archiveSubMenu__item">
            <a class="archiveSubMenu__link" href="<?php echo esc_url(home_url('blog')); ?>">制作者ブログ</a>
        </li>
        <li class="archiveSubMenu__item">
            <?php 
            $term = get_term_by('slug', 'popular', 'blog_tag');
            $term_link = get_term_link($term);
            ?>
            <a class="archiveSubMenu__link" href="<?php echo esc_url($term_link); ?>">人気記事</a>
        </li>
        <li class="archiveSubMenu__item">
            <?php 
            $term = get_term_by('slug', 'web_creater', 'blog_category');
            $term_link = get_term_link($term);
            ?>
            <a class="archiveSubMenu__link" href="<?php echo esc_url($term_link); ?>">Web制作者向け</a>
       
        </li>
        <li class="archiveSubMenu__item">
            <?php 
            $term = get_term_by('slug', 'flyer', 'blog_category');
            $term_link = get_term_link($term);
            ?>
            <a class="archiveSubMenu__link" href="<?php echo esc_url($term_link); ?>">チラシ・印刷物</a>
        </li>
        <li class="archiveSubMenu__item">
            <a class="archiveSubMenu__link" href="<?php echo esc_url(home_url('work')); ?>">制作実績</a>
        </li>
        <li class="archiveSubMenu__item">
            <?php 
            $term = get_term_by('slug', 'ec_site', 'blog_category');
            $term_link = get_term_link($term);
            ?>
            <a class="archiveSubMenu__link" href="<?php echo esc_url($term_link); ?>">ECサイト(準備中)</a>
        </li>
    </ul>
</nav>
    <div class="blog__wrapper blContainer">
        <div class="blog__inner">
            <div class="blog__headingWrap heading">
                <h2 class="blog__headingEn heading__en">Blog</h2>
                <h2 class="blog__headingJp heading__jp">ECサイト</h2>
            </div>
            <div class="blog__btnWrap btn5">
                <a class="blog__btn btn5__text" href="<?php echo esc_url(home_url('work')); ?>">制作実績はこちら</a>
            </div>
            <div class="blog__imgWrap">
                <img class="blog__img" alt="電球のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/blog@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/blog@1x.png')); ?> 1x,
                             <?php echo esc_url(get_theme_file_uri('img/blog@2x.png')); ?> 2x">
            </div>
        </div>
        <div class="blog__contentsWrap">
            <p>ただいま準備中です。今しばらくお待ちください。</p>
        </div>
    </div>
</section>
<?php get_footer(); ?>