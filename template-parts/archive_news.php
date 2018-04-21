<div class="archive_news">
  <div class="thumbnail">
    <?php the_post_thumbnail('single-image'); ?>
  </div>
  <div class="text">
    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="meta_info">
      <i class="far fa-clock"></i>
      <p><?php echo get_the_date(); ?> | <?php echo get_the_time(); ?></p> 
    </div>
  </div>
</div>