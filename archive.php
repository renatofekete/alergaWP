<?php /* Template Name: novosti */ ?>
<?php get_header(); ?>
<section>
<?php
while (have_posts()) : the_post();
get_template_part('template-parts/archive_news');
endwhile;
?>
</section>
<?php get_footer(); ?>
    