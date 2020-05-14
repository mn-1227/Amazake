@extends('layouts.admin')
@section('title', '甘酒情報の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>甘酒情報編集</h2>
                <form action="{{ action('Admin\AmazakeController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">甘酒名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amazake" value="{{ $amazake_form->amazake }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nedan" value="{{ $amazake_form->nedan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">量</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ryou" value="{{ $amazake_form->ryou}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">甘さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amasa" value="{{ $amazake_form->amasa }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">米の粒感</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="komekann" value="{{ $amazake_form->komekann }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">クセ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kuse" value="{{ $amazake_form->kuse }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">円/ml</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="en_ml" value="{{ $amazake_form->en_ml }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">メーカー・会社</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kaisya" value="{{ $amazake_form->kaisya }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">産地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $amazake_form->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">都道府県</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="todoufuken" value="{{ $amazake_form->todoufuken }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="kansou" rows="5">{{ $amazake_form->kansou }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1">
                            <div class="form-text text-info">
                                設定中: {{ $amazake_form->image_path1 }}
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
                                設定中: {{ $amazake_form->image_path2 }}
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
                                設定中: {{ $amazake_form->image_path3 }}
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
                            <input type="text" class="form-control" name="link" value="{{ $amazake_form->link }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $amazake_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($amazake_form->histories != NULL)
                                @foreach ($amazake_form->histories as $amazakehistory)
                                    <li class="list-group-item">{{ $amazakehistory->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection