@extends('layouts.admin')
@section('title', '登録済みの甘酒一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>甘酒一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\AmazakeController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\AmazakeController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">甘酒名</label>
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
                                <th width="20%">甘酒名</th>
                                <th width="10%">甘さ</th>
                                <th width="10%">米感</th>
                                <th width="10%">クセ</th>
                                <th width="30%">感想</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $amazake)
                                <tr>
                                    <th>{{ $amazake->id }}</th>
                                    <td>{{ \Str::limit($amazake->amazake, 100) }}</td>
                                    <td>{{ \Str::limit($amazake->amasa, 50)}}</td>
                                    <td>{{ \Str::limit($amazake->komekann, 50)}}</td>
                                    <td>{{ \Str::limit($amazake->kuse, 50)}}</td>
                                    <td>{{ \Str::limit($amazake->kansou, 150) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\AmazakeController@edit', ['id' => $amazake->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\AmazakeController@delete', ['id' => $amazake->id]) }}">削除</a>
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