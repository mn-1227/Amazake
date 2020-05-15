@extends('layouts.admin')
@section('title', '登録済みの料理レシピ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>料理レシピ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\CookingController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\CookingController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">料理名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="30%">料理名</th>
                                <th width="40%">材料</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $cooking)
                                <tr>
                                    <th>{{ $cooking->id }}</th>
                                    <td>{{ \Str::limit($cooking->title, 150) }}</td>
                                    <td>{{ \Str::limit($cooking->zairyou, 150)}}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\CookingController@edit', ['id' => $cooking->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\CookingController@delete', ['id' => $cooking->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection