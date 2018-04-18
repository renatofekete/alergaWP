<?php get_header(); ?>
<article>
<?php 
	while (have_posts()) : the_post();
	get_template_part('template-parts/single-article');
	endwhile;
?>
</article>
<aside>
	<?php get_sidebar( ) ?>
</aside>   
<?php get_footer(); ?>