<?php
/*
	Template Name: Radio
*/
get_header('radio');

?>


<?php
	$args= array(
		'category_name' => 'radio-ads',
		'posts_per_page' => 1,
		'orderby' => 'rand'
	);
	$inner_query = new WP_Query($args);

	if($inner_query->have_posts()) : while($inner_query->have_posts()) : $inner_query->the_post();
?>

<a href="<?php the_title();?>" target="_blank"><?php the_post_thumbnail('', array( 'class' => "radio-ad-img" )); ?></a>

<?php endwhile; endif; wp_reset_postdata(); ?>


<div class="block"><h1></h1></div>


<?php get_footer('radio'); ?>