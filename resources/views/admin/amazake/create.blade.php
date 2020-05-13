@extends('layouts.admin')
@section('title', '甘酒情報登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>甘酒情報の登録</h2>
                <form action="{{ action('Admin\AmazakeController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">甘酒名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amazake" value="{{ old('amazake') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nedan" value="{{ old('nedan') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">量</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ryou" value="{{ old('ryou') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">甘さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amasa" value="{{ old('amasa') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">米麹の粒感</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="komekann" value="{{ old('komekann') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">クセ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kuse" value="{{ old('kuse') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">円/ml</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="en_ml" value="{{ old('en_ml') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メーカー・会社</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kaisya" value="{{ old('kaisya') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">産地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="todoufuken" value="{{ old('todoufuken') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="kansou" rows="5">{{ old('kansou') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像1</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image1" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像2</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image2" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像3</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image3" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">リンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                        </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection