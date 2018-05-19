@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/project-single.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin">
  @include('partials.nav')
  @include('partials.logo')
  <div class="page-wrapper col-md-12">
    <div class="container-fluid">
      <div class="row">
        <img class="left-image" src="https://www.w3schools.com/howto/img_fjords.jpg" alt="">
        <div class="right-image col-5 offset-6" style="background-image: url('https://www.w3schools.com/howto/img_fjords.jpg');"></div>
        <h1 class="project-name col-9">Project naam</h1>
        <a class="project-button btn btn-secondary col-1" href="https://www.yarnobachmann.nl" target="_blank">ga naar</a>
        <div class="project-text col-11 no-padding-margin">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dol</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
