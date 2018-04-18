<?php 
  $cat = new WP_Query( array( 
    'category__in'   => wp_get_post_categories( $post->ID ),
    'posts_per_page' => 2,
    'post__not_in'   => array( $post->ID )
  ));
?>
<?php if($cat->have_posts()) :
  while ($cat->have_posts()) : $cat -> the_post(); 
  the_title();
endwhile;
endif;
wp_reset_query(); ?>