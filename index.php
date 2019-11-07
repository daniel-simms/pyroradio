<?php get_header(); ?>
<!-- HOME SLIDER QUERY -->
	<?php
		$args= array(
			'category_name' => 'slider',
			'nopaging' => true
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
				<div class="slider-overlay"></div>
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
	<?php endif; wp_reset_postdata(); ?>
<!-- /HOME SLIDER QUERY -->

<!-- CONTENT -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?><!-- POST LOOP -->
		<div id="content">     
			<section id="pyro-post">
				<!-- ADVERT QUERY -->
					<?php if( $wp_query->current_post%2 == 0 ) { ?><!-- DISPLAY EVERY 2 POSTS -->
						<?php
							$inner_args= array(
								'category_name' => 'home-ads',
								'orderby' => 'rand',
								'posts_per_page' => 1
							);
							$inner_query = new WP_Query($inner_args);

							if($inner_query->have_posts()) : while($inner_query->have_posts()) : $inner_query->the_post();
						?>
						<div class="container advert">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<a href="<?php the_title();?>" target="_blank">
										<?php the_post_thumbnail('', array( 'class' => "advert" )); ?>
									</a>
								</div>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					<?php } ?>  	
				<!-- /ADVERT QUERY -->

				<!-- POSTS -->
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<a href="<?php the_permalink() ?>" class="pyro-post-title"><h2><?php the_title() ?></h2></a>
							</div>
							<div class="col-md-8 col-md-offset-2">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('', array( 'class' => "img-responsive", 'id' => "featured-img" )); ?></a>
							</div>
							<div class="col-md-8 col-md-offset-2">
								<?php the_content() ?>
							</div>
							<div class="col-md-8 col-md-offset-2">
								<p class="social-icons">
									<!-- Twitter -->
									<a href="#" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo urlencode( bitly()); ?>%20@PyroRadio%20%23PyroRadio%20', 'twshare', 'width=500, height=400'); return false;"><i class="fa fa-twitter fa-pyro-post fa-lg"></i></a>
									<!-- Facebook -->
									<a href="#" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>', 'fbshare', 'width=300, height=250'); return false;"><i class="fa fa-facebook-official fa-pyro-post fa-lg"></i></a>
									<!-- Tumblr -->
									<a href="#" onclick="window.open('http://www.tumblr.com/share/link?url=<?php echo urlencode(get_permalink()) ?>&amp;name=<?php echo urlencode(get_the_title()) ?>&amp;description=<?php echo urlencode(get_the_title()), urlencode(get_the_post_thumbnail()), urlencode(get_the_excerpt()) ?>&amp;tags=PyroRadio', 'trshare', 'width=500, height=400'); return false;"><i class="fa fa-tumblr fa-pyro-post fa-lg"></i></a>
									<!-- Link -->
									<i class="fa fa-link fa-pyro-post fa-lg" onclick="copyToClipboard('<?php echo get_the_permalink(); ?>')"></i>
								</p>
							</div>
						</div>
					</div>
				<!-- /POSTS -->
			</section>
			<nav class="pagination"><?php pagination_bar(); ?></nav>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?><!-- /POST LOOP -->
<!-- /CONTENT -->
<?php get_footer(); ?>