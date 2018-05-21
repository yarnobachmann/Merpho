var hidden = 'd-none';
var program = $('.left-text');
var merpho = $('.center-text');
var thograpy = $('.right-text');
var logo = $('.logo-with-text');
var bg = $('.top-background');
var merphoWrapper = $('.merpho-wrapper');
var merphoBg = $('.merpho_bg');
var menuClick = $('.menu-cube');

$( document ).ready(function()
{
  $('#nav-icon').click(function(){
    $(this).toggleClass('open');
  });


  if($(".loader").not(":visible")) {



  setTimeout(function(){
    program.removeClass(hidden).addClass('slideInLeft');
    thograpy.removeClass(hidden).addClass('slideInRight');
  }, 100);

  setTimeout(function(){
    merpho.removeClass(hidden).addClass('fadeIn');
  }, 500);

  setTimeout(function(){
    program.removeClass('slideInLeft animated-slide-text').addClass('animated fadeOut');
    thograpy.removeClass('slideInRight animated-slide-text').addClass('animated fadeOut');
  }, 4000);

  setTimeout(function(){
    merpho.removeClass('fadeIn animated-slide-text').addClass('slideUpBig animated-fade-out');

  }, 5000);

  setTimeout(function(){
     document.getElementById("nav-icon").style.opacity="1";
     menuClick.removeClass('no-click');
     bg.addClass('background-witdh');
   }, 5900);

   setTimeout(function(){
      merphoBg.addClass('clip-animate');
    }, 6350);

  setTimeout(function(){

    logo.removeClass(hidden).addClass('fadeIn');
  }, 7400);




}else{

}


});

function openNav() {
 var x = document.getElementById("myNav");
 if (x.style.width === "100%") {
     x.style.width = "0%";
 } else {
     x.style.width = "100%";
 }
}
