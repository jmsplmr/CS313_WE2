$('.message a').click(function(){
  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
  $('.form .register-form').css("display", "visible");
  $('.form .login-page').css("display", "none");
});
