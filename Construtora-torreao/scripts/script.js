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
})
//if the window is widder than 720px, close the nav
$(window).resize(function(){
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
})