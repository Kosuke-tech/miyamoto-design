<?php get_header(); ?>

<section class="archiveNotice">
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
    <div class="archiveNotice__wrapper blContainer">
        <div class="archiveNotice__inner">
            <div class="archiveNotice__headingWrap heading">
                <h2 class="archiveNotice__headingEn heading__en">Notice</h2>
                <h2 class="archiveNotice__headingJp heading__jp">お知らせ</h2>
            </div>
            <div class="archiveNotice__btnWrap">
                <div class="archiveNotice__btnInner1 btn5">
                    <a class="archiveNotice__btn btn5__text" href="<?php echo esc_url(home_url('blog')); ?>">ブログ一覧はこちら</a>
                </div>
                <div class="archiveNotice__btnInner2 btn5">
                    <a class="archiveNotice__btn btn5__text" href="<?php echo esc_url(home_url('work')); ?>">制作実績はこちら</a>
                </div>
            </div>
            <div class="archiveNotice__imgWrap">
                <img class="archiveNotice__img" alt="資料を持って何かを説明している男性のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/archive_notice@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/archive_notice@1x.png')); ?> 1x,
                             <?php echo esc_url(get_theme_file_uri('img/archive_notice@1x.png')); ?> 2x">
            </div>
        </div>

        <div class="archiveNotice__contentsWrap">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
                'post_type'      => 'notice',
                'posts_per_page' => 8,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged, // ページネーション用
            ];
            $notice_query = new WP_Query($args);

            if ($notice_query->have_posts()) :
                while ($notice_query->have_posts()) : $notice_query->the_post(); ?>
                    <a class="archiveNotice__contentsInner" href="<?php the_permalink(); ?>">
                        <div class="archiveNotice__thumbnailWrap">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="archiveNotice__thumbnail" alt="<?php the_title_attribute(); ?> のサムネイル"
                                    src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                                    srcset="<?php echo esc_attr($thumbnail_srcset); ?>"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php else : ?>
                                <img class="archiveNotice__thumbnail" alt="サムネイルなし"
                                    src="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?> 1x,
                                        <?php echo esc_url(get_theme_file_uri('img/no_image@2x.png')); ?> 2x"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php endif; ?>
                        </div>
                        <div class="archiveNotice__textWrap">
                            <div class="archiveNotice__textInner">
                                <div class="archiveNotice__dcWrap">
                                    <span class="archiveNotice__date"><?php echo get_the_date('n.j'); ?></span>
                                    <span class="archiveNotice__tagWrap">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'notice_tag');
                                        if (! empty($terms) && ! is_wp_error($terms)) {
                                            echo '<div class="archiveNotice__tag">';
                                            foreach ($terms as $term) {
                                                echo '<span class="archiveNotice__tagText">' . esc_html($term->name) . '</span>';
                                            }
                                            echo '</div>';
                                        }
                                        ?>
                                    </span>
                                    <span class="archiveNotice__categoryWrap">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'notice_category');
                                        if (! empty($terms) && ! is_wp_error($terms)) {
                                            echo '<div class="archiveNotice__category">';
                                            foreach ($terms as $term) {
                                                echo '<span class="archiveNotice__categoryText">' . esc_html($term->name) . '</span>';
                                            }
                                            echo '</div>';
                                        }
                                        ?>
                                    </span>
                                </div>
                                <h3 class="archiveNotice__title">
                                    <?php
                                    $title = get_the_title();
                                    $limit_text = 35;

                                    if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                        echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                    } else {
                                        echo $title; // 制限文字数以内の場合はそのまま表示
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>
                        <div class="archiveNotice__iconWrap">
                            <i class="archiveNotice__icon fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在お知らせはありません。</p>
            <?php endif; ?>
        </div>
        <!--------- ページネーション --------->
        <?php
        $paginetion = [
            'mid_size' => 2,
            'prev_text' => '<前',
            'next_text' => '次>',
            'total' => $notice_query->max_num_pages,
            'query' => $notice_query,
        ];
        the_posts_pagination($paginetion);
        ?>
    </div>
</section>



<?php get_footer(); ?>