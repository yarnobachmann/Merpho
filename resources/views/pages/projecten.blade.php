@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/projecten.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin">
  @include('partials.nav')
  @include('partials.logo')
  <h1 class="projects">Projecten</h1>
  <div class="project-text-row row">
    @foreach($projects as $project)
    <div class="project-wrapper col-sm-3">
      <a href="{{ url('/projecten') }}/{{ $project->naam }}">
      <div class="project-bg flex-r justify-c align-v">
        <div class="project-overlay"></div>
        <div class="project-name flex-r justify-c align-v">
          <p>{{$project->naam}}</p>
        </div>
        <img src="/storage/{{$project->logo}}" class="img-responsive logo-img" alt="Image">
      </div>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
