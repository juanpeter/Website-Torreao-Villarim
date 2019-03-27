'use strict'
//Global values!
//Window current position!
let scroll;

//Functions to call at the beginning//
//If the document is ready, call these functions
$(document).ready(function() {
    //Fade in for the banner
    setTimeout(function(){
        $('.banner').animate({
            opacity:1,
        },1500);
    });
    navMobile();
    scrollFade()
});

//If the window is resized, call these functions
$(window).resize(function(){
    navMobile(),
    //make the nav opacity 1
    $('header nav').css({'background-color':'rgba(255,255,255, 1)'});
});

//If window is scrolled, call these functions
$(window).scroll(function(){
    scrollFade();
});

//portfolio array
const PortArray = jQuery.makeArray($('.portfolio-img'));

//Get images for .portfolio-img with js//
$(document).ready(function(){
    $(PortArray[0]).css(
        'background-image','url(../wp-content/themes/Construtora-torreao/images/capaSite.jpg)'
    )
    $(PortArray[1]).css(
        'background-image','url(../wp-content/themes/Construtora-torreao/images/resMonteiro1.jpg)'
    )
    $(PortArray[2]).css(
        'background-image','url(../wp-content/themes/Construtora-torreao/images/TJPB.jpg)'
    )
});

function scrollFade() {
    //Window current position!
    let scroll = $(window).scrollTop();
    //animates description elements on scroll, if it hasnt been called before
    if (scroll >= 200 && $('.description').css('opacity') == '0') {
        $('.description').animate({
            opacity:'1',
        }, 1500);
        $('.description button').animate({
            opacity:'1',
            left:0,
        },1750);
    }
}

//If a dropNav link is clicked, call toggleNav
$('.dropNav-items a').click(function(){
    toggleNav();
});

//If the dropNav link is clicked, call toggleNav
$('#toggleNav').click(function(){
    toggleNav();
});

//Toggler for the nav
function toggleNav(){
    //if toggleNav as the fa-bars class, open the div
    if ($('#toggleNav').hasClass('fa-bars')) {
        //Make it with less opacity
        $('header nav').css({
            'background-color':'rgba(255,255,255, 0.75)'});
        //raise dropNav height to 100%
        $('#dropNav').animate({
            height:'20em',
        },1000);
        //Change class to fa-times, while removing fa-bars
        $('#toggleNav').addClass('fa-times');
        $('#toggleNav').removeClass('fa-bars');
        //Show hidden elements
        $('.dropNav-items').css('display','block')
        //End the code
        return;
    }
    //if toggleNav as the fa-times class, close the div
    if ($('#toggleNav').hasClass('fa-times')) {
        //If the window is width is smaller than 720px, it becomes 5em tall
        if ($(window).width() <= 720){
            $('#dropNav').animate({
                height:'90px',
            },1000);
        }
        //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
        //Hides hidden elements
        $('.dropNav-items').animate({
            display:'none',
        }, 1000);
        setTimeout(function(){
            $('.dropNav-items').css('display','none');
    }, 900);
        //Back to full opacity after 1 second
        setTimeout(function(){
            $('header nav').css({
            'background-color':'rgba(255,255,255, 1)'
        });
        }, 1000);
    }
};

//if the window is widder than 720px, close the nav
function navMobile(){
    if ($(window).width() > 720) {
        //shrinks dropnav to its original size
        $('#dropNav').animate({
            height:'90px',
        },1000);
        //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
        //Hides elements
        $('.dropNav-items').css('display','none');
        //prob unnecessary, but don't wanna be surprised later
        return;
    }
    //if the window is less than 720px, make the navBar smaller
    else {
        $('header nav').css('height','90px');
         //Hides elements
         $('.dropNav-items').css('display','none');
         //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
    }
};
//Move .scrollspy on click. hover and mouse interaction

//make navbar items an array
const navArray = jQuery.makeArray($('nav ul li'));

$(navArray).click(function(){
    if (this == navArray[0]) {
        $('.scrollspy').animate({
            left: '0',
            width: '60px',
        },1000);
    };
    if (this == navArray[1]) {
        $('.scrollspy').animate({
            left: '97px',
            width: '118px',
        },1000);
    };
    if (this == navArray[2]) {
        $('.scrollspy').animate({
            left: '252px',
            width: '80px',
        },1000);
    };
});
$('.option-button').mouseout(
    function(){
        $(this).animate({
            'bottom':'0',
            'border-bottom-width': '5px',
        },300);
    });