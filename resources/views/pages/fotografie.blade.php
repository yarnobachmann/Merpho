@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fotografie.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin">
  @include('partials.nav')
  @include('partials.logo')
  <div class="photography-wrapper col-md-12">
    <div class="container-fluid">
      <div class="row">
        <h1 class="photography col-9">Fotografie</h1><a class="project-button btn btn-secondary col-1" href="https://www.yarnobachmann.nl/fotografie" target="_blank">Foto's</a>
        <div class="photography-text col-11 no-padding-margin">
          <p>{{$photography->text}} </p>
        </div>
        <div class="col-12 flex-r images-wrapper">
          <div class="col-2 fotografie-image">
            <img src="/storage/{{$photography->image_1}}" alt="">
          </div>
          <div class="col-2 fotografie-image">
            <img src="/storage/{{$photography->image_2}}" alt="">
          </div>
          <div class="col-2 fotografie-image">
            <img src="/storage/{{$photography->image_3}}" alt="">
          </div>
          <div class="col-2 fotografie-image">
            <img src="/storage/{{$photography->image_4}}" alt="">
          </div>
          <div class="col-2 fotografie-image">
            <img src="/storage/{{$photography->image_5}}" alt=""> 
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
