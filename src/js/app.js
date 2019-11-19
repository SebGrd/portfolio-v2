//HEADER BACKGROUND ON SCROLL
$(window).scroll(() => {
    var scroll = $(window).scrollTop();
    if(scroll > 200){
        $('header').addClass('scrolled');
    } else {
        $('header').removeClass('scrolled');
    }
});