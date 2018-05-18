@section('css')
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/projecten.css') }}" />
@endsection

@section('title')
    Webdesign en Fotografie
@endsection

@extends('layouts.master')

@section('content')

  <style media="screen">
  /*Contact sectiom*/
.content-header{
font-family: 'Oleo Script', cursive;
color:#fcc500;
font-size: 45px;

}

.section-content{
text-align: center;
margin-bottom: 2%;

}
#contact{

  font-family: 'Teko', sans-serif;
padding-top: 60px;
width: 100%;
width: 100vw;
height: 550px;
color : #fff;
}
.contact-section{
padding-top: 40px;
}
.contact-section .col-md-6{
width: 50%;
}

.form-line{
border-right: 1px solid #B29999;
}

.form-group{
margin-top: 10px;
}
label{
font-size: 1.3em;
line-height: 1em;
font-weight: normal;
}
.form-control{
font-size: 1.3em;
color: #080808;
}
textarea.form-control {
  height: 135px;
 /* margin-top: px;*/
}

.submit{
font-size: 1.1em;
float: right;
width: 150px;
color: #000;

}

  </style>

  <div class="col-12 top-background no-padding-margin" style="background-color: #820333; z-index: 1; width: 100vw;">

      <div id="nav-icon" onclick="openNav()" style="right: 2%; top: 5%;">
        <span></span>
        <span></span>
        <span></span>
      </div>

    <div id="myNav" class="overlay">
      <div class="overlay-content uppercase">

        <a href="{{ url('/') }}">Home</a><br>
        <a href="{{ url('/projecten') }}">Projecten</a><br>
        <a href="{{ url('/contact') }}">Contact</a>

      </div>
    </div>
    <img class="logo-with-text" src="{{ URL::asset('/img/logo/logo.svg') }}" alt="Merpho">

    <div id="contact">
			<div class="section-content">
				<h1 class="section-header">Stuur ons <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> een mail</span></h1>
				<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
			</div>



        <form>
          <div class="container">
            <div class="col-md-12">
                <div class="row">
          <div class="col-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">je naam</label>
                <input type="text" class="form-control" id="" placeholder="vul hier je naam in">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">email adres</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="vul hier je email adres in">
              </div>
              <div class="form-group">
                <label for="telephone">telefoon nummer</label>
                <input type="tel" class="form-control" id="telephone" placeholder="vul hier je telefoon nummer in">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for ="description">bericht</label>
                <textarea  class="form-control" id="description" placeholder="vul hier je berichtje in"></textarea>
              </div>
              <div>

                <button type="button" class="btn btn-default submit">stuur bericht</button>
              </div>

          </div>
        </div>
    </div>
  </div>
        </form>






    </div>
    <div class="col-12 flex-r" style="background-color: #000; height: 55px; color: white; position: absolute; bottom: 0;">
      <p style="margin-right: 5%;">+39 2 984238</p><p>merphoweb@gmail.com</p><p style="position: absolute; right: 0;">kvk: 39284234</p>
    </div>
  </div>

@endsection

@section('js')

<script src="{{ URL::asset('/js/menu.js') }}" charset="utf-8"></script>

@endsection
