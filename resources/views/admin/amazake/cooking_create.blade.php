@extends('layouts.admin')
@section('title', '旅先記録登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>旅先記録の登録</h2>
                <form action="{{ action('Admin\TravelController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">場所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="basyo" value="{{ old('basyo') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
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
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection