<!-- FOOTER -->
<footer class="radio-footer">
	<div class="container-fluid">
		<div class="row">
			<h4 class="subscribe-link-radio" id="newsletter-popup-open">SUBSCRIBE</h4>
		</div>
	</div>
</footer>
<!-- /FOOTER -->

<!-- JQuery -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.js"></script>

<script>
// PLAY - PAUSE     
$('#play').click(function(){
    $('#pause').removeClass("btn-hide"),
    $('#play').addClass("btn-hide");
});
$('#pause').click(function(){
    $('#play').removeClass("btn-hide"),
    $('#pause').addClass("btn-hide");
});

// Close/Open Snapchat
$('#newsletter-popup-open').click(function(){
 	$( ".newsletter-popup-container-radio" ).fadeIn( "fast" );
});
$( ".newsletter-popup-exit" ).click(function(){
 	$( ".newsletter-popup-container-radio" ).fadeOut( "fast" );
});
$( ".newsletter-popup-overlay" ).click(function(){
 	$( ".newsletter-popup-container-radio" ).fadeOut( "fast" );
});
</script>



<?php
wp_footer();
include bloginfo('template_directory') . 'stat-counter.php';
?>

</body>
</html>