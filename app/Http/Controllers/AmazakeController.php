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
      return view('amazake.amazake_sort', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  public function daySort()
  {
      $amazake = Amazake::orderBy('updated_at', 'ask')->get();

        return view('amazake.amazake_sort');
  }
}
