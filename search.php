<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage IL-Design
 * @since IL Web-Design 1.0
 */

get_header(); ?>


		<section class="nav-clear">
			<?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2><center><?php printf( __( 'Search Results For %s' ), '<span>' . get_search_query() . '</span>' ); ?></center></h2>
						</div>
					</div>
				</div>
				<?php /* Start the Loop */ ?>

				<?php while ( have_posts() ) : the_post(); ?>

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
									<?php the_content(); ?>
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
							</div>
						</div>
					</section>
					<!-- /PYRO-POST -->

				<?php endwhile; ?>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h2><center>No Search Results</h2>
						
								<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
									<input type="search" placeholder="Try Again" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Try Again'" autocomplete="off" class="search-field-none" value="" name="s" title="Search">
								</form>
							</div>
						</div>
					</div>
				</article>

			<?php endif; wp_reset_postdata() ?>

		</section>

<?php get_footer(); ?>