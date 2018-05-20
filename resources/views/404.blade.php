@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-404.css') }}" />
@endsection

@section('title')
    Pagina niet gevonden
@endsection

@extends('layouts.master')

@section('content')

<div class="no-padding-margin main">
  <div class="center flex-c">
    <h1>Ben je dronken?</h1>
    <p>Deze pagina bestaat helemaal niet!</p>
    <a href="{{ url('/') }}">Terug naar homepagina.</a>
  </div>
</div>


@endsection

@section('js')
@endsection
