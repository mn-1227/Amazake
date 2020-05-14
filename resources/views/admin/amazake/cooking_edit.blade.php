@extends('layouts.admin')
@section('title', '旅先記録の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>旅先記録編集</h2>
                <form action="{{ action('Admin\TravelController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $travel_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="basyo" value="{{ $travel_form->basyo}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $travel_form->address}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ $travel_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            <div class="form-text text-info">
                                設定中: {{ $travel_form->image_path1 }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2">
                            <div class="form-text text-info">
                                設定中: {{ $travel_form->image_path2 }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3">
                            <div class="form-text text-info">
                                設定中: {{ $travel_form->image_path3 }}
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
                            <input type="text" class="form-control" name="link" value="{{ $travel_form->link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $travel_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($travel_form->histories != NULL)
                                @foreach ($travel_form->histories as $travelhistory)
                                    <li class="list-group-item">{{ $travelhistory->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection