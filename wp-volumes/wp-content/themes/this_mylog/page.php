<?php get_header(); ?>
<div id="page">
<?php while (have_posts()): the_post(); ?>
    <h2 class=title><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>