function varticalCenterStuff() {
    var windowHeight = $(window).height();
    var loginBoxHeight = $('.login-box').innerHeight();
    var welcomeTextHeight = $('.welcome-text').innerHeight();

    var mathLogin = (windowHeight / 2) - (loginBoxHeight / 2);
    var mathWelcomeText = (windowHeight / 2) - (welcomeTextHeight / 2);
    $('.form-signin').css('margin-top', mathLogin);
    $('.welcome-text').css('margin-top', mathWelcomeText);

}
$(window).resize(function () {
    varticalCenterStuff();
});
varticalCenterStuff();

// awesomeness
$('.btn-login').click(function(){
    $(this).parent().fadeOut(function(){
        $('.login-box').fadeIn();
    })
});

$('.btn-cancel-action').click(function(e){
    e.preventDefault();
    $(this).parent().parent().parent().fadeOut(function(){
        $('.welcome-text').fadeIn();
    })
});
