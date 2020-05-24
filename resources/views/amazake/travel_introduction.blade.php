@extends('layouts.front')
@section('title', '旅の思い出紹介')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="display-4">旅先での甘酒</h1>
        </div>
        <div class="col-md-4">
          <h2 class="">思い出とともに</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">{{ $travel_int->title }}</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid" src="{{$travel_int->image_path1}}" width="300">
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid" src="{{$travel_int->image_path2}}" width="300">
                
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid" src="{{$travel_int->image_path3}}" width="300">
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">{{ $travel_int->body }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">情報</h5>
              <h6 class="card-subtitle my-2 text-muted">訪れた場所:{{ $travel_int->basyo }}</h6>
              <p class="card-text">住所:{{ $travel_int->address }}</p>
              <a href="#" class="card-link">リンク<link rel="stylesheet" href="{{ $travel_int->link }}" type="text/css" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('TravelController@index') }}">旅の思い出一覧へ</a></div>
      </div>
    </div>
  </div>
@endsection  