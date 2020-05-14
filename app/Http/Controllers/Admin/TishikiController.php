<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tishiki;
use App\TishikiHistory;

use Carbon\Carbon;


class TishikiController extends Controller
{
     public function add()
  {
      return view('admin.amazake.tishiki_create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Tishiki::$rules);
      
      $tishiki = new Tishiki;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$phpto->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $tishiki->image_path = basename($path);
      } else {
          $tishiki->image_path = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
     
      // データベースに保存する
        $tishiki->fill($form);
        $tishiki->save();
      
       //admin/tishiki/createにリダイレクトする
       return redirect('admin/tishiki/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Tishiki::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Tishiki::all();
      }
      return view('admin.amazake.tishiki_index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // Tishiki Modelからデータを取得する
      $tishiki = Tishiki::find($request->id);
      if (empty($tishiki)) {
        abort(404);    
      }
      return view('admin.amazake.tishiki_edit', ['tishiki_form' => $tishiki]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Tishiki::$rules);
      // Tishiki Modelからデータを取得する
      $tishiki = Tishiki::find($request->id);
      // 送信されてきたフォームデータを格納する
      $tishiki_form = $request->all();
      
      //image
      if (isset($amazake_form['image'])) {
        $path = $request->file('image')->store('public/image');
        $tishiki->image_path = basename($path);
        unset($tishiki_form['image']);
      } elseif (isset($request->remove)) {
        $tishiki->image_path = null;
        unset($tishiki_form['remove']);
      }
     
      unset($tishiki_form['_token']);

      // 該当するデータを上書きして保存する
      $tishiki->fill($tishiki_form)->save();
      
        $tishikihistory = new TishikiHistory;
        $tishikihistory->tishiki_id = $tishiki->id;
        $tishikihistory->edited_at = Carbon::now();
        $tishikihistory->save();
        
      return redirect('admin/tishiki');
      
      
  }
  public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $tishiki = Tishiki::find($request->id);
      // 削除する
      $tishiki->delete();
      return redirect('admin/tishiki/');
  }  
}
