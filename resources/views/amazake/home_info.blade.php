@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">このサイトについて</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">サイト作成者・著者</h5>
              <h6 class="card-subtitle my-2 text-muted">samuko</h6>
              <p class="card-text" style="">甘酒好きな一般人。プログラミング初心者。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">このサイトは・・・</h5>
              <h6 class="card-subtitle my-2 text-muted" contenteditable="true">作成者であるsamukoの個人サイトです。</h6>
              <p class="card-text">当サイトの内容、テキスト、画像等の無断転載・無断使用を固く禁じます。 また、NAVERまとめ等のまとめサイトへの引用を厳禁いたします。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('KurashiController@home') }}">HOMEへ</a></div>
      </div>
    </div>
  </div>
@endsection