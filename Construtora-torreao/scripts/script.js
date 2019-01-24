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
$(window).scroll(function() {
    //Window current position!
    var scroll = $(window).scrollTop();
    //Header position, its always 32 px
    var os = $('header').offset().top;
    var ht = $('.blog-post').height();
    var font = 88;
    if(scroll > os + ht - font){
        console.log("essa poar")
    }
  
  });

//scroll to top of website
$('#top').click(function(){
    $('html,body').animate({
        scrollTop: $('.banner').offset().top
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
        //raise dropNav height to 100%
        $('#dropNav').css('height','100%');
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
        //shrinks dropnav to its original size
        $('#dropNav').css('height','5em');
        //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
        //Hides hidden elements
        $('.dropNav-items').css('display','none')
        //prob unnecessary, but don't wanna be surprised later
        return;
    }
});

//if the window is widder than 720px, close the nav
function navMobile(){
    if ($(window).width() >= 720) {
        //shrinks dropnav to its original size
        $('#dropNav').css('height','5em');
        //Change class to fa-bars, while removing fa-times
        $('#toggleNav').addClass('fa-bars');
        $('#toggleNav').removeClass('fa-times');
        //Hides elements
        $('.dropNav-items').css('display','none');
        //prob unnecessary, but don't wanna be surprised later
        return;
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