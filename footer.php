<!-- FOOTER -->
<footer>
	<div class="container-fluid">
		<div class="row">
			<p class="left">
        <?php get_search_form(); ?>
				<a href="http://www.cmsounds.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/cm-logo.jpg" class="da-foot cm-logo"></a>
			</p>
			<p class="right">
        <span class="hide-mobile">
          <i class="i-subscribe newsletter-popup-open">SUBSCRIBE</i>
          <a href="https://twitter.com/pyroradio" target="_blank"><i class="fa fa-twitter fa-foot fa-lg"></i></a>
          <a href="https://www.facebook.com/pyroradioFM" target="_blank"><i class="fa fa-facebook-official fa-foot fa-lg"></i></a>
          <a href="https://www.instagram.com/pyroradio" target="_blank"><i class="fa fa-instagram fa-foot fa-lg"></i></a>
          <a href="https://www.youtube.com/subscription_center?add_user=pyroradio" target="_blank"><i class="fa fa-youtube fa-foot fa-lg"></i></a>
          <a href="http://pyroradio.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-foot fa-lg"></i></a>

          <?php $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad"); ?>
          <?php if( $iPad ){ ?>
          <a href="https://www.snapchat.com/add/pyro_radio" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/snapchat-white.png" class="snapchat-foot"></a>
          <?php }else{ ?>
          <a class="snapchat-popup-open"><img src="<?php bloginfo('template_directory'); ?>/img/snapchat-white.png" class="snapchat-foot"></a>
          <?php } ?> 
          <a href="https://www.mixcloud.com/pyroradio" target="_blank"><i class="fa fa-mixcloud fa-foot fa-lg"></i></a>
          <i class="fa fa-whatsapp fa-foot fa-lg whatsapp-popup-open"></i>
          <a class="contact-popup-open"><img src="<?php bloginfo('template_directory'); ?>/img/mail-white.png" class="email-foot"></a>
        </span>
        <span class="show-mobile">
          <i class="fa fa-share-alt fa-foot fa-lg social-popup-open"></i>
        </span>
      </p>
		</div>
	</div>
</footer>
<!-- /FOOTER -->

<!-- social -->
<div class="social-popup-container">
  <div class="social-popup-overlay"></div>
  <div class="social-popup-underlay"></div>
  <div class="social-popup-wrapper">
    <div class="social-popup-content">
    <i class="i-subscribe i-social-mobile newsletter-popup-open">SUBSCRIBE</i>
    <a href="https://twitter.com/pyroradio" target="_blank"><i class="fa fa-twitter fa-foot fa-social-mobile fa-social-"></i></a>
    <a href="https://www.facebook.com/pyroradioFM" target="_blank"><i class="fa fa-facebook-official fa-foot fa-social-mobile"></i></a>
    <a href="https://www.instagram.com/pyroradio" target="_blank"><i class="fa fa-instagram fa-foot fa-social-mobile"></i></a>
    <a href="https://www.youtube.com/subscription_center?add_user=pyroradio" target="_blank"><i class="fa fa-youtube fa-foot fa-social-mobile"></i></a>
    <a href="http://pyroradio.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-foot fa-social-mobile"></i></a>
    <a href="https://www.snapchat.com/add/pyro_radio" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/snapchat-black.png" class="snapchat-foot"></a>
    <a href="https://www.mixcloud.com/pyroradio" target="_blank"><i class="fa fa-mixcloud fa-foot fa-social-mobile"></i></a>
    <i class="fa fa-whatsapp fa-foot fa-lg whatsapp-foot whatsapp-popup-open"></i>
    <a class="contact-popup-open"><img src="<?php bloginfo('template_directory'); ?>/img/mail-black.png" class="email-foot"></a>
    </div>
  </div>
</div>
<!-- /social -->


<!-- SNAPCHAT -->
<div class="snapchat-popup-container">
  <div class="snapchat-popup-overlay">
  </div>

  <div class="snapchat-popup-wrapper">
    <div class="snapchat-popup-close snapchat-popup-exit">&times;</div>
    <div class="snapchat-popup-content">
      <img src="<?php bloginfo('template_directory'); ?>/img/snapchat-barcode-colour.png" width="250">
    </div>
  </div>
</div>
<!-- /SNAPCHAT -->

<!-- CONTACT FORM -->
<div class="contact-popup-container">
  <div class="contact-popup-overlay"></div>
  <div class="contact-popup-wrapper">
    <div class="contact-popup-close contact-popup-exit">&times;</div>
    <div class="contact-popup-content">
      <p><center>Pyro@PyroRadio.com</center></p>
    </div>
  </div>
