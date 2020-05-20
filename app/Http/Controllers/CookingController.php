<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cooking;

class CookingController extends Controller
{
    public function index(Request $request)
  {
      $posts = Cooking::orderBy('updated_at', 'desc')->paginate(5);
      return view('amazake.cooking_index', ['posts' => $posts]);
  }
  
   public function open(Request $request)
  {
      // amazake Modelからデータを取得する
      $cooking_int = cooking::find($request->id);
      if (empty($cooking_int)) {
        abort(404);    
      }
      // \Log::debug($amazake_int->image_path1);
      return view('amazake.cooking_introduction',compact('cooking_int'));
  }
}
