@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/team.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin" style="">
  @include('partials.nav')
  @include('partials.logo')
  <h1 class="team">Team</h1>
  <div class="team-wrapper col-md-12">
    <div class="row">
      <div class="col-1"></div>
      <div class="team-card-wrapper col-5">
        <div class="row">
          <div class="col-5 no-padding-margin">
            <img class="team-img" src="https://www.w3schools.com/howto/img_fjords.jpg" alt="">
          </div>
          <div class="team-card-text col-7">
            <h3 class="card-name">Yarno Bachmann</h3>
            <h5 class="card-special">Webdeveloper/Fotograaf</h5>
            <p class="card-text">Fotograaf/filmmaker als hobby. Een liefhebber van muziek en creativiteit. Het maken van websites is mijn passie. Check mijn portfolio en Instagram.Fotograaf/filmmaker als hobby. Een liefhebber van muziek en creativiteit. Het maken van websites is mijn passie. Check mijn portfolio en Instagram.Fotograaf/filmmaker als hobby. Een liefhebber van muziek en creativiteit. Het maken van websites is mijn passie. Check mijn portfolio en Instagram.Fotograaf/filmmaker als hobby. Een liefhebber van muziek en creativiteit.</p>
            <a class="linkedin" target="_blank" href="https://www.yarnobachmann.nl"><img src="{{ URL::asset('/img/apps/linkedin.svg') }}" alt=""></a>
            <a class="facebook" target="_blank" href="https://www.yarnobachmann.nl"><img src="{{ URL::asset('/img/apps/facebook.svg') }}" alt=""></a>
            <a class="instagram" target="_blank" href="https://www.yarnobachmann.nl"><img src="{{ URL::asset('/img/apps/instagram.svg') }}" alt=""></a>
            <a class="portfolio btn btn-secondary" target="_blank" href="https://www.yarnobachmann.nl">Portfolio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
