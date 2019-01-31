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
    overlayMobile();
    scrollCheck();
});

//If the window is resized, call these functions
$(window).resize(function(){
    navMobile(),
    overlayMobile()
});

//If window is scrolled, call these functions
$(window).scroll(function(){
    scrollCheck();
    scrollFade();
});

function scrollFade() {
    //Window current position!
    let scroll = $(window).scrollTop();
    //animates description elements on scroll, if it hasnt been called before
    if (scroll >= 100 && $('.description').css('opacity') == '0') {
        $('.description').animate({
            opacity:'1',
            left: '0px',
        }, 1250);
    }
    //animates product elements on scroll, if it hasnt been called before
    if (scroll >= 500 && $('.products').css('opacity') == '0') {
        $('.products').animate({
            opacity:'1',
            right: '0px',
        }, 1250);
        setTimeout(function(){
            rotation(0)},1250);
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

//scroll to top of website
$('.linkTop').click(function(){
    $('html,body').animate({
        scrollTop: $('.banner').offset().top -100
    }, 1000);
})
//scroll to description section
$('.linkDescription').click(function(){
    $('html,body').animate({
        scrollTop: $('.description').offset().top-140
    }, 1000);
})
//scroll to products section
$('.linkProducts').click(function(){
    $('html,body').animate({
        scrollTop: $('.products').offset().top-140
    }, 1000);
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
            height:'25em',
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
                height:'5em',
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

//check scrolling interactions
function scrollCheck() {
    //Window current position!
    let scroll = $(window).scrollTop();
    //Check if the window width is higher than 720
    if ($(window).width() > 720) {
        //If scroll is higher than 100px, header becomes smaller and full color
        if (scroll == 100) {
            $('header nav').css({'background-color':'rgba(255,255,255, 1)'});
        }
        //If scroll is smaller than 100px, header becomes bigger and transparent
        if (scroll == 0) {
            $('header nav').css({'background-color':'rgba(255,255,255, 0.75)'});
        }
    }
    //If its a mobile view
    else {
        //Break the function
        return;
    }
}
//if the window is widder than 720px, close the nav
function navMobile(){
    if ($(window).width() > 720) {
        //shrinks dropnav to its original size
        $('#dropNav').animate({
            height:'5em',
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
        $('header nav').css('height','5em');
         //Hides elements
         $('.dropNav-items').css('display','none');
         //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
    }
};

//Creates shadowy overlay on hovered class
$(".option").hover(
    function(){
        //changes overlay class
            $('.overlay',this).animate({
                opacity: 1
            }, 500);
      }, function(){
          //called when image in unhovered
          $('.overlay',this).animate({
                opacity: 0.5
            }, 500);
});

//if the window width is less than 720px, elements are permanently overlayed
function overlayMobile(){
    if ($(window).width() <= 720) {
        $('.overlay').css(
            'opacity', '1'
        );
    }
    //if the windown width is bigger than 720px, they arent
    else if ($(window).width() > 720){
        $('.overlay').css(
            'opacity', '0.5'
        );
    }
};

//Rotates elements before scroll
function rotation(d) {
    var elem = $('.option');

    $({deg: 15}).animate({deg: d}, {
        duration: 1000,
        step: function(now){
            elem.css({
                 transform: "rotate(" + now + "deg)"
            });
        }
    });
}