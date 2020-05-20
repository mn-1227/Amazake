<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tishiki;

class TishikiController extends Controller
{
    public function index(Request $request)
  {
      $posts = Tishiki::orderBy('updated_at', 'desc')->paginate(5);
      return view('amazake.tishiki_index', ['posts' => $posts]);
  }
  
   public function open(Request $request)
  {
      // amazake Modelからデータを取得する
      $tishiki_int = Tishiki::find($request->id);
      if (empty($tishiki_int)) {
        abort(404);    
      }
      // \Log::debug($amazake_int->image_path1);
      return view('amazake.tishiki_introduction',compact('tishiki_int'));
  }
  
}
