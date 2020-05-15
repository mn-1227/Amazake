@extends('layouts.admin')
@section('title', '料理のレシピ登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>料理のレシピの登録</h2>
                <form action="{{ action('Admin\CookingController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">料理名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">材料</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="zairyou" rows="5">{{ old('zairyou') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作り方</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body1" rows="5">{{ old('body1') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作り方</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body2" rows="5">{{ old('body2') }}</textarea>
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
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection