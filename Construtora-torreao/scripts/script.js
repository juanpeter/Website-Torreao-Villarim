//Global values!
//Window current position!
let scroll;

//Functions to call at the beginning
//If the document is ready, call these functions
$(document).ready(function(){
    navMobile();
    overlayMobile();
});

//If the window is resized, call these functions
$(window).resize(function(){
    navMobile(),
    overlayMobile()
});

//If window is scrolled, call these functions
$(window).scroll(function(){
    scrollCheck();
});

//scroll to top of website
$('#top').click(function(){
    $('html,body').animate({
        scrollTop: $('.banner').offset().top -100
    }, 1000);
})
//scroll to description section
$('#description').click(function(){
    $('html,body').animate({
        scrollTop: $('.description').offset().top-140
    }, 1000);
})
//scroll to products section
$('#products').click(function(){
    $('html,body').animate({
        scrollTop: $('.products').offset().top-140
    }, 1000);
});

//Toggler for the nav
$('#toggleNav').click(function(){
    //if toggleNav as the fa-bars class, open the div
    if ($('#toggleNav').hasClass('fa-bars')) {
        //Make it with less opacity
        $('header nav').css({
            'background-color':'rgba(255,255,255, 0.75)'});
        //raise dropNav height to 100%
        $('#dropNav').animate({
            height:'100%',
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
        //If not, it becomes 6em tall
        else {
            $('#dropNav').animate({
                height:'5em',
            },1000);
        }
        //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
        //Hides hidden elements
        $('.dropNav-items').css('display','none');
        //Back to full opacity after 1 second
        setTimeout(function(){
            $('header nav').css({
            'background-color':'rgba(255,255,255, 1)'
        });
        },1000);
    }
});

//check scrolling interactions
function scrollCheck() {
    //Window current position!
    let scroll = $(window).scrollTop();
    //Check if the window width is higher than 720
    if ($(window).width() > 720){
        //If scroll is higher than 100px, header becomes smaller and full color
        if (scroll >= 100) {
            $('header nav').css({'background-color':'rgba(255,255,255, 1)'});
            $('header nav').animate({
                height:'5em',
            }, 1000);
        }
        //If scroll is smaller than 100px, header becomes bigger and transparent
        if (scroll < 100) {
            $('header nav').css({
                'background-color':'rgba(255,255,255, 0.75)'});
            $('header nav').animate({
                height:'6em',
            }, 1000);
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
            height:'6em',
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