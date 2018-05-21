@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/home.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="top-background-image" style="background-image: url('img/bg/top-bg.jpg');" ></div>
<div class="flex-r justify-c align-v" style="width: 100vw; height: 100vh; position: absolute;">
  <img class="merpho_bg animated-bg-logo" src="{{ URL::asset('/img/logo/bg_logo.svg') }}" alt="Merpho">
</div>

<div class="top-background animated" id="top-background">
  <div class="menu-cube no-click" >
    @include('partials.nav')
  </div>
  <img class="logo-with-text d-none animated-text" src="{{ URL::asset('/img/logo/logo.svg') }}" alt="Merpho">
  <div class="flex-r justify-c align-v merpho-wrapper">

    <span class="left-text animated-slide-text d-none">Program</span>
    <span class="center-text animated-slide-text d-none">merpho</span>
    <span class="right-text animated-slide-text d-none">thograpy</span>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('/js/home.js') }}" charset="utf-8"></script>
@endsection
