<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage IL-Design
 * @since IL Web-Design 1.0
 */

get_header(); ?>
<div id="content">

		<section class="nav-clear">



				<article id="post-0" class="post no-results not-found">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<h2><center>404 - No Page found</h2>
						
								<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
									<input type="search" placeholder="Click here to Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to Search'" autocomplete="off" class="search-field-none" value="" name="s" title="Search">
								</form>
							</div>
						</div>
					</div>
				</article>



		</section>
<?php get_footer(); ?>