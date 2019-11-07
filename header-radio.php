<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PyroRadio.com</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta http-equiv="content-type" content="text/html; charset=us-ascii">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.css">
	<!-- Default Theme -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.theme.css">
	

</head>
<body class="pyro overflow-hidden radiobody">
<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
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

			if($onair_query->have_posts()):while($onair_query->have_posts()) : $onair_query->the_post(); ?>
		<div class="pyro-dj">
		<?php the_post_thumbnail('', array( 'class' => "dj-img float-right" )); ?>
			<div class="dj-name float-right">
				<ul>
					<li><p><?php the_title(); ?></p></li>
					<li><?php the_content(); ?></li>
				</ul>
			</div>
		
			<i class="fa fa-play-circle fa-4x float-right" id="play" onclick="document.getElementById('player').play()"></i>
			<i class="fa fa-stop-circle fa-4x float-right btn-hide" id="pause" onclick="document.getElementById('player').pause()" ></i>
			<audio src="http://mp3streaming.planetwideradio.com:9830/pyrorad" id="player" contros title="PyroRadio"></audio>
		</div>
	</nav>
	<!-- /NAVBAR -->
<?php endwhile; endif; wp_reset_postdata(); ?>
	<div class="newsletter-popup-container-radio">
		<div class="newsletter-popup-overlay"></div>
		<div class="newsletter-popup-wrapper">
		<div class="newsletter-popup-close newsletter-popup-exit">&times;</div>
			<div class="newsletter-popup-content">
					<p class="newsletter-popup-text"><h4 id="newsletter-popup"><center>Subscribe to the PyroRadio.com Newsletter</center></h4></p>
					<?php echo do_shortcode('[yikes-mailchimp form="1"]'); ?>
			</div>
		</div>
	</div>
