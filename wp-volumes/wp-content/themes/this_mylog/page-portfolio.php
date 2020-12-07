<?php get_header(); ?>
<div id="page">
    <div id="portfolio">
        <h2 class="title">Potfolio</h2>
        <div class="introduction">
            <p>詳細はGitHubにも記載させてい頂いています。<br>
                質問等ございましたら、遠慮なくご連絡下さい。</p>
        </div>

        <?php
        if (have_posts()) : query_posts('posts_per_page=9&paged=' . $paged); ?>
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>

            <div class="contents">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>
        <?php wp_reset_query();
        endif; ?>

    </div>
</div>
<?php get_footer(); ?>