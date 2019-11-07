// PRELOADER
$(window).load(function(){
    $('.preloader').delay(40).fadeOut(20); // set duration in brackets    
});

// PLAY - PAUSE     
$('.button-1').click(function(){
    $('.dj-fabio').removeClass("dj-hide"),
    $('.dj-kygo').addClass("dj-hide");
});
$('.button-2').click(function(){
    $('.dj-kygo').removeClass("dj-hide"),
    $('.dj-fabio').addClass("dj-hide");
});