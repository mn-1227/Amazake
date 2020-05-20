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
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" style="" src="{{ asset('storage/image/'.$amazake_int->image_path1) }}">
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="{{ asset('storage/image/'.$amazake_int->image_path2) }}" style="">
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="{{ asset('storage/image/'.$amazake_int->image_path3) }}">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
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
            <li class="list-group-item">甘さ: {{ $amazake_int->amasa }}</li>
            <li class="list-group-item">米麹の粒感: {{ $amazake_int->komekann }}</li>
            <li class="list-group-item">クセ: {{ $amazake_int->kuse }}</li>
            <li class="list-group-item">円／(ml or g): {{ $amazake_int->en_ml }}</li>
            <li class="list-group-item">製造会社・メーカー名: {{ $amazake_int->kaisya }}</li>
            <li class="list-group-item">産地: {{ $amazake_int->address }}</li>
            <li class="list-group-item">link: {{ $amazake_int->link }}</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p class="lead">Lead paragraph. A wonderful serenity has taken possession of my entire soul.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('AmazakeController@index') }}">甘酒一覧へ</a></div>
      </div>
    </div>
  </div>
@endsection  