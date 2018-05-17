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

        <a href="{{ url('/projecten') }}">Projecten</a><br>
        <a href="{{ url('/contact') }}">Contact</a>

      </div>
    </div>
    <img class="logo-with-text d-none animated-text" src="{{ URL::asset('/img/logo/logo.svg') }}" alt="Merpho">
    <div class="flex-r justify-c align-v merpho-wrapper" style="height:100vh; font-size: 60px; color: black; font-weight: bold;">

      <img class="merpho_bg animated-bg-logo" src="{{ URL::asset('/img/logo/bg_logo.svg') }}" alt="Merpho" style="position: absolute; width: 74vh; top: 16%; left: 32%; opacity: 0.2; ">
      <span class="left-text animated-text d-none">Program</span>
      <span class="center-text animated-text d-none">merpho</span>
      <span class="right-text animated-text d-none">thograpy</span>
    </div>
  </div>

@endsection

@section('js')

<script src="{{ URL::asset('/js/home.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>

@endsection
