<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
     public function index(Request $request)
  {
      $posts = Item::orderBy('updated_at', 'desc')->paginate(5);
      return view('amazake.item_index', ['posts' => $posts]);
  }
  
   public function open(Request $request)
  {
      // amazake Modelからデータを取得する
      $item_int = Item::find($request->id);
      if (empty($item_int)) {
        abort(404);    
      }
      // \Log::debug($amazake_int->image_path1);
      return view('amazake.item_introduction',compact('item_int'));
  }
}
