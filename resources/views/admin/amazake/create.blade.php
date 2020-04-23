@extends('layouts.admin')
@section('title', '甘酒情報登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>甘酒情報の登録</h2></h2>
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
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">甘さ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="amasa" value="{{ old('amasa') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">米感</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="komekan" value="{{ old('komekan') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">クセ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kuse" value="{{ old('kuse') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="kansou" rows="5">{{ old('kansou') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">販売元</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hanbaimoto" rows="5">{{ old('hanbaimoto') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsectionn