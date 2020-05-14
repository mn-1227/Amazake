<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
     public function add()
  {
      return view('admin.amazake.create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Amazake::$rules);
      
      $amazake = new Amazake;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$phpto->image_path に画像のパスを保存する
      if (isset($form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $amazake->image_path1 = basename($path);
      } else {
          $amazake->image_path1 = null;
      }
      
      if (isset($form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $amazake->image_path2 = basename($path);
      } else {
          $amazaek->image_path2 = null;
      }
      
      if (isset($form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $amazake->image_path3 = basename($path);
      } else {
          $amazake->image_path3 = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);
      
      // データベースに保存する
        $amazake->fill($form);
        $amazake->save();
      
       //admin/amazake/createにリダイレクトする
       return redirect('admin/amazake/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Amazake::where('amazake', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Amazake::all();
      }
      return view('admin.amazake.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // amazake Modelからデータを取得する
      $amazake = Amazake::find($request->id);
      if (empty($amazake)) {
        abort(404);    
      }
      return view('admin.amazake.edit', ['amazake_form' => $amazake]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Amazake::$rules);
      // Amazake Modelからデータを取得する
      $amazake = Amazake::find($request->id);
      // 送信されてきたフォームデータを格納する
      $amazake_form = $request->all();
      
      //image1
      if (isset($amazake_form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $amazake->image_path1 = basename($path1);
        unset($amazake_form['image1']);
      } elseif (isset($request->remove)) {
        $amazake->image_path1 = null;
        unset($news_form['remove']);
      }
      //image2
      if (isset($amazake_form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $amazake->image_path = basename($path2);
        unset($amazake_form['image2']);
      } elseif (isset($request->remove)) {
        $amazake->image_path = null;
        unset($news_form['remove']);
      }
      //image3
      if (isset($amazake_form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $amazake->image_path = basename($path3);
        unset($amazake_form['image3']);
      } elseif (isset($request->remove)) {
        $amazake->image_path = null;
        unset($news_form['remove']);
      }
      unset($amazake_form['_token']);

      // 該当するデータを上書きして保存する
      $amazake->fill($amazake_form)->save();
      
        $amazakehistory = new AmazakeHistory;
        $amazakehistory->amazake_id = $amazake->id;
        $amazakehistory->edited_at = Carbon::now();
        $amazakehistory->save();
        
      return redirect('admin/amazake');
      
      
  }
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $amazake = Amazake::find($request->id);
      // 削除する
      $amazake->delete();
      return redirect('admin/amazake/');
  }  
}
