@extends('layouts.front')
@section('title', '甘酒検索方法')
@section('content')
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
  <div class="py-4">
    <div class="container">
      <div class="row">
            <div class="list-news col-md-12 mx-auto">
              <form action="{{ action('AmazakeController@index') }}" method="get">
                <div class="row">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th width="20%"><input class="btn btn-ligft" type="submit" name="updated_at" value="更新日"></th>
                                <th width="20%"><input class="btn btn-ligft" type="submit" name="amazake" value="甘酒名"></th>
                                <th width="15%"><input class="btn btn-ligft" type="submit" name="amasa" value="甘さ"></th>
                                <th width="15%"><input class="btn btn-ligft" type="submit" name="komekann" value="米麹の粒感"></th>
                                <th width="15%"><input class="btn btn-ligft" type="submit" name="kuse" value="クセ"></th>
                                <th width="15%"><input class="btn btn-ligft" type="submit" name="nedan" value="値段"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $amazake)
                                <tr>
                                    <td>{{ $amazake->updated_at->format('Y年m月d日') }}</td>
                                    <td>{{ \Str::limit($amazake->amazake, 100) }}</td>
                                    <td>{{ $amazake->amasa}}</td>
                                    <td>{{ $amazake->komekann}}</td>
                                    <td>{{$amazake->kuse}}</td>
                                    <td>{{$amazake->nedan}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="pagination">
            <li class="page-item"> <a class="page-link" href="#"> <span>«</span></a> </li>
            <li class="page-item active"> <a class="page-link" href="#">1</a> </li>
            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
            <li class="page-item"> <a class="page-link" href="#">4</a> </li>
            <li class="page-item"> <a class="page-link" href="#"> <span>»</span></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="py-6" style="" >
    <div class="container">
      <div class="row">
        <div class="col-md-12"><a class="btn btn-info" href="#">HOMEへ</a></div>
      </div>
    </div>
  </div>
 
@endsection  