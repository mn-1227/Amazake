@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card"> <img class="card-img" src="{{ secure_asset('image/甘酒表紙_s.jpg') }}" alt="Card image">
            <div class="card-img-overlay d-flex justify-content-center align-items-center">
              <h3 class="display-2 text-muted" style="">甘酒くらし</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">このサイトは管理者が自分で飲んだり、調べた甘酒についてを、趣味としてまとめているサイトです。<br>「こんなに種類があるんだ！」「甘酒ってこういう効能があるんだ。」と楽しんでいただけたらと思います。<br>ですが専門サイトではないので、色々責任は取れませんので悪しからず。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">甘酒を探す</h4>
              <p class="card-text">自分の好みの甘酒を見つけよう。<br>味の好みや、産地で探すことや、ランダムで甘酒を選ぶこともできます。<br></p> <a href="{{ action('AmazakeController@method') }}" class="btn btn-primary">甘酒検索へ</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">甘酒の効果って？</h4>
              <p class="card-text">なんとなく身体にいいイメージがあるけど、実際どんな効果があるの？甘酒を飲むことでのメリットや注意をまとめました。</p> <a href="#" class="btn btn-primary">効果・効能へ</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card"> <img class="card-img-top" src="https://static.pingendo.com/cover-moon.svg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">こんな商品ありました</h4>
              <p class="card-text">飲むだけじゃないんです。<br>見つけた甘酒関連の商品を紹介したいと思います。</p> <a href="#" class="btn btn-primary">関連商品へ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection