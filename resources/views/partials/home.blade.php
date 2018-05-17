@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')

  <div class="top-background-image" style="width: 100vw; height: 100vh; background-image: url('img/bg/top-bg.jpg'); background-repeat: no-repeat; background-size: cover; position: absolute; z-index: 1;" >

  </div>
  <div class="top-background animated" id="top-background" style="background-color: #820333; z-index: 2; width: 100vw;">
    <div class="menu-cube" style="width: 150px; height: 150px; position: absolute; right: 0; top: 0; background-color: #820333;">
      <div id="nav-icon" onclick="openNav()" style="opacity: 0; right: 27%; top: 32%;">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id="myNav" class="overlay">
      <div class="overlay-content uppercase">

        <a href="{{ url('/fotografie') }}">....</a><br>
        <a href="{{ url('/webdesign') }}">....</a><br>
        <a href="{{ url('/over') }}">....</a><br>
        <a href="{{ url('/contact') }}">Contact</a>

      </div>
    </div>
    <img class="logo-with-text d-none animated-text" src="{{ URL::asset('img/logo/logo.svg') }}" alt="Merpho">
    <div class="flex-r justify-c align-v merpho-wrapper" style="height:100vh; font-size: 60px;">
      <span class="left-text animated-text d-none">Program</span>
      <span class="center-text animated-text d-none">merpho</span>
      <span class="right-text animated-text d-none">thograpy</span>
    </div>
  </div>

@endsection

@section('js')

<script type="text/javascript">
  var hidden = 'd-none';
  var program = $('.left-text');
  var merpho = $('.center-text');
  var thograpy = $('.right-text');
  var logo = $('.logo-with-text');
  var bg = $('.top-background');
  var merphoWrapper = $('.merpho-wrapper');

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

      logo.removeClass(hidden).addClass('fadeIn');
    }, 9400);




  }else{

  }
  setTimeout(function(){
     document.getElementById("nav-icon").style.opacity="1";
     bg.addClass('background-witdh');
   }, 7900);

  });

  function openNav() {
   var x = document.getElementById("myNav");
   if (x.style.width === "100%") {
       x.style.width = "0%";
   } else {
       x.style.width = "100%";
   }
  }

</script>

@endsection
