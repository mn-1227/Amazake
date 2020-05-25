@extends('layouts.front')
@section('title', '甘酒紹介')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">甘酒記事</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="">{{ $tishiki_int->title }}</h1>
        </div>
        <div class="col-md-6">
          <h6 class="">更新日：{{ $tishiki_int->updated_at }}</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
    </div>
  </div>
  <div class="py-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style=""><img class="img-fluid d-block" src="{{$tishiki_int->image_path }}" style="" width="300"></div>
        <div class="col-md-6">
          <p class="lead">{{ $tishiki_int->body }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('TishikiController@index') }}">記事一覧へ</a></div>
      </div>
    </div>
  </div>
@endsection  