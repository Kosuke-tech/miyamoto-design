<?php get_header(); ?>
<div class="singleNotice blContainer">
    <article class="singleNotice__wrapper">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <div class="singleNotice__inner">
                    <h2 class="singleNotice__title">
                        <?php the_title(); ?>
                    </h2>
                    <?php if (function_exists('bcn_display')) {; ?>
                        <div class="singleNotice__bread" id="" vocab="http://schema.org/" typeof="BreadcrumbList">
                            <?php bcn_display(); ?>
                        </div>
                    <?php }; ?>
                    <div class="singleNotice__dateWrap">
                        <p class="singleNotice__postDate">投稿日：<?php the_date('Y.n.j'); ?></p>
                        <p class="singleNotice__upDate">更新日：<?php the_modified_date('Y.n.j'); ?></p>
                    </div>
                    <div class="singleNotice__ctWrap">
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'notice_tag');
                        if ($tags && !is_wp_error($tags)) {
                            echo '<div class="singleNotice__tag">';
                            foreach ($tags as $tag) {
                                echo '<a class="singleNotice__tagText" href="' . esc_url(get_term_link($tag)) . '">' . esc_html($tag->name) . '</a> ';
                            }
                            echo '</div>';
                        }
                        ?>
                        <?php
                        $categories = get_the_terms(get_the_ID(), 'notice_category');
                        if ($categories && !is_wp_error($categories)) {
                            echo '<div class="singleNotice__category post-notice_category">';
                            foreach ($categories as $category) {
                                echo '<a class="singleNotice__categoryText post-notice_category" href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a> ';
                            }
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="singleNotice__imgWrap">
                        <?php if (has_post_thumbnail()) {; ?>
                            <?php the_post_thumbnail(''); ?>
                        <?php } else {; ?>
                            <img class="singleNotice__img" alt="サムネルの投稿がない場合に表示する画像"
                                src="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/no_image@2x.png')); ?> 2x">
                        <?php }; ?>
                    </div>
                    <div class="singleNotice__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
</div>

<!-- このブログを書いた人 -->
<?php get_template_part('parts/blog', 'author'); ?>

<section class="otherPost">
    <div class="otherPost__wrapper blContainer">
        <?php
        // 現在の投稿IDを取得
        $current_post_id = get_the_ID();

        // 最新の投稿2件（現在表示中の投稿を除外）
        $notice_posts = new WP_Query(array(
            'post_type'      => 'notice',
            'posts_per_page' => 2,
            'post__not_in'   => array($current_post_id),
        ));

        if ($notice_posts->have_posts()) :
        ?>
            <h2 class="otherPost__catch">他の記事もどうぞ</h2>
            <div class="otherPost__contentsWrap">
                <?php while ($notice_posts->have_posts()) : $notice_posts->the_post(); ?>
                    <a class="otherPost__linkWrap" href="<?php the_permalink(); ?>">
                        <div class="otherPost__imgWrap otherPost__imgWrapNoticeOnly">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="otherPost__img" alt="<?php the_title_attribute(); ?> のサムネイル"
                                    src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>"
                                    srcset="<?php echo esc_attr($thumbnail_srcset); ?>">
                            <?php else : ?>
                                        <img class="otherPost__img" alt="サムネイルなし"
                                        src="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?>"
                                        srcset="<?php echo esc_url(get_theme_file_uri('img/no_image@1x.png')); ?> 1x,
                                                <?php echo esc_url(get_theme_file_uri('img/no_image@2x.png')); ?> 2x">
                                                
                            <?php endif; ?>
                        </div>
                        <div class="otherPost__articleTitle">
                                                  <?php
                                $title = get_the_title();
                                $limit_text = 20;

                                if (mb_strlen($title, 'UTF-8') > $limit_text) {
                                    echo mb_substr($title, 0, $limit_text, 'UTF-8') . '...';
                                } else {
                                    echo $title; // 制限文字数以内の場合はそのまま表示
                                }
                                ?>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>