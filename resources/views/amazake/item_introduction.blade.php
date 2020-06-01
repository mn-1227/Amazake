@extends('layouts.front')
@section('title', '関連商品紹介')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4" style="">商品情報</h1>
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
              <h1 class="">{{ $item_int->title }}</h1>
            </div>
            <div class="col-md-4">
              <h2 class="">値段:{{ $item_int->nedan }}円</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card"> <img class="card-img" src="{{ $item_int->image_path }}" alt="Card image"  width="300">
          </div>
        </div>
        <div class="col-md-6">
          <p class="lead">{{ $item_int->body }}</p>
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
              <h5 class="card-title">商品情報</h5>
              <h6 class="card-subtitle my-2 text-muted">製造会社・メーカー:{{ $item_int->kaisya }}</h6>
              <a href="{{ $item_int->link }}" class="card-link">商品詳細</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('ItemController@index') }}">甘酒一覧へ</a></div>
      </div>
    </div>
  </div>
@endsection  