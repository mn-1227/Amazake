<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amazake;

class AmazakeController extends Controller
{
   
     public function method()
  {
      return view('amazake.amazake_method');
  }
  
//   public function sort()
//   {
//       return view('amazake.amazake_method');
//   }
  
  
  /*public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Amazake::where('amazake', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Amazake::all();
      }
      */
      //コード例
      public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      
      // 並び替え条件取得(defaultは更新日)
      $sort_conditions = "updated_at";
      
      
      if (isset($_GET['updated_at'])) {
          $sort_conditions = "updated_at";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();;
      }elseif(isset($_GET['amazake'])) {
          $sort_conditions = "amazake";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
      }elseif(isset($_GET['amasa'])){
          $sort_conditions = "amasa";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
      }elseif(isset($_GET['kuse'])){
          $sort_conditions = "kuse";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
      }elseif(isset($_GET['nedan'])){
          $sort_conditions = "nedan";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
      }elseif(isset($_GET['komekann'])){
          $sort_conditions = "komekann";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
      }
      
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Amazake::where('amazake', $cond_title)->orderBy($sort_conditions, 'desc')->paginate(10);
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }
      return view('amazake.amazake_sort', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  
}
