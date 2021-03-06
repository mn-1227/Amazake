@extends('layouts.admin')
@section('title', '関連商品登録')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>関連商品の登録</h2>
                <form action="{{ action('Admin\ItemController@create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">関連商品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nedan" value="{{ old('nedan') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メーカー・会社</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kaisya" value="{{ old('kaisya') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">リンク</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection