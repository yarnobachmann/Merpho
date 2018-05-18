@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/webdesign.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')


  <div class="col-12 top-background no-padding-margin" style="background-color: #820333; z-index: 1; width: 100vw;">

      <div id="nav-icon" onclick="openNav()" style="right: 2%; top: 5%;">
        <span></span>
        <span></span>
        <span></span>
      </div>

    <div id="myNav" class="overlay">
      <div class="overlay-content uppercase">

        <a href="{{ url('/') }}">Home</a><br>
        <a href="{{ url('/projecten') }}">Projecten</a><br>
        <a href="{{ url('/team') }}">Team</a><br>
        <a href="{{ url('/contact') }}">Contact</a><br>

      </div>
    </div>
    <img class="logo-with-text" src="{{ URL::asset('/img/logo/logo.svg') }}" alt="Merpho">






            <div class="col-md-12" style="padding-left: 2%; padding-right: 2%; margin-top: 4%; ">
              <div class="container-fluid">
                <div class="row">
                  <h1 style="margin-left: 3%; margin-bottom: 2%;">Webdesign</h1>
                  <div class="col-11 no-padding-margin" style="margin-left: 3%;">
                    <div class="" style="float:right; padding-left: 1%; height: 453px; width: 809px; background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url('https://www.w3schools.com/howto/img_fjords.jpg');">

                    </div>
                    <p style=" font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                  </div>













                </div>
              </div>

    </div>








</div>

@endsection

@section('js')

<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>

@endsection
