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
          $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
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
  
  public function open(Request $request)
  {
      // amazake Modelからデータを取得する
      $amazake_int = Amazake::find($request->id);
      if (empty($amazake_int)) {
        abort(404);    
      }
      
      return view('amazake.amazake_introduction',compact('amazake_int'));
  }
   public function japan($name=null)
  {
      $posts = Amazake::orderBy('amazake', 'desc')->paginate(5);
      if  ($name == 1) {
        $posts = Amazake::where('todoufuken', 'like', '%北海道%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 2){
        $posts = Amazake::where('todoufuken', 'like', '%青森県%')->orderBy('amazake', 'desc')->paginate(5);
      }
     // $posts =NULL;
      //\Log::debug($posts);
      // \Log::debug($posts."あ");
      return view('amazake.amazake_japan',['posts' => $posts]);
  }
}
//Amazake::orderBy('amazake', 'desc')->paginate(5)
