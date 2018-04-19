
<div class="aside_news">
  <div class="title section_title"><h3>Iz kategorije</h3></div>
  <?php 
  $cat = new WP_Query(array(
    'category__in' => wp_get_post_categories($post->ID),
    'posts_per_page' => 5,
    'post__not_in' => array($post->ID)
  ));
  ?>
  <?php if ($cat->have_posts()) :
    while ($cat->have_posts()) : $cat->the_post();
  get_template_part('template-parts/aside_news');
  endwhile;
  endif;
  wp_reset_query(); ?>

  <div class="title section_title"><h3>Najnovije</h3></div>
  <?php 
  $cat = new WP_Query(array(
    'posts_per_page' => 5,
    'post__not_in' => array($post->ID)
  ));
  ?>
  <?php if ($cat->have_posts()) :
    while ($cat->have_posts()) : $cat->the_post();
  get_template_part('template-parts/aside_news');
  endwhile;
  endif;
  wp_reset_query(); ?>

</div><!-- aside_news -->
