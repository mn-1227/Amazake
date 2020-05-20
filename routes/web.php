<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    //甘酒情報ページ
    Route::get('amazake/create', 'Admin\AmazakeController@add');
    Route::post('amazake/create', 'Admin\AmazakeController@create'); 
    Route::get('amazake', 'Admin\AmazakeController@index');
    Route::get('amazake/edit', 'Admin\AmazakeController@edit');
    Route::post('amazake/edit', 'Admin\AmazakeController@update');
    Route::get('amazake/delete', 'Admin\AmazakeController@delete');
    //甘酒の知識ページ
    Route::get('tishiki/create', 'Admin\TishikiController@add');
    Route::post('tishiki/create', 'Admin\TishikiController@create'); 
    Route::get('tishiki', 'Admin\TishikiController@index');
    Route::get('tishiki/edit', 'Admin\TishikiController@edit');
    Route::post('tishiki/edit', 'Admin\TishikiController@update');
    Route::get('tishiki/delete', 'Admin\TishikiController@delete');
    //関連商品ページ
    Route::get('item/create', 'Admin\ItemController@add');
    Route::post('item/create', 'Admin\ItemController@create'); 
    Route::get('item', 'Admin\ItemController@index');
    Route::get('item/edit', 'Admin\ItemController@edit');
    Route::post('item/edit', 'Admin\ItemController@update');
    Route::get('item/delete', 'Admin\ItemController@delete');
    //旅記録ページ
    Route::get('travel/create', 'Admin\TravelController@add');
    Route::post('travel/create', 'Admin\TravelController@create'); 
    Route::get('travel', 'Admin\TravelController@index');
    Route::get('travel/edit', 'Admin\TravelController@edit');
    Route::post('travele/edit', 'Admin\TravelController@update');
    Route::get('travel/delete', 'Admin\TravelController@delete');
    //料理のページ
    Route::get('cooking/create', 'Admin\CookingController@add');
    Route::post('cooking/create', 'Admin\CookingController@create'); 
    Route::get('cooking', 'Admin\CookingController@index');
    Route::get('cooking/edit', 'Admin\CookingController@edit');
    Route::post('cooking/edit', 'Admin\CookingController@update');
    Route::get('cooking/delete', 'Admin\CookingController@delete');
    
});

Route::group(['prefix' => 'search'], function() {
    //front検索ページ
    Route::get('/', 'AmazakeController@method');
   // Route::get('sort', 'AmazakeController@index');
    Route::get('introduction', 'AmazakeController@open');
    Route::get('undameshi', 'AmazakeController@undameshi');
    Route::get('undameshi/today', 'AmazakeController@today');
    
});  

Route::get('search/sort/{name?}', 'AmazakeController@index', function($name = null) {
    return $name;
});

 Route::get('search/japan/{name?}', 'AmazakeController@japan', function($name = null) {
    return $name;
});   

Route::group(['prefix' => 'kurashi'], function() {
    //home遷移ページ
    Route::get('/', 'KurashiController@home');
    Route::get('info', 'KurashiController@info');
});   

Route::group(['prefix' => 'tishiki'], function() {
    //front甘酒検索ページ
    Route::get('/', 'TishikiController@index');
    Route::get('introduction', 'TishikiController@open');
    
});   

Route::group(['prefix' => 'item'], function() {
    //front関連商品ページ
    Route::get('/', 'ItemController@index');
    Route::get('introduction', 'ItemController@open');
    
});   

Route::group(['prefix' => 'travel'], function() {
    //front旅記録ページ
    Route::get('/', 'TravelController@index');
    Route::get('introduction', 'TravelController@open');
    
});  

Route::group(['prefix' => 'cooking'], function() {
    //front旅記録ページ
    Route::get('/', 'CookingController@index');
    Route::get('introduction', 'CookingController@open');
    
});  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
