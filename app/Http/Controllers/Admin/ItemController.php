<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\ItemHistory;

use Carbon\Carbon;

class ItemController extends Controller
{
     public function add()
  {
      return view('admin.amazake.item_create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Item::$rules);
      
      $item = new Item;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$phpto->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $item->image_path = basename($path);
      } else {
          $item->image_path = null;
      }
      
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
     
      // データベースに保存する
        $item->fill($form);
        $item->save();
      
       //admin/item/createにリダイレクトする
       return redirect('admin/item/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Item::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Item::all();
      }
      return view('admin.amazake.item_index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // item Modelからデータを取得する
      $item = Item::find($request->id);
      if (empty($item)) {
        abort(404);    
      }
      return view('admin.amazake.item_edit', ['item_form' => $item]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Item::$rules);
      // Item Modelからデータを取得する
      $item = Item::find($request->id);
      // 送信されてきたフォームデータを格納する
      $item_form = $request->all();
      
      //image
      if (isset($item_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $item->image_path = basename($path);
        unset($item_form['image']);
      } elseif (isset($request->remove)) {
        $item->image_path = null;
        unset($item_form['remove']);
      }
      
      unset($item_form['_token']);

      // 該当するデータを上書きして保存する
      $item->fill($item_form)->save();
      
        $itemhistory = new ItemHistory;
        $itemhistory->item_id = $item->id;
        $itemhistory->edited_at = Carbon::now();
        $itemhistory->save();
        
      return redirect('admin/item');
      
      
  }
  public function delete(Request $request)
  {
      // 該当するItem Modelを取得
      $item = Item::find($request->id);
      // 削除する
      $item->delete();
      return redirect('admin/item/');
  }  
}
