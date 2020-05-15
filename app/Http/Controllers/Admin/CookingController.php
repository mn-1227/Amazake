<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cooking;
use App\CookingHistory;

use Carbon\Carbon;

class CookingController extends Controller
{
     public function add()
  {
      return view('admin.amazake.cooking_create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Cooking::$rules);
      
      $cooking = new Cooking;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$phpto->image_path に画像のパスを保存する
      if (isset($form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $cooking->image_path1 = basename($path1);
      } else {
          $cooking->image_path1 = null;
      }
      
      if (isset($form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $cooking->image_path2 = basename($path2);
      } else {
          $cooking->image_path2 = null;
      }
      
      if (isset($form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $cooking->image_path3 = basename($path3);
      } else {
          $cooking->image_path3 = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);
      
      // データベースに保存する
        $cooking->fill($form);
        $cooking->save();
      
       //admin/cooking/createにリダイレクトする
       return redirect('admin/cooking/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Cooking::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Cooking::all();
      }
      return view('admin.amazake.cooking_index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // Cooking Modelからデータを取得する
      $cooking = Cooking::find($request->id);
      if (empty($cooking)) {
        abort(404);    
      }
      return view('admin.amazake.cooking_edit', ['cooking_form' => $cooking]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Cooking::$rules);
      // Cooking Modelからデータを取得する
      $cooking = Cooking::find($request->id);
      // 送信されてきたフォームデータを格納する
      $cooking_form = $request->all();
      
      //image1
      if (isset($cooking_form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $cooking->image_path1 = basename($path1);
        unset($cooking_form['image1']);
      } elseif (isset($request->remove)) {
        $cooking->image_path1 = null;
        unset($cooking_form['remove']);
      }
      //image2
      if (isset($cooking_form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $cooking->image_path2 = basename($path2);
        unset($cooking_form['image2']);
      } elseif (isset($request->remove)) {
        $cooking->image_path2 = null;
        unset($cooking_form['remove']);
      }
      //image3
      if (isset($cooking_form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $cooking->image_path3 = basename($path3);
        unset($cooking_form['image3']);
      } elseif (isset($request->remove)) {
        $cooking->image_path3 = null;
        unset($cooking_form['remove']);
      }
      unset($cooking_form['_token']);

      // 該当するデータを上書きして保存する
      $cooking->fill($cooking_form)->save();
      
        $cookinghistory = new CookingHistory;
        $cookinghistory->cooking_id = $cooking->id;
        $cookinghistory->edited_at = Carbon::now();
        $cookinghistory->save();
        
      return redirect('admin/cooking');
      
      
  }
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $cooking = Cooking::find($request->id);
      // 削除する
      $cooking->delete();
      return redirect('admin/cooking/');
  }  
}
