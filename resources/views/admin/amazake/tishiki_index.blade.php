@extends('layouts.admin')
@section('title', '登録済みの甘酒記事一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>甘酒記事一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\TishikiController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\TishikiController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">記事タイトル</label>
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
                                <th width="30%">記事タイトル</th>
                                <th width="50%">感想</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $tishiki)
                                <tr>
                                    <th>{{ $tishiki->id }}</th>
                                    <td>{{ \Str::limit($tishiki->title, 100) }}</td>
                                    <td>{{ \Str::limit($tishiki->body, 100)}}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\TishikiController@edit', ['id' => $tishiki->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\TishikiController@delete', ['id' => $tishiki->id]) }}">削除</a>
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