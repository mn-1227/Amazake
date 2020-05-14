@extends('layouts.admin')
@section('title', '関連商品の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>関連商品編集</h2>
                <form action="{{ action('Admin\ItemController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">関連商品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $item_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nedan" value="{{ $item_form->nedan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">メーカー・会社</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kaisya" value="{{ $item_form->kaisya }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $item_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $item_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                   <div class="form-group row">
                        <label class="col-md-2" for="title">リンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="link" value="{{ $item_form->link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $item_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($item_form->histories != NULL)
                                @foreach ($item_form->histories as $itemhistory)
                                    <li class="list-group-item">{{ $itemhistory->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection