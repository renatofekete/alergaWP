<h1><?php the_title(); ?></h1>
<div class="meta_info">
    <i class="far fa-clock"></i>
    <p><?php echo get_the_date(); ?> | <?php echo get_the_time(); ?></p> 
</div>
<div class="img"><?php the_post_thumbnail('single-image') ?></div>
<div class="text">
    <?php the_content(); ?>
</div>
<div class="comment_box">
    <?php get_comments(); ?>
    <?php comments_template(); ?>
</div>