<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurashiController extends Controller
{
    public function home()
  {
      return view('amazake.home_index');
  }
  public function info()
  {
      return view('amazake.home_info');
  }
}
