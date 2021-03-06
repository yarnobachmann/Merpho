@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/webdesign.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin">
  @include('partials.nav')
  @include('partials.logo')
  <div class="webdesign-wrapper col-md-12">
    <div class="container-fluid">
      <div class="row">
        <h1 class="webdesign">Webdesign</h1>
        <div class="webdesign-text col-11 no-padding-margin">
          <div class="webdesign-image"><img src="/storage/{{$webdesign->image}}" alt=""> </div>
          <p>{!!$webdesign->text!!} </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
