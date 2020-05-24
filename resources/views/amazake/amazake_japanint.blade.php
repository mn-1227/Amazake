@extends('layouts.front')
@section('title', '甘酒紹介')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4" style="">甘酒情報</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
              <h1 class="">{{ $amazake_int->amazake }}</h1>
            </div>
            <div class="col-md-4">
              <h2 class="">{{ $amazake_int->nedan }}円/{{ $amazake_int->ryou }}</h2>
            </div>
          </div>
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
              <div class="carousel-item active"> <img class="d-block img-fluid" style="" src="{{$amazake_int->image_path1}}" width="300">
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid" src="{{ $amazake_int->image_path2 }}" style="" width="300">
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid" src="{{$amazake_int->image_path3}}" width="300">
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">甘さ: 
            <div class="star-rating">
            <div class="star-rating-front" style="width: {{ $amazake_int->amasa*20}}%">★★★★★</div>
            <div class="star-rating-back">★★★★★</div>
            </div>
            </li>
            <li class="list-group-item">米麹の粒感: 
            <div class="star-rating">
            <div class="star-rating-front" style="width: {{ $amazake_int->komekann*20}}%">★★★★★</div>
            <div class="star-rating-back">★★★★★</div>
            </div>
            </li>
            <li class="list-group-item">クセ: 
            <div class="star-rating">
            <div class="star-rating-front" style="width: {{ $amazake_int->kuse*20}}%">★★★★★</div>
            <div class="star-rating-back">★★★★★</div>
            </div>
            </li>
            <li class="list-group-item">円／(ml or g): {{ $amazake_int->en_ml }}</li>
            <li class="list-group-item">製造会社・メーカー名: {{ $amazake_int->kaisya }}</li>
            <li class="list-group-item">産地: {{ $amazake_int->address }}</li>
            <li class="list-group-item">link: {{ $amazake_int->link }}</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p class="lead">{{ $amazake_int->kansou }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('AmazakeController@japan') }}">場所から選ぶへ</a></div>
      </div>
    </div>
  </div>
@endsection  