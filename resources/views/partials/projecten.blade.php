@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/projecten.css') }}" />
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
        <a href="{{ url('/contact') }}">Contact</a>

      </div>
    </div>
    <img class="logo-with-text" src="{{ URL::asset('/img/logo/logo.svg') }}" alt="Merpho">

    <h1 style="text-align: center; margin-top: 4%;">Projecten</h1>

  <div class="row" style="margin-top: 6%; padding-left: 2%; padding-right: 2%;">

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

    <div class="col-sm-3"style="height: 275px; margin-bottom: 3%;">
        <div class="project-bg flex-r justify-c align-v" style="background-color:  black; height: 275px; border-radius:2%;">
          <div class="project-overlay" style="background-color: yellow; z-index: 2; width: 94%; height: 100%; position: absolute; border-radius:2%;">
          </div>
          <div class="project-name flex-r justify-c align-v" style="z-index: 3; width: 100%; height: 100%; position: absolute;">
            <p>Hallo</p>
          </div>
          <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:35%; height: 35%;" alt="Image">
        </div>
    </div>

  </div>





    </div>
  </div>

@endsection

@section('js')

<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>

@endsection
