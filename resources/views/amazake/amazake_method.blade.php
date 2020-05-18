@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
  
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">甘酒検索方法</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">自分に合った方法で甘酒を探そう。</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="{{ secure_asset('image/甘酒シンプル_s.jpg') }}" alt="Card image cap" height="300">
            <div class="card-body">
              <h4 class="card-title" style="">好みから探す</h4>
              <p class="card-text">甘さ、米麹の粒感、甘酒独特のクセの強さ、値段から、自分にあった甘酒を探してみましょう。</p> <a href="{{ action('AmazakeController@index') }}" class="btn btn-primary" >好みから探すへ</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style=""> <img class="card-img-top border border-info" src="{{ secure_asset('image/map-japan-deform-prefecture-01.png') }}" alt="Card image cap" style="" height="300">
            <div class="card-body">
              <h4 class="card-title">場所から探す</h4>
              <p class="card-text">製造している場所から甘酒を探してみましょう。地図をクリックすると、その場所で製造された甘酒が表示されます。</p> <a href="{{ action('AmazakeController@japan') }}" class="btn btn-primary">場所から探すへ</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="{{ secure_asset('image/甘酒と麹と米_s.jpg') }}" alt="Card image cap" height="300">
            <div class="card-body">
              <h4 class="card-title">本日の甘酒</h4>
              <p class="card-text">「たくさんあって選ぶのが難しい！」そんなあなたは、こちらで甘酒をランダムに紹介します。</p> <a href="#" class="btn btn-primary">本日の甘酒へ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('KurashiController@home') }}">HOMEへ</a></div>
      </div>
    </div>
  </div>
@endsection  