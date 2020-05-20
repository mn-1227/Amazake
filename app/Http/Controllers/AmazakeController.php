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
  //     public function index(Request $request)
  // {
  //     $cond_title = $request->cond_title;
      
  //     // 並び替え条件取得(defaultは更新日)
  //     $sort_conditions = "updated_at";
      
      
  //     if (isset($_GET['updated_at'])) {
  //         $sort_conditions = "updated_at";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }elseif(isset($_GET['amazake'])) {
  //         $sort_conditions = "amazake";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }elseif(isset($_GET['amasa'])){
  //         $sort_conditions = "amasa";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }elseif(isset($_GET['kuse'])){
  //         $sort_conditions = "kuse";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }elseif(isset($_GET['nedan'])){
  //         $sort_conditions = "nedan";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }elseif(isset($_GET['komekann'])){
  //         $sort_conditions = "komekann";
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->get();
  //     }
      
  //     if ($cond_title != '') {
  //         // 検索されたら検索結果を取得する
  //         $posts = Amazake::where('amazake', $cond_title)->orderBy($sort_conditions, 'desc')->paginate(10);
  //     } else {
  //         // それ以外はすべてのニュースを取得する
  //         $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
  //     }
  //     return view('amazake.amazake_sort', ['posts' => $posts, 'cond_title' => $cond_title]);
  // }
  
   public function index(Request $request,$name=null)
  {
      $cond_title = $request->cond_title;
      
      // 並び替え条件取得(defaultは更新日)
      $sort_conditions = "updated_at";
      $posts = Amazake::orderBy('updated_at', 'desc')->paginate(2);
      
      if ($name == 1) {
          $sort_conditions = "updated_at";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 2) {
          $sort_conditions = "updated_at";
          $posts = Amazake::orderBy($sort_conditions, 'asc')->paginate(2);
      }elseif($name == 3) {
          $sort_conditions = "amazake";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 4) {
          $sort_conditions = "amazake";
          $posts = Amazake::orderBy($sort_conditions, 'asc')->paginate(2);
      }elseif($name == 5){
          $sort_conditions = "amasa";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 6){
          $sort_conditions = "amasa";
          $posts = Amazake::orderBy($sort_conditions, 'asc')->paginate(2);
      }elseif($name == 7){
          $sort_conditions = "kuse";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 8){
          $sort_conditions = "kuse";
          $posts = Amazake::orderBy($sort_conditions, 'asc')->paginate(2);
      }elseif($name == 9){
          $sort_conditions = "nedan";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 10){
          $sort_conditions = "nedan";
          $posts = Amazake::orderBy($sort_conditions, 'asc')->paginate(2);
      }elseif($name == 11){
          $sort_conditions = "komekann";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }elseif($name == 12){
          $sort_conditions = "komekann";
          $posts = Amazake::orderBy($sort_conditions, 'desc')->paginate(2);
      }
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Amazake::where('amazake', $cond_title)->orderBy($sort_conditions, 'desc')->paginate(2);
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
      // \Log::debug($amazake_int->image_path1);
      return view('amazake.amazake_introduction',compact('amazake_int'));
  }
   public function japan($name=null)
  {
      $posts = Amazake::orderBy('amazake', 'desc')->paginate(5);
      if  ($name == 1) {
        $posts = Amazake::where('todoufuken', 'like', '%北海道%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 2){
        $posts = Amazake::where('todoufuken', 'like', '%青森県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 3){
        $posts = Amazake::where('todoufuken', 'like', '%岩手県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 4){
        $posts = Amazake::where('todoufuken', 'like', '%宮城県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 5){
        $posts = Amazake::where('todoufuken', 'like', '%福島県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 6){
        $posts = Amazake::where('todoufuken', 'like', '%山形県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 7){
        $posts = Amazake::where('todoufuken', 'like', '%秋田県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 8){
        $posts = Amazake::where('todoufuken', 'like', '%東京都%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 9){
        $posts = Amazake::where('todoufuken', 'like', '%埼玉県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 10){
        $posts = Amazake::where('todoufuken', 'like', '%神奈川県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 11){
        $posts = Amazake::where('todoufuken', 'like', '%千葉県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 12){
        $posts = Amazake::where('todoufuken', 'like', '%茨城県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 13){
        $posts = Amazake::where('todoufuken', 'like', '%栃木県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 14){
        $posts = Amazake::where('todoufuken', 'like', '%群馬県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 15){
        $posts = Amazake::where('todoufuken', 'like', '%新潟県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 16){
        $posts = Amazake::where('todoufuken', 'like', '%長野県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 17){
        $posts = Amazake::where('todoufuken', 'like', '%山梨県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 18){
        $posts = Amazake::where('todoufuken', 'like', '%静岡県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 19){
        $posts = Amazake::where('todoufuken', 'like', '%愛知県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 20){
        $posts = Amazake::where('todoufuken', 'like', '%岐阜県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 21){
        $posts = Amazake::where('todoufuken', 'like', '%富山県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 22){
        $posts = Amazake::where('todoufuken', 'like', '%石川県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 23){
        $posts = Amazake::where('todoufuken', 'like', '%福井県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 24){
        $posts = Amazake::where('todoufuken', 'like', '%滋賀県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 25){
        $posts = Amazake::where('todoufuken', 'like', '%三重県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 26){
        $posts = Amazake::where('todoufuken', 'like', '%奈良県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 27){
        $posts = Amazake::where('todoufuken', 'like', '%和歌山県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 28){
        $posts = Amazake::where('todoufuken', 'like', '%大阪府%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 29){
        $posts = Amazake::where('todoufuken', 'like', '%京都府%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 30){
        $posts = Amazake::where('todoufuken', 'like', '%兵庫県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 31){
        $posts = Amazake::where('todoufuken', 'like', '%鳥取県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 32){
        $posts = Amazake::where('todoufuken', 'like', '%島根県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 33){
        $posts = Amazake::where('todoufuken', 'like', '%山口県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 34){
        $posts = Amazake::where('todoufuken', 'like', '%広島県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 35){
        $posts = Amazake::where('todoufuken', 'like', '%岡山県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 36){
        $posts = Amazake::where('todoufuken', 'like', '%香川県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 37){
        $posts = Amazake::where('todoufuken', 'like', '%徳島県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 38){
        $posts = Amazake::where('todoufuken', 'like', '%愛媛県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 39){
        $posts = Amazake::where('todoufuken', 'like', '%高知県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 40){
        $posts = Amazake::where('todoufuken', 'like', '%福岡県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 41){
        $posts = Amazake::where('todoufuken', 'like', '%大分県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 42){
        $posts = Amazake::where('todoufuken', 'like', '%宮崎県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 43){
        $posts = Amazake::where('todoufuken', 'like', '%熊本県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 44){
        $posts = Amazake::where('todoufuken', 'like', '%鹿児島県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 45){
        $posts = Amazake::where('todoufuken', 'like', '%佐賀県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 46){
        $posts = Amazake::where('todoufuken', 'like', '%長崎県%')->orderBy('amazake', 'desc')->paginate(5);
      }elseif($name == 47){
        $posts = Amazake::where('todoufuken', 'like', '%沖縄県%')->orderBy('amazake', 'desc')->paginate(5);
      }
      
     if (count($posts) == 0){
       $posts = NULL;
     };
      
     // $posts =NULL;
     // \Log::debug(count($posts));
      // \Log::debug($posts."あ");
      return view('amazake.amazake_japan',['posts' => $posts]);
  }
  public function undameshi()
  {
      return view('amazake.amazake_undameshi');
  }
  public function today(Request $request)
  {
      // amazake Modelからデータを取得する
      $amazake_int = Amazake::inRandomOrder()->first();
      // \Log::debug($amazake_int);
      return view('amazake.amazake_today',compact('amazake_int'));
  }
}
//Amazake::orderBy('amazake', 'desc')->paginate(5);
