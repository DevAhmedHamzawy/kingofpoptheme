// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 15;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    
    didScroll =true;
 
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').css('visability','hidden').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').css('visability','visible').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}