@extends('layouts.front')
@section('title', '今日の甘酒')
@section('content')
<div class="py-3" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">本日の甘酒</h1>
          <div class="card"> <img class="card-img w-75 h-75 mx-auto" src="{{ secure_asset('image/ビンゴ.jpg') }}" alt="Card image">
            <div class="card-img-overlay d-flex justify-content-center align-items-center w-100" style="">
              <div class="mx-auto col-lg-5 col-md-12 col-10 text-center" style="">
                <h1 class="text-danger">運試し？！本日の甘酒</h1>
                <p class="mb-3">あなたの本日の甘酒を選んじゃいます！<br>どんな甘酒になるかは運次第！<br>↓Let's Try！！↓</p> <a class="btn btn-primary" href="{{ action('AmazakeController@today') }}">本日の甘酒は・・・？</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center py-3">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  
@endsection  