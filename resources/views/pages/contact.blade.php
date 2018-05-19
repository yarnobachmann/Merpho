@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/contact.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')
<div class="col-12 top-background no-padding-margin">
  @include('partials.nav')
  @include('partials.logo')
  <div id="contact">
		<div class="section-content">
			<h1 class="section-header">Stuur ons een mail</h1>
			<h3>Wij kijken er erg naar uit om met u samen te werken!</h3>
		</div>
    @include('partials.form')
  </div>
  <div class="contact-info-wrapper col-12 flex-r">
    <p class="tel">Tel: +31 6 37241371</p>
    <p class="mail">merphoweb@gmail.com</p>
    <p class="kvk">kvk: 70894191</p>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
