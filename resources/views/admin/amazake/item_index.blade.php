@extends('layouts.admin')
@section('title', '登録済みの関連商品一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>関連商品一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ItemController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ItemController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">関連商品名</label>
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
                                <th width="30%">関連商品名</th>
                                <th width="50%">感想</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <th>{{ $item->id }}</th>
                                    <td>{{ \Str::limit($item->title, 100) }}</td>
                                    <td>{{ \Str::limit($item->body, 100)}}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ItemController@edit', ['id' => $item->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\ItemController@delete', ['id' => $item->id]) }}">削除</a>
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