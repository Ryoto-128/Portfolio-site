<?php get_header(); ?>
<section class="mainVisual">
    <div>
        <img class="pc" src="<?php echo do_shortcode('[img]'); ?>header_img_pc.jpg" alt="mainVisual">
        <img class="sp" src="<?php echo do_shortcode('[img]'); ?>header_img_sp.jpg" alt="mainVisual">
    </div>
</section>

<div class=sections>
    <section class="section vision">
        <h2 class="title">
            Vision
        </h2>
        <div class="content">
            <h3>
                ユーザーにとって利となり、<br>
                生活の一部とßなるサービスをゼロから提供したい。
            </h3>
            <p>
                そのために、<br>
                「どのようなアイディアや要望でも形にできるフルスタックな技術力」<br>
                「０から１を生み出す知識や経験、技術」<br>
                「IT技術の進歩を利用者に実感してもらえるために、最先端にも対応できる知識や技術」<br>
                この３つを主軸に、これからのすべての経験を自分の糧とすることが私のやるべきことだと考える。
            </p>
        </div>
    </section>

    <section class="section about">
        <h2 class="title">
            About
        </h2>
        <div class="content">
            <h3>はじめまして。</h3>
            <p>
                私のプロフィールを書かせていただいています。<br>
                ご覧になっていただけると幸いです。
            </p>
        </div>
        <a href="<?php echo get_page_link(21); ?>" class="btn btn-outline-secondary">Detail</a>
    </section>

    <section class="section portfolio">
        <h2 class="title">
            Portfolio
        </h2>
        <div class=contents>
            <?php if (have_posts()) : query_posts('posts_per_page=3&paged=' . $paged); ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php wp_reset_query();
            endif; ?>
        </div>
        <a href="<?php echo get_page_link(25); ?>" class="btn btn-outline-secondary">Detail</a>
    </section>

    <section class="section tipslog">
        <h2 class="title">
            TipsLog
        </h2>
        <div class=content>
            <h3>過去の記録、そして未来の計画</h3>
            <img src="<?php echo do_shortcode('[img]'); ?>tipslog_top.jpg" alt="tipslog_top">
        </div>
        <a href="http://this-mylog.net/tipslog/" class="btn btn-outline-secondary">Detail</a>
    </section>
</div>
<?php get_footer(); ?>