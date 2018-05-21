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
      @foreach($teams as $team)
      <div class="col-1"></div>
      <div class="team-card-wrapper col-5">
        <div class="row" style="    height: 100%;">
          <div class="col-5 no-padding-margin">
            <img class="team-img" src="/storage/{{$team->image}}" alt="">
          </div>
          <div class="team-card-text col-7">
            <h3 class="card-name">{{$team->naam}}</h3>
            <h5 class="card-special">{{$team->beroep}}</h5>
            <p class="card-text">{{$team->text}}</p>
            <div class="social-wrapper">
              <a class="linkedin" target="_blank" href="{{$team->linkedin_link}}"><img src="{{ URL::asset('/img/apps/linkedin.svg') }}" alt=""></a>
              <a class="facebook" target="_blank" href="{{$team->facebook_link}}"><img src="{{ URL::asset('/img/apps/facebook.svg') }}" alt=""></a>
              <a class="instagram" target="_blank" href="{{$team->instagram_link}}"><img src="{{ URL::asset('/img/apps/instagram.svg') }}" alt=""></a>
              <a class="portfolio btn btn-secondary" target="_blank" href="{{$team->portfolio_link}}">Portfolio</a>
            </div>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
