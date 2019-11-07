<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PyroRadio.com</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.theme.css">
	<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php wp_head(); ?>
	<?php if (is_single()){ ?>
		<meta property="og:url" content="<?php urlencode(the_permalink()) ?>" />
		<meta property="og:tltie" content="<?php the_title() ?>" />
		<meta property="og:description" content="<?php the_excerpt() ?>" />
		<meta property="og:image" content="<?php echo $feat_image ?>" />
	<?php }else{ ?>
	 	<meta property="og:url" content="www.pyroradio.com" />
		<meta property="og:title" content="PyroRadio" />
		<meta property="og:description" content="#PyroRadio #KeepItPyro" />
		<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/pyro-logo.jpg" />
	 <?php } ?>
</head>

<body class="pyro">
	<?php include_once("analyticstracking.php") ?>
	<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top templatemo-nav" role="navigation">
			<div class="container-fluid nav-fluid">
				<div class="navbar-header">
					<a href="<?php bloginfo('url'); ?>" class="navbar-brand"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" style="height:100%"></a>
				</div>
			</div>
			<?php
				$args= array(
					'category_name' => 'ONAIR',
					'posts_per_page' => 1
				);
				$onair_query = new WP_Query($args);
				if($onair_query->have_posts()): while($onair_query->have_posts()) : $onair_query->the_post(); 
			?>
				<div class="pyro-dj">
					<?php the_post_thumbnail('', array( 'class' => "dj-img float-right" )); ?>
					<div class="dj-name float-right">
						<ul>
							<li><p><?php the_title(); ?></p></li>
							<li><?php the_content(); ?></li>
						</ul>
					</div>
					<a href="radio" onclick="return popitup('radio')"><i class="fa fa-play-circle fa-4x float-right"></i></a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>	
		</nav>
	<!-- /NAVBAR -->

	<!-- LOADING BAR -->
		<div class="preload-bg">
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="100"
			  aria-valuemin="0" aria-valuemax="100">
			  </div>
			</div>
		</div>
	<!-- /LOADING BAR -->

	<!-- NEWSLETTER POPUP -->
		<div class="newsletter-popup-container-main">
			<div class="newsletter-popup-overlay"></div>
			<div class="newsletter-popup-wrapper">
				<div class="newsletter-popup-close newsletter-popup-exit">&times;</div>
				<div class="newsletter-popup-content">
					<p class="newsletter-popup-text"><h4 id="newsletter-popup"><center>Subscribe to the PyroRadio.com Newsletter</center></h4></p>
					<?php echo do_shortcode('[yikes-mailchimp form="1"]'); ?>
				</div>
			</div>
		</div>
	<!-- /NEWSLETTER POPUP -->