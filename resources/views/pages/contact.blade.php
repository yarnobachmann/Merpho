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
    @if(Session::has('success'))

        <div class="alert alert-success" style=" position:absolute; top:0px;" role="alert">
            <strong>Success:</strong> {{ Session::get('success') }}
        </div>

    @endif


    @if(count($errors) > 0)


        <div class="alert alert-danger" role="alert">
            <strong>Errors:</strong>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>


    @endif
		<div class="section-content">
			<h1 class="section-header">Stuur ons een mail</h1>
			<h3>Wij kijken er erg naar uit om met u samen te werken!</h3>
		</div>
    @include('partials.form')
  </div>
  <div class="contact-info-wrapper col-12 flex-r">
    <p class="tel">Tel: {{$contact->telefoon_nummer}}</p>
    <p class="mail">{{$contact->email}}</p>
    <p class="kvk">kvk: {{$contact->kvk_nummer}}</p>
  </div>
</div>
@endsection

@section('js')
<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>
@endsection
