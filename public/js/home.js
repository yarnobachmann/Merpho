var hidden = 'd-none';
var program = $('.left-text');
var merpho = $('.center-text');
var thograpy = $('.right-text');
var logo = $('.logo-with-text');
var bg = $('.top-background');
var merphoWrapper = $('.merpho-wrapper');
var merphoBg = $('.merpho_bg');

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
    program.removeClass('slideInLeft animated-text').addClass('animated fadeOut');
    thograpy.removeClass('slideInRight animated-text').addClass('animated fadeOut');
  }, 6000);

  setTimeout(function(){
    merpho.removeClass('fadeIn animated-text').addClass('slideUpBig animated-fade-out');

  }, 7000);

  setTimeout(function(){
     document.getElementById("nav-icon").style.opacity="1";
     bg.addClass('background-witdh');
   }, 7900);

   setTimeout(function(){
      merphoBg.addClass('clip-animate');
    }, 8400);

  setTimeout(function(){

    logo.removeClass(hidden).addClass('fadeIn');
  }, 9400);




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
