@extends('layouts.front')
@section('title', '甘酒記事一覧')
@section('content')
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4" style="">甘酒記事一覧</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">甘酒の効果・効能、甘酒についてのちょっとした知識をまとめています。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive" style="">
            <table class="table">
              <thead>
                <tr>
                  <th>更新日</th>
                  <th>記事名</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $tishiki)
                <tr>
                  <td>{{ $tishiki->updated_at->format('Y年m月d日') }}</td>
                  <td>{{ $tishiki->title}}</td>
                  <td>
                      <div>
                          <a href="{{ action('TishikiController@open',['id' => $tishiki->id]) }}">見てみる</a>
                      </div>
                  </td>
                </tr>
                @endforeach
                {{ $posts->links() }}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12" ><a class="btn btn-info" href="{{ action('KurashiController@home') }}">HOMEへ</a></div>
      </div>
    </div>
  </div>
@endsection  