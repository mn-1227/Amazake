<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index(Request $request)
  {
      $posts = Travel::orderBy('updated_at', 'desc')->paginate(5);
      return view('amazake.travel_index', ['posts' => $posts]);
  }
  
   public function open(Request $request)
  {
      // amazake Modelからデータを取得する
      $travel_int = Travel::find($request->id);
      if (empty($travel_int)) {
        abort(404);    
      }
      // \Log::debug($amazake_int->image_path1);
      return view('amazake.travel_introduction',compact('travel_int'));
  }
}
