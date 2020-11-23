<?php get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>
<?php previous_post_link(); ?>
<?php next_post_link(); ?>
<?php get_footer(); ?>