<?php get_header(); ?>

<section class="work archiveWork">
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
    <div class="work__wrapper blContainer" id="target_page-work">
        <div class="work__inner archiveWork__inner">
            <div class="work__headingWrap heading">
                <h2 class="work__headingEn heading__en">Work</h2>
                <h2 class="work__headingJp heading__jp">制作実績</h2>
            </div>
            <div class="archiveWork__btnWrap btn5">
                <a class="archiveWork__btn btn5__text" href="<?php echo esc_url(home_url('blog')); ?>">ブログ一覧はこちら</a>
            </div>
            <div class="work__imgWrap archiveWork__imgWrap">
                <img class="work__img" alt="資料を持って何かを説明している男性のイラスト画像"
                    src="<?php echo esc_url(get_theme_file_uri('img/record@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/record@1x.png')); ?> 1x,
                             <?php echo esc_url(get_theme_file_uri('img/record@2x.png')); ?> 2x">
            </div>
        </div>
        <div class="work__contentsWrap archiveWork__contentsWrap">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = [
                'post_type'      => 'work',
                'posts_per_page' => 5,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged,
            ];
            $work_query = new WP_Query($args);

            if ($work_query->have_posts()) :
                while ($work_query->have_posts()) : $work_query->the_post(); ?>

                    <a class="work__cardWrap" href="<?php the_permalink(); ?>">
                        <div class="work__thumbnailWrap">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="work__thumbnail" alt="<?php the_title_attribute(); ?> のサムネイル"
                                    src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                                    srcset="<?php echo esc_attr($thumbnail_srcset); ?>"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php else : ?>
                                <img class="work__thumbnail" alt="サムネイルなし"
                                    src="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?> 1x,
                     <?php echo esc_url(get_theme_file_uri('img/no_image@2x.png')); ?> 2x"
                                    sizes="(max-width: 768px) 100vw, 400px" />
                            <?php endif; ?>
                        </div>
                        <div class="work__cardTextInner">
                            <h3 class="work__cardTitle">
                                <?php
                                $title = get_the_title();
                                $limit_text = 40;

                                if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                    echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                } else {
                                    echo $title; // 制限文字数以内の場合はそのまま表示
                                }
                                ?>
                            </h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在記事がありません。</p>
            <?php endif; ?>
        </div>
       <!--------- ページネーション --------->
            <?php 
            $paginetion = [
                'mid_size' => 2,
                'prev_text' => '<前',
                'next_text' => '次>',
                'total' => $work_query->max_num_pages,
                'query' => $work_query,
            ];
            the_posts_pagination($paginetion);
            ?>
    </div>
</section>
<?php get_footer(); ?>