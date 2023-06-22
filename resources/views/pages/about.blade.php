@extends('main')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_4.png')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">About</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2 d-flex align-self-stretch align-items-center justify-content-center" style="background-image: url({{asset('images/about.jpeg')}}); background-size: contain">
      </div>
      <div class="col-md-7 pt-5 mt-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-5">
          <div class="pl-md-5 ml-md-5">
            <h2 class="mb-4">Welcome to {{config('app.name')}} Real Estate Agency</h2>
          </div>
        </div>
        <div class="pl-md-5 ml-md-5 mb-5">
          <p>{!! config('app.about') !!}</p>
        </div>
      </div>
    </div>
    <div class="row about mt-5 pt-4">
      <div class="col-md-4 ftco-animate">
        <h3 class="h4">Mission</h3>
        <p>{{config('app.mission')}}</p>
      </div>
      <div class="col-md-4 ftco-animate"></div>
      <div class="col-md-4 ftco-animate">
        <h3 class="h4">Vision</h3>
        <p>{{config('app.vision')}}</p>
      </div>

    </div>
  </div>
</section>
@include('partials._testimonies')
@include('partials._counter')
@endsection