</div>
<!-- /CONTACT FORM -->

<!-- whatsapp FORM -->
<div class="whatsapp-popup-container">
  <div class="whatsapp-popup-overlay"></div>
  <div class="whatsapp-popup-wrapper">
    <div class="whatsapp-popup-close whatsapp-popup-exit">&times;</div>
    <div class="whatsapp-popup-content">
      <p><center>07415 819 408</center></p>
    </div>
  </div>
</div>
<!-- /whatsapp FORM -->


<!-- JQuery -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.1.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php bloginfo('template_directory'); ?>/owl-carousel/owl.carousel.js"></script>

<script>

setTimeout( function(){ 
    $('.preload-bg').fadeOut();
  }  , 1000 );

setTimeout( function(){ 
    $( ".clickplay" ).fadeIn( "slow" ); 
  }  , 3000 );
setTimeout( function(){ 
    $( ".clickplay" ).fadeOut( "slow" ); 
  }  , 10000 );


// Owl Carousel Call
$(document).ready(function() {
  $(".home-slider").owlCarousel({
      navigation: false,
      slideSpeed: 900,
      singleItem: true,
      autoPlay: true,
      items: 50
    });
});

// PLAY - PAUSE     
$('#play').click(function(){
    $('#pause').removeClass("btn-hide"),
    $('#play').addClass("btn-hide");
});
$('#pause').click(function(){
    $('#play').removeClass("btn-hide"),
    $('#pause').addClass("btn-hide");
});

// Link popover
$(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});

$(document).ready(function(){
    $(".progress-bar").animate({width: '100%;'});
});

// Radio window open
function popitup(url) {
  newwindow=window.open(url,'name','height=700,width=400');
  if (window.focus) {newwindow.focus()}
  return false;
}

// Only show newsletter if no localstorage + scrolled passed 500
if (localStorage.getItem("newsletter") === null) {
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 500) {
      $(".newsletter-popup-container-main").addClass("newsletter-show");
    }
  });
}

// Subscribe button open
  $('.newsletter-popup-open').click(function(){
    $( ".newsletter-popup-container-main" ).fadeIn( "fast" );
    $(".newsletter-popup-container-main").addClass("newsletter-show");
});
// Close newsletter + set localstorage
  $( ".newsletter-popup-exit" ).click(function(){
    $( ".newsletter-popup-container-main" ).fadeOut( "fast" );
    localStorage.setItem("newsletter", "1");
  });
  $( ".newsletter-popup-overlay" ).click(function(){
    $( ".newsletter-popup-container-main" ).fadeOut( "fast" );
    localStorage.setItem("newsletter", "1");
  });

// Close/Open Snapchat
  $('.snapchat-popup-open').click(function(){
    $( ".snapchat-popup-container" ).fadeIn( "fast" );
  });
  $( ".snapchat-popup-exit" ).click(function(){
    $( ".snapchat-popup-container" ).fadeOut( "fast" );
  });
  $( ".snapchat-popup-overlay" ).click(function(){
    $( ".snapchat-popup-container" ).fadeOut( "fast" );
  });

// Close/Open Contact
  $('.contact-popup-open').click(function(){
    $( ".contact-popup-container" ).fadeIn( "fast" );
  });
  $( ".contact-popup-exit" ).click(function(){
    $( ".contact-popup-container" ).fadeOut( "fast" );
  });
  $( ".contact-popup-overlay" ).click(function(){
    $( ".contact-popup-container" ).fadeOut( "fast" );
  });

// Close/Open whatsapp
  $('.whatsapp-popup-open').click(function(){
    $( ".whatsapp-popup-container" ).fadeIn( "fast" );
  });
  $( ".whatsapp-popup-exit" ).click(function(){
    $( ".whatsapp-popup-container" ).fadeOut( "fast" );
  });
  $( ".whatsapp-popup-overlay" ).click(function(){
    $( ".whatsapp-popup-container" ).fadeOut( "fast" );
  });

// Close/Open Social
$('.social-popup-open').click(function(){
  $( ".social-popup-container" ).fadeIn( "fast" );
});
$( ".social-popup-exit" ).click(function(){
  $( ".social-popup-container" ).fadeOut( "fast" );
});
$( ".social-popup-overlay" ).click(function(){
  $( ".social-popup-container" ).fadeOut( "fast" );
});
$( ".social-popup-underlay" ).click(function(){
  $( ".social-popup-container" ).fadeOut( "fast" );
});

function copyToClipboard(text) {
  window.prompt("Copy and Paste the link to share.", text);
}
</script>

<?php
wp_footer();
include bloginfo('template_directory') . 'stat-counter.php';
?>

</body>
</html>