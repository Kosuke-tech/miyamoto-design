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
                <h2 class="blog__headingJp heading__jp">Web制作者向け</h2>
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
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = [
                'post_type'      => 'blog',
                'posts_per_page' => 5,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged,
            ];
            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <a class="blog__cardWrap" href="<?php the_permalink(); ?>">
                        <div class="blog__thumbnailWrap">
                            <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="blog__thumbnail" alt="<?php the_title_attribute(); ?> のサムネイル"
                                    src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                                    srcset="<?php echo esc_attr($thumbnail_srcset); ?>"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php else : ?>
                                <img class="blog__thumbnail" alt="サムネイルなし"
                                    src="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?> 1x,
                                        <?php echo esc_url(get_theme_file_uri('img/no_image@2x.png')); ?> 2x"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php endif; ?>
                        </div>
                        <div class="blog__cardTextInner">
                            <div class="blog__dtWrap">
                                <span class="blog__cardDate"><?php echo get_the_date('Y.n.j'); ?></span>
                                <h3 class="blog__cardTitle">
                                                         <?php
                                $title = get_the_title();
                                $limit_text = 30;

                                if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                    echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                } else {
                                    echo $title; // 制限文字数以内の場合はそのまま表示
                                }
                                ?>
                                </h3>
                            </div>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                <?php endwhile; ?>

       <!--------- ページネーション --------->
            <?php 
            $paginetion = [
                'mid_size' => 2,
                'prev_text' => '<前',
                'next_text' => '次>',
                'total' => $blog_query->max_num_pages,
                'query' => $blog_query,
            ];
            the_posts_pagination($paginetion);
            ?>

                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在ブログ記事がありません。</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>