<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Travel;
use App\TravelHistory;

use Carbon\Carbon;

class TravelController extends Controller
{
     public function add()
  {
      return view('admin.amazake.travel_create');
  }
     public function create(Request $request)
  {
       // Varidationを行う
      $this->validate($request, Travel::$rules);
      
      $travel = new Travel;
      $form = $request->all();
      
      // フォームから画像が送信されてきたら、保存して、$phpto->image_path に画像のパスを保存する
      if (isset($form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $travel->image_path1 = basename($path1);
      } else {
          $travel->image_path1 = null;
      }
      
      if (isset($form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $travel->image_path2 = basename($path2);
      } else {
          $travel->image_path2 = null;
      }
      
      if (isset($form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $travel->image_path3 = basename($path3);
      } else {
          $travel->image_path3 = null;
      }
      
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image1']);
      unset($form['image2']);
      unset($form['image3']);
      
      // データベースに保存する
        $travel->fill($form);
        $travel->save();
      
       //admin/travel/createにリダイレクトする
       return redirect('admin/travel/create');
  }  
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Travel::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Travel::all();
      }
      return view('admin.amazake.travel_index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function edit(Request $request)
  {
      // Travel Modelからデータを取得する
      $travel = Travel::find($request->id);
      if (empty($travel)) {
        abort(404);    
      }
      return view('admin.amazake.travel_edit', ['travel_form' => $travel]);
  }


  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Travel::$rules);
      // travel Modelからデータを取得する
      $travel = Travel::find($request->id);
      // 送信されてきたフォームデータを格納する
      $travel_form = $request->all();
      
      //image1
      if (isset($travel_form['image1'])) {
        $path1 = $request->file('image1')->store('public/image');
        $travel->image_path1 = basename($path1);
        unset($travel_form['image1']);
      } elseif (isset($request->remove)) {
        $travel->image_path1 = null;
        unset($travel_form['remove']);
      }
      //image2
      if (isset($travel_form['image2'])) {
        $path2 = $request->file('image2')->store('public/image');
        $travel->image_path2 = basename($path2);
        unset($travel_form['image2']);
      } elseif (isset($request->remove)) {
        $travel->image_path2 = null;
        unset($travel_form['remove']);
      }
      //image3
      if (isset($travel_form['image3'])) {
        $path3 = $request->file('image3')->store('public/image');
        $travel->image_path3 = basename($path3);
        unset($travel_form['image3']);
      } elseif (isset($request->remove)) {
        $travel->image_path3 = null;
        unset($travel_form['remove']);
      }
      unset($travel_form['_token']);

      // 該当するデータを上書きして保存する
      $travel->fill($travel_form)->save();
      
        $travelhistory = new TravelHistory;
        $travelhistory->travel_id = $travel->id;
        $travelhistory->edited_at = Carbon::now();
        $travelhistory->save();
        
      return redirect('admin/travel');
      
      
  }
  public function delete(Request $request)
  {
      // 該当するTravel Modelを取得
      $travel = Travel::find($request->id);
      // 削除する
      $travel->delete();
      return redirect('admin/travel/');
  }  
}
