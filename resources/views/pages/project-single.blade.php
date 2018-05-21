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
        <div class="left-image">
          <img src="/storage/{{ $project[0]->logo }}" alt="">
        </div>
        <div class="right-image col-5 offset-6">
          <img src="/storage/{{ $project_view[0]->image }}" alt="">
        </div>
        <h1 class="project-name col-9">{{ $project[0]->naam }}</h1>
        <a class="project-button btn btn-secondary col-1" href="{{ $project_view[0]->link }}" target="_blank">ga naar</a>
        <div class="project-text col-11 no-padding-margin">
          <p>{!! $project_view[0]->text !!}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
