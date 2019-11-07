
<?php get_header(); ?>


<div id="content">

<?php
	$args= array(
		'category_name' => 'slider'
	);
	$slider_query = new WP_Query($args);

	if($slider_query->have_posts()): 
?>
	<div class="home-slider">
		<?php
		while($slider_query->have_posts()) : $slider_query->the_post();
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];
		?>
			<div class="slide" style="background-image: url('<?php echo $thumb_url; ?>');">
				<div class="container-fluid">
					<div class="row">
						<div class="banner-text">
							<h1 class="text-uppercase"><?php the_title(); ?></h1>
							<h1 class="text-uppercase"><?php the_content(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<script>
		$(document).ready(function() {
		  $(".home-slider").owlCarousel({
		      navigation: false,
		      slideSpeed: 300,
		      singleItem: true,
		      autoPlay: true
	  		});
		});
	</script>

<?php endif; wp_reset_postdata(); ?>


<?php if ( is_home() ) { query_posts($query_string . '&cat=-17, -18'); } ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
	
<!-- PYRO-POST -->
<section id="pyro-post">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2><a href="<?php the_permalink() ?>" class="pyro-post-title"><?php the_title() ?></a></h2>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', array( 'class' => "img-responsive", 'id' => "featured-img" )); ?></a>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p><?php the_content() ?></p>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p class="social-icons">
					<i class="fa fa-twitter fa-pyro-post fa-lg"></i>
					<i class="fa fa-facebook-official fa-pyro-post fa-lg"></i>
					<i class="fa fa-pinterest fa-pyro-post fa-lg"></i>
					<i class="fa fa-tumblr fa-pyro-post fa-lg"></i>
					<i class="fa fa-envelope fa-pyro-post fa-lg"></i>
					<i class="fa fa-link fa-pyro-post fa-lg"></i>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- /PYRO-POST -->
<?php endwhile; endif; wp_reset_postdata(); ?>

<nav class="pagination">
	<?php pagination_bar(); ?>
</nav>

</div>



<?php get_footer(); ?>

