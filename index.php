<?php get_header(); ?>
<div class="content">
	<section class="main_news">
		<?php 
				$main_query = new WP_Query(array(
					'post_type' => array('post'),
					'posts_per_page' => 1
				)); ?>
			<?php if ($main_query->have_posts()) :
							while ($main_query->have_posts()) : $main_query->the_post();
						get_template_part('template-parts/main_news');
						endwhile;
						endif;
						wp_reset_query(); ?>    
	</section>
	<section class="grid_news">
			<?php 
						$grid_query = new WP_Query(array(
							'post_type' => array('post'),
							'posts_per_page' => 4,
							'offset' => 1
						)); ?>
			<?php if ($grid_query->have_posts()) :
							while ($grid_query->have_posts()) : $grid_query->the_post();
						get_template_part('template-parts/grid-news');
						endwhile;
						endif;
						wp_reset_query(); ?>
	</section>
</div><!-- content -->


<?php get_footer(); ?>
    
