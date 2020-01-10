<?php
include 'header.php';
/*
 * The template part for displaying single posts.
 */
?>
<ul>

<?php $the_query = new WP_Query('posts_per_page=5'); ?>
 
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
 
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 
<li><?php the_excerpt(__('(more…)')); ?></li>
 
<?php
endwhile;
wp_reset_postdata();
?>
</ul>

<?php include 'footer.php';
