@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4" style="">甘酒一覧</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="lead">自分の好みの甘酒を探そう。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
   <div class="container">
     <div class="row">
            <div class="col-md-12">
                <form action="{{ action('AmazakeController@index') }}" method="get">
                    <div class="form-group row">
                        <p class="lead">甘酒の名前</p>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-3">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
    </div>
   </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
            <div class="list-news col-md-12 mx-auto">
              <form action="{{ action('AmazakeController@index') }}" method="get">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                  <div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">更新日</button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/1')}}">新しい順</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/2')}}">古い順</a>
                                    </div>
                                 </div>
                                </th>
                                <th class="text-center">
                                　<div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">甘酒名 </button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/3')}}">名前順</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/4')}}">名前逆順</a>
                                    </div>
                                 　</div>
                                </th>
                                <th class="text-center">
                                　<div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">甘さ</button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/5')}}">大きい</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/6')}}">小さい</a>
                                    </div>
                                 　</div>
                                </th>
                                <th class="text-center">
                                　<div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">米麹の粒感</button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/11')}}">大きい</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/12')}}">小さい</a>
                                    </div>
                                 　</div>
                                </th>
                                <th class="text-center">
                                　<div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">クセ</button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/7')}}">大きい</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/8')}}">小さい</a>
                                    </div>
                                 　</div>
                                </th>
                                <th class="text-center">
                                　<div class="btn-group" >
                                   <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">値段</button>
                                    <div class="dropdown-menu"> <a class="dropdown-item" href="{{url('search/sort/9')}}">高い</a>
                                     <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{url('search/sort/10')}}">安い</a>
                                    </div>
                                 　</div>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $amazake)
                                <tr>
                                    <td class="text-center">{{ $amazake->updated_at->format('Y年m月d日') }}</td>
                                    <td class="text-center">{{ \Str::limit($amazake->amazake, 100) }}</td>
                                    <td class="text-center">
                                      <div class="star-rating">
                                        <div class="star-rating-front" style="width: {{ $amazake->amasa*20}}%">★★★★★</div>
                                        <div class="star-rating-back">★★★★★</div>
                                       </div>
                                      </td>
                                    <td class="text-center">
                                        <div class="star-rating">
                                        <div class="star-rating-front" style="width: {{ $amazake->komekann*20}}%">★★★★★</div>
                                        <div class="star-rating-back">★★★★★</div>
                                        </div>
                                        </td>
                                    <td class="text-center">
                                        <div class="star-rating">
                                        <div class="star-rating-front" style="width: {{ $amazake->kuse*20}}%">★★★★★</div>
                                        <div class="star-rating-back">★★★★★</div>
                                        </div>
                                        </td>
                                    <td class="text-center">{{$amazake->nedan}}</td>
          　　　</form>
                                      <td>
                                        <div>
                                            <a href="{{ action('AmazakeController@open',['id' => $amazake->id]) }}">見てみる</a>
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
  
  <div class="py-6" style="" >
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="{{ action('KurashiController@home') }}">HOMEへ</a></div>
      </div>
    </div>
  </div>
 
@endsection  