<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Amazake;

class AmazakeController extends Controller
{
     public function add()
  {
      return view('admin.amazake.create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Amazake::$rules);
      
      $news = new Amazake;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $amazake->image_path = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $amazake->fill($form);
      $amazake->save();
      // admin/amazake/createにリダイレクトする
      return redirect('admin/amazake/create');
  }  
}
