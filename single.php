<?php get_header(); ?>

<div id="content">


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- PYRO-POST -->
<div style="text-align:center;">



<section id="pyro-post" class="single-post">
	<div class="container">
		<div class="row">

			<?php
				$args= array(
					'category_name' => 'home-ads',
					'posts_per_page' => 1
				);
				$inner_query = new WP_Query($args);

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

			<div class="col-md-8 col-md-offset-2">
				<div class="left-arrow">
					<?php next_post_link('%link', '<i class="fa fa-arrow-left fa-left fa-2x"></i>', '', '17,18,274,279'); ?>
				</div>
				<h2 class="post-single-title">
					<div class="pyro-post-title"><?php the_title() ?></a>
				</h2>
				<div class="right-arrow">
					<?php previous_post_link('%link', '<i class="fa fa-arrow-right fa-right fa-2x"></i>', '', '17,18,274,279'); ?>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<?php the_post_thumbnail('', array( 'class' => "img-responsive", 'id' => "featured-img" )); ?>
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
					<!-- Link 
					<a data-toggle="popover" data-placement="top" data-toggle="click" data-content="<?php the_permalink() ?>"><i class="fa fa-link fa-pyro-post fa-lg"></i></a>
					-->
					<i class="fa fa-link fa-pyro-post fa-lg" onclick="copyToClipboard('<?php echo get_the_permalink(); ?>')"></i>
				</p>
			</div>

			<?php
				$args= array(
					'category_name' => 'home-ads',
					'posts_per_page' => 1,
					'offset' => 1
				);
				$inner_query = new WP_Query($args);

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


		</div>
	</div>
</section>
<!-- /PYRO-POST -->



<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>