/*jshint esversion: 6 */

$(document).ready( () => {
    if ($('.home-wallpaper').length){
        //HEADER BACKGROUND ON SCROLL
        $(window).scroll(() => {
            var scroll = $(window).scrollTop();
            var windowHeight = window.innerHeight;
            if(windowHeight > 850){
                if(scroll > 200){
                    $('header').addClass('scrolled');
                } else {
                    $('header').removeClass('scrolled');
                }
            } else{
                if(scroll > 100){
                    $('header').addClass('scrolled');
                } else {
                    $('header').removeClass('scrolled');
                }
            }

        });
    } else {
        $('header').addClass('scrolled');
    }
});



//NAV MENU
const nav = $('nav');
$('.open-menu').click(() => { //OUVERTURE
    nav.css("display", "flex").hide().fadeIn();
    nav.addClass('active');
});
$('.close-menu').click(() => { //FERMETURE
    nav.removeClass('active');
    nav.fadeOut();
    
});
$(window).resize(() => { //REDIMENSIONNEMENT
    if(window.innerWidth > 1200){
        nav.removeClass('active');
        nav.css({"display":""});
    }
});


$(document).ready( () => {
    //MAP SCHOOL
    var mapSchool = L.map('map-school').setView([48.426081, 2.743533], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(mapSchool);
});