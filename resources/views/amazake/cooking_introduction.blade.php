@extends('layouts.front')
@section('title', '甘酒料理紹介')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">甘酒を使った料理</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">{{ $cooking_int->title }}</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="{{ $cooking_int->image_path1 }}"></div>
        <div class="col-md-6">
          <h3 class="">材料</h3>
          <p class="lead">{{ $cooking_int->zairyou }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="">作り方</h3>
          <p class="lead">{{ $cooking_int->body1 }}</p>
        </div>
        <div class="col-md-6"><img class="img-fluid d-block" src="{{ $cooking_int->image_path2}}"></div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="{{ $cooking_int->image_path3 }}"></div>
        <div class="col-md-6">
          <p class="lead">{{ $cooking_int->body2 }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('CookingController@index') }}">レシピ一覧へ</a></div>
      </div>
    </div>
  </div>
@endsection